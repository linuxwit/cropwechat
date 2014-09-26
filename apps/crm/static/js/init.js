    seajs.config({
        alias: {
            'jquery': 'lib/jquery/1.8.3/jquery.min',
            'bootstrap': 'lib/bootstrap/bootstrap.min',
            'angularjs': 'lib/angularjs/1.3.0/angular.min',
            'bootbox': 'lib/bootbox/4.3.0/bootbox.min'
        }
    });
    //init.js
    define(function(require, exports, module) {
        /*
        require('jquery');
        seajs.use(['bootstrap','bootbox'], function(a) {
            bootbox.alert('Hello world');
        });
        jQuery('#content').html('ok');
        */
        require('angularjs');

        function DemoCtrl($cope){
             $scope.phones = [{
                    "name": "Nexus S",
                    "snippet": "Fast just got faster with Nexus S."
                }, {
                    "name": "Motorola XOOM™ with Wi-Fi",
                    "snippet": "The Next, Next Generation tablet."
                }, {
                    "name": "MOTOROLA XOOM™",
                    "snippet": "The Next, Next Generation tablet."
                }];
        }
        
        angular.module('Test', []).controller('DemoCtrl', ['$scope',
            function($scope) {

                $scope.phones = [{
                    "name": "Nexus S",
                    "snippet": "Fast just got faster with Nexus S."
                }, {
                    "name": "Motorola XOOM™ with Wi-Fi",
                    "snippet": "The Next, Next Generation tablet."
                }, {
                    "name": "MOTOROLA XOOM™",
                    "snippet": "The Next, Next Generation tablet."
                }];
            }
        ])
    });