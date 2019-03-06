var apiURL = "loadData.php";
var app = angular.module('appLogin',['ngMessages'])
        .controller('loginController', function($scope, $window, $http){
            $http.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded;charset=utf-8;';
            $scope.msj = "";
            $scope.Login = {};
            $scope.submit = function(formLogin){
                if($scope.Login.Usuario_Login === undefined)
                    $scope.Login.Usuario_Login = "";
                
                if($scope.Login.Clave === undefined)
                    $scope.Login.Clave = "";
                
                
                $http({
                    headers:{'Content-Type':'application/x-www-form-urlencoded;charset=utf-8;'},
                    method:'POST',
                    url: apiURL + '?login',
                    data:$.param($scope.Login)
                })
                        .then(function(resp){
                            if(resp.data.ok === true){
                                $scope.msj = "";
                                $window.location.reload();
                                //console.log(resp.data.ok);
                            }
                            else{
                                $scope.msj = "Contraseña incorrecta";
                                console.log(resp.data.ok);
                            }
                        })
                        .catch(function(resp){
                            console.log(resp);
                        });

                
            };
            
            $scope.logout = function(){
                $http({
                method:'POST',
                url:apiURL+'?logout',
                headers:{'Content-Type':'application/x-www-form-urlencoded;charset=utf-8;'}
            })
                .then(function(resp){
                    console.log($window.location.host);
                    $window.location.reload();
                })
                .catch(function(resp){
                    console.log(resp);
                });
            };
        });

