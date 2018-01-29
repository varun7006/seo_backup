(function () {

    'use strict';
    angular
            .module('app')
            .controller('dashboardCtrl', dashboardCtrl);
    dashboardCtrl.$inject = ['$scope', '$http', '$state'];
    function dashboardCtrl($scope, $http, $state) {
        $scope.userList = [];
        $scope.userCount = 0;
        $scope.sourceList = [];
        $scope.sourceCount = 0;
        $scope.bucketList = [];
        $scope.bucketCount = 0;

        $scope.getUserList = function () {
            $http({
                method: 'GET',
                url: baseURL + '/user/getuserlist',
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).then(function (jsondata) {
                if (jsondata.data.status == 'SUCCESS') {
                    $scope.userList = jsondata.data.value.list;
                    $scope.userCount = jsondata.data.value.count;
                } else {
                    $scope.countryList = [];
                }

            });
        }
        $scope.getUserList();

        $scope.getSourceList = function () {
            $http({
                method: 'GET',
                url: baseURL + '/sources/getsourcelist',
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).then(function (jsondata) {
                if (jsondata.data.status == 'SUCCESS') {
                    $scope.sourceList = jsondata.data.value.list;
                    $scope.sourceCount = jsondata.data.value.count;
                }
            });
        }

        $scope.getSourceList();

        $scope.getBucketList = function () {
            $http({
                method: 'GET',
                url: baseURL + '/bucket/getbucketlist',
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).then(function (jsondata) {
                if (jsondata.data.status == 'SUCCESS') {
                    $scope.bucketList = jsondata.data.value.list;
                    $scope.bucketCount = jsondata.data.value.count;
                }
            });
        }

        $scope.getBucketList();

        $scope.checkTask = function (task, index) {
            if (task.task_class == '') {
                $scope.bucketList[index].task_class = 'todo_completed';
                $scope.bucketList[index].task_status = 'COMPLETED';
            } else {
                $scope.bucketList[index].task_class = '';
                $scope.bucketList[index].task_status = 'COMPLETED';
            }
        }
        
        $scope.updateTaskDetails = function () {
            $http({
                method: 'POST',
                url: baseURL + '/bucket/updatetask',
                dataType: "JSON",
                data: 'data=' + encodeURIComponent(angular.toJson($scope.bucketList)),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).then(function (jsondata) {
                $scope.isAjax = true;
                alert(jsondata.data.msg)
                $scope.getBucketList();
            });
        }
        
        $scope.addNewTask = function(){
            $state.go('addtask');
        }

        $scope.viewBrokenLinks = function () {
            $state.go('brokenlinks');
        }
    }
})();