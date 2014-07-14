/*==================================================
=       	      AngularJS main file              =
==================================================*/

var app = angular.module('app', ['ui.bootstrap'])

.config(['$interpolateProvider', function($interpolateProvider){
    $interpolateProvider.startSymbol('[[').endSymbol(']]');
}]);