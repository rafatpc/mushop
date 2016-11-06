app.controller('MainController', function($scope, $http) {

    /**
     * Storage
     */
    $scope.storage = localStorage;

    /**
     * Login
     */
    $scope.login = {
        submit: function() {
            $http({
                method: 'POST',
                url: '/login',
                data: $scope.login
            })
            .success(function(data) {
                if(data.success == true) {
                    $scope.storage.setItem('name', data.username.name);
                    $scope.storage.setItem('email', data.username.email);
                    $scope.storage.setItem('api_token', data.username.api_token);
                    $scope.storage.setItem('is_logged', true);
                } else {
                    alert('erro ao logar');
                }
            })
            .error(function() {
                alert('erro ao logar');
            });
        }
    }

});

app.controller('LogoutController', function($scope, $location) {

    $scope.login.username = '';
    $scope.login.password = '';
    $scope.storage.clear();
    $location.path('/');

});
