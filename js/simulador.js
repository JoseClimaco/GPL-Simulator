/**
 * Created by josec on 10/07/2015.
 */


angular.module('simuladorApp', [])
    .controller('simuladorController', ['$scope', function($scope) {
        $scope.km = 0;
        $scope.consumogas = 0;
        $scope.consumogpl = 0;
        $scope.precogas = 0;
        $scope.precogpl = 0;
        $scope.gasolina = 0;
        $scope.pconsumo = 0;
        $scope.investimento = 0;
        $scope.breakeven = 0;
        $scope.poupancaano = 0;

        $scope.change = function() {
            var km = $scope.kmdia;

            $scope.kmmes = km * 30;
            $scope.kmano = km * 365;

            var consumogas = $scope.consumogas;
            var consumogpl = $scope.consumogpl;
            var precogas = $scope.precogas;
            var precogpl = $scope.precogpl;
            var investimento = $scope.investimento;


            $scope.custogasdia = ( km / 100 ) * consumogas * precogas;
            $scope.custogpldia = ( km / 100 ) * consumogpl * precogpl;

            //$scope.custogasano = $scope.custogasdia * 365;
            //$scope.custogplano = $scope.custogpldia * 365;
            //
            //$scope.poupancaano = $scope.custogasano - $scope.custogplano;
            //
            //$scope.breakeven = $scope.investimento / $scope.poupancaano;

        };

        $scope.changemes = function() {
            var km = $scope.kmmes;
            $scope.kmdia = km / 30;
            $scope.kmano = km * 12;
        };
        $scope.changeano = function() {
            var km = $scope.kmano;
            $scope.kmdia = km / 365;
            $scope.kmmes = km / 12;
        };

    }]);