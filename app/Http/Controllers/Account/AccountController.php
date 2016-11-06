<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\Http\Requests\Account\LoginRequest;

class AccountController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = [
            'email'      => $request->username,
            'password'   => $request->password,
        ];

        if (Auth::once($credentials)) {
            $user = Auth::user();
            $user->api_token = str_random(60) . $user->id;

            if($user->save()) {
                return response()->json([
                    'success' => true,
                    'username' => $user,
                ], 200);
            }
        }

        return response()->json(['success' => false], 401);
    }
}
