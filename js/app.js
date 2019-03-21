var apiURL = 'loadData.php';
var btnPlus = $('.agregar'),
    formUp = $('.formData');

btnPlus.on('click', function(e){
    e.preventDefault();
    formUp.slideToggle();
});
        
var app = angular.module('appSapo',['angularUtils.directives.dirPagination','ngMessages','appLogin'])
        .filter('porcentaje', ['$filter', function ($filter) {
            return function (input) {
                if(input != undefined)
                return input + '%';
            };
        }])
        .controller('pedidosController', function($scope,$window,$http){
            $scope.pedidos = [];
            $scope.numXpag = 5;
            $scope.consultaPedidos = function(codVendedor){
                $http.get(apiURL + '?a=get&t=ped&codVend=' + codVendedor)
                        .then(function(resp){
                            $scope.pedidos = resp.data;                            
                        })
                        .catch(function(resp){
                            console.log(resp)
                        });
            }
        });


