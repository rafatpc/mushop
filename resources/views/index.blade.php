<!DOCTYPE html>
<html lang="pt-BR" ng-app="mushop">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mushop - UTPSoftwares</title>

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" media="screen">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <header class="header">
        <div class="logo">
            <a href="#">mushop</a>
        </div>

        @if(!isset($_GET['user']))
        <form class="sign-in" action="#" method="post">
            <input type="text" name="username" class="input" placeholder="usuário">
            <input type="text" name="password" class="input" placeholder="senha">
            <button type="button" class="btn">Entrar</button>
        </form>
        @else
        <ul class="nav">
            <li class="profile">
                Vitor Leonel
                <i class="fa fa-caret-square-o-down"></i>

                <ul class="profile-menu">
                    <li><a href="#">Minha conta</a></li>
                    <li><a href="#">Sair</a></li>
                </ul>
            </li>
        </ul>
        @endif
    </header><!-- end header -->

    <script type="text/javascript" src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vendor/angular.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vendor/angular-route.min.js') }}"></script>
</body>
</html>
