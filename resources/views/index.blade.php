<!DOCTYPE html>
<html lang="pt-BR" ng-app="mushop" ng-controller="MainController">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
            <a href="#/">mushop</a>
        </div>

        <form class="sign-in" ng-submit="login.submit()" ng-show="!storage.getItem('is_logged')">
            <input type="text" name="username" class="input" placeholder="usuário" required="required" ng-model="login.username">
            <input type="password" name="password" class="input" placeholder="senha" required="required" ng-model="login.password">
            <button type="submit" class="btn blue" ng-disabled="login.button">
                <span ng-show="login.button == false"><i class="fa fa-sign-in fa-fw"></i></span>
                <span ng-show="login.button == true"><i class="fa fa-spinner fa-spin fa-fw"></i></span>
                Entrar
            </button>
        </form>

        <ul class="nav" ng-show="storage.getItem('is_logged') != null">
            <li><a href="#/">
                <i class="fa fa-home"></i>
                Início
            </a></li>

            <li><a href="#/store">
                <i class="fa fa-shopping-cart"></i>
                Shopping
            </a></li>

            <li class="profile">
                <i class="fa fa-caret-square-o-down"></i>
                @{{ storage.getItem('name') }}

                <ul class="profile-menu">
                    <li><a href="#/account">Minha conta</a></li>
                    <li><a href="#/logout">Sair</a></li>
                </ul>
            </li>
        </ul>
    </header><!-- end header -->

    <main class="main ng-view">
        carregando...
    </main><!-- end main -->

    <footer class="footer">

    </footer><!-- end footer -->

    <script type="text/javascript" src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vendor/angular.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vendor/angular-route.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
