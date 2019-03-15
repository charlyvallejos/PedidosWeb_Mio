var app = angular.module('appSapo',['ngMessages','appLogin'])
        .filter('porcentaje', ['$filter', function ($filter) {
            return function (input) {
                if(input != undefined)
                return input + '%';
            };
        }])
        .controller('pedidosController', function($scope,$window,$http){
            
        });


