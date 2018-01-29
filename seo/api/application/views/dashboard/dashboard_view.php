<section id="main" class="container-fluid">
    <div class="row">
        <section id="content-wrapper" class="form-elements">
            <div class="site-content-title">
                <h2 class="float-xs-left content-title-main">Dashboard</h2>
                <ol class="breadcrumb float-xs-right">
                    <li class="breadcrumb-item">
                        <span class="fs1" aria-hidden="true" data-icon=""></span>
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Components</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <div class="contain-inner dashboard_v4-page">
                <div class="row">
                    <div class="dashboard_v4_box_block">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="content">
                                <div class="dashboard_v4_box_icon float-xs-left primary_box">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="dashboard_v4_box_title float-xs-right">
                                    <h4>{{ userCount}}</h4>
                                    <p>Total Clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="content">
                                <div class="dashboard_v4_box_icon float-xs-left warning_box">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="dashboard_v4_box_title float-xs-right">
                                    <h4>{{ sourceCount}}</h4>
                                    <p>Total Sources</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="content">
                                <div class="dashboard_v4_box_icon float-xs-left success_box">
                                    <i class="fa fa-file-text"></i>
                                </div>
                                <div class="dashboard_v4_box_title float-xs-right">
                                    <h4>5</h4>
                                    <p>Total projects</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12" ng-click="viewBrokenLinks()">
                            <div class="content">
                                <div class="dashboard_v4_box_icon float-xs-left danger_box" >
                                    <i class="fa fa-book"  ng-click="viewBrokenLinks()"></i>
                                </div>
                                <div class="dashboard_v4_box_title float-xs-right">
                                    <h4><a ng-click="viewBrokenLinks()">24,300</a></h4>
                                    <p>Total Broken Links</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="content dashboard_v4_project_list">
                            <div class="dashboard-content">
                                <div class="dashboard-header">
                                    <h4 class="page-content-title float-xs-left">Overview Of All Projects </h4>
                                </div>
                                <div class="dashboard-box">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="basic_table table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Customer Name</th>
                                                            <th>Website</th>
                                                            <th>Completed Links This Month</th>
                                                            <th>Comment</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr ng-repeat="user in userList track by $index">
                                                            <td>{{ $index + 1}}</td>
                                                            <td>{{ user.name}}</td>
                                                            <td>{{ user.website}}</td> 
                                                            <td>{{ user.completed_links}}</td>
                                                            <td>
                                                                {{ user.comment}}                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="content dashboard_v4_project_list">
                            <h4 class="page-content-title">Todo list
                                <span style="float: right"><button class="btn btn-rounded btn-mini btn-success" ng-click="addNewTask()">Add New</button></span>
                            </h4>
                            <div class="divider15"></div>
                            <div class="todo_main">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="todo_message">
                                            <!--<span class="todo_total">7</span> of <span class="todo_remaining">7</span> remaining.-->
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <button type="button" ng-click="updateTaskDetails()" ng-show="bucketList.length > 0" class="btn btn-primary float-xs-right">Save</button>
                                    </div>
                                </div>
                                <div class="todo_block content-form-layout">
                                    <span ng-hide="bucketList.length > 0">There are no task in bucket list.</span>
                                    <ul id="todo-list" ng-show="bucketList.length > 0">
                                        <li class="{{ task.task_class }}" data-list="tudo" class="todo_completed" ng-repeat="task in bucketList track by $index">
                                            <div class="checkbox-squared">
                                                <input value="None" id="checkbox-squared{{$index}}" ng-model="task.checked" name="check" type="checkbox" ng-click="checkTask(task,$index)">
                                                <label for="checkbox-squared{{$index}}"></label>
                                                <span>{{ task.task_name }}</span>
                                                <span class="tag tag-pill tag-success float-xs-right">{{ task.date_diff > 0 ? task.date_diff + ' days ago' : 'today'}} </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
<!--                    <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="content dashboard_v4_project_list">
                            <div class="dashboard-content">
                                <div class="dashboard-header">
                                    <h4 class="page-content-title float-xs-left">Overview Of All Projects </h4>
                                </div>
                                <div class="dashboard-box">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="basic_table table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Customer Name</th>
                                                            <th>Website</th>
                                                            <th>Completed Links This Month</th>
                                                            <th>Comment</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr ng-repeat="user in userList track by $index">
                                                            <td>{{ $index + 1}}</td>
                                                            <td>{{ user.name}}</td>
                                                            <td>{{ user.website}}</td> 
                                                            <td>{{ user.completed_links}}</td>
                                                            <td>
                                                                {{ user.comment}}                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="dashboard_v4_weather">
                            <div class="weather-block text-xs-center">
                                <div class="weather-block_display">
                                    <canvas id="partly-cloudy-day"></canvas>
                                    <h2>35<i class="wi wi-degrees"></i></h2>
                                </div>
                                <div class="weather-display-title text-xs-center">
                                    <h5>Partly cloudy</h5>
                                    <h5>15km/37%</h5>
                                </div>
                            </div>
                            <div class="weather-display-block">
                                <div class="row">
                                    <div class="weather-display-day text-xs-center">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <h6>SUN</h6>
                                            <canvas id="sleet" width="30" height="30"></canvas>
                                            <h6>32<i class="wi wi-degrees"></i></h6>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <h6>MON</h6>
                                            <canvas id="wind" width="30" height="30"></canvas>
                                            <h6>45<i class="wi wi-degrees"></i></h6>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <h6>TUS</h6>
                                            <canvas id="partly-cloudy-night" width="30" height="30"></canvas>
                                            <h6>39<i class="wi wi-degrees"></i></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </section>

    </div>
</section>


