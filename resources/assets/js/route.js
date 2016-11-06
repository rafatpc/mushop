app.config(function($routeProvider, $httpProvider) {
    $httpProvider.defaults.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');
    $routeProvider
    .when("/", {
        templateUrl : "/views/home.html",
        controller  : "HomeController"
    })
    .when("/store", {
        templateUrl : "/views/store.html",
        controller  : "StoreController"
    })
    .when("/account", {
        templateUrl : "/views/account.html",
        controller  : "AccountController"
    })
    .when("/logout", {
        templateUrl : "/views/logout.html",
        controller  : "LogoutController"
    })
    .otherwise({ redirectTo : "/" });
});
