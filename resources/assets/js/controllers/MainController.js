app.controller('MainController', function($scope) {

    /**
     * Storage
     */
    $scope.storage = localStorage;

    /**
     * Login
     */
    $scope.login = {
        submit: function() {
            $scope.storage.setItem('is_logged', true);
        }
    }

});

app.controller('LogoutController', function($scope, $location) {

    $scope.login.username = '';
    $scope.login.password = '';
    $scope.storage.removeItem('is_logged');
    $location.path('/');

});
