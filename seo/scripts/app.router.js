'use strict';

/**
 * Config for the router
 */

angular.module('app')
        .config(
                ['$stateProvider', '$urlRouterProvider',
                    function ($stateProvider, $urlRouterProvider) {
                        $urlRouterProvider.otherwise('/dashboard');
                        $stateProvider

                                // HOME STATES AND NESTED VIEWS ========================================
                                .state('login', {
                                    url: '/login',
                                    templateUrl: baseURL + '/login',
                                    controller: "loginCtrl",
                                })
                                .state('dashboard', {
                                    url: '/dashboard',
                                    templateUrl: baseURL + '/dashboard',
                                    controller: "dashboardCtrl",
                                })
                                .state('users', {
                                    url: '/users',
                                    templateUrl: baseURL + '/users',
                                    controller: "userCtrl",
                                })
                                .state('addusers', {
                                    url: '/addusers',
                                    templateUrl: baseURL + '/users/addusers',
                                    controller: "userCtrl",
                                })
                                .state('sources', {
                                    url: '/sources',
                                    templateUrl: baseURL + '/sources',
                                    controller: "sourcesCtrl",
                                })
                                .state('addsources', {
                                    url: '/addsources',
                                    templateUrl: baseURL + '/sources/addsources',
                                    controller: "sourcesCtrl",
                                })
                                .state('brokenlinks', {
                                    url: '/brokenlinks',
                                    templateUrl: baseURL + '/reports/brokenlinks',
                                    controller: "sourcesCtrl",
                                })
                                .state('viewsourcereport', {
                                    url: '/viewsourcereport/:id',
                                    templateUrl: baseURL + '/sources/viewsourcereport',
                                    controller: "sourceReportCtrl",
                                })
                                .state('addtask', {
                                    url: '/addtask',
                                    templateUrl: baseURL + '/bucket/addtask',
                                    controller: "bucketCtrl",
                                })



                                // ABOUT PAGE AND MULTIPLE NAMED VIEWS =================================
                                .state('about', {
                                    // we'll get to this in a bit       
                                });
                    }
                ]
                );

