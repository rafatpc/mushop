app.controller('MainController', function($scope) {

    /**
     * Storage
     */
    $scope.storage = localStorage;

    /**
     * Login
     */
    $scope.username;
    $scope.password;

    $scope.login = function() {
        $scope.storage.setItem('is_logged', true);
    }

});

app.controller('LogoutController', function($scope, $location) {

    $scope.storage.removeItem('is_logged');
    $location.path('/');

});
