 define(['angular', './controller/index', './directive/index', './filter/index', './service/index'], 
 	function(ng) {
     'use strict';
     return ng.module('app', ['app.service', 'app.controller', 'app.filter', 'app.directive']);
 });