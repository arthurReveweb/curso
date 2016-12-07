/**
 * Created by Leonardo on 05/12/2016.
 */
angular.module('app.controllers')
    .controller('ClientListController', ['$scope', 'Client', function ($scope, Client) {
        $scope.clients = Client.query();
    }]);