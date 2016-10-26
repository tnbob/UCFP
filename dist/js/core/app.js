/**
 * Created by pakabah on 26/10/2016.
 */
var app = angular.module('app',[]);

app.config(function ($httpProvider) {
    $httpProvider.defaults.withCredentials = true;
});

app.factory('Login', function($http){
    return {

        login: function(username,password)
        {
            return  $http.post('http://tnbob.com/api/login.php',{username:username,password:password,app:'login'});
        }
    }
});


app.controller('LoginController', function($scope,Login){

    $scope.errnon = true;
    $scope.errpass = true;
    $scope.erruser = true;

    
    $scope.login = function(username,password)
    {
        if(username == null || username == undefined)
        {
            $scope.errnon = true;
            $scope.errpass = true;
            $scope.erruser = false;
        }
        else if(password == null || password == undefined)
        {
            $scope.errnon = true;
            $scope.errpass = false;
            $scope.erruser = true;
        }
        else {
            
            Login.login(username,password).success(function(data){
                if(data != '0')
                {
                    window.open("/","_self");
                }
                else if(data == 1)
                {
                    $scope.errnon = false;
                    $scope.errpass = true;
                    $scope.erruser = true;
                }
            })
            
        }
    }
});