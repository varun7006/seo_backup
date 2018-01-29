<section id="main" class="container-fluid">
    <div class="row">
        <section id="content-wrapper" class="form-elements">
            <div class="site-content-title">
                <h2 class="float-xs-left content-title-main">Sources</h2>
                <ol class="breadcrumb float-xs-right">
                    <li class="breadcrumb-item">
                        <span class="fs1" aria-hidden="true" data-icon=""></span>
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Sources</a></li>
                    <li class="breadcrumb-item active">Add Source</li>
                </ol>
            </div>
            <div class="contain-inner dashboard_v4-page">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="content dashboard_v4_project_list">
                            <div class="dashboard-content">
                                <div class="dashboard-header">
                                    <h4 class="page-content-title float-xs-left">Add New Source</h4>
                                </div>
                                <div class="dashboard-box">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form name="signupForm">
                                                <div class="all-form-section">
                                                    <div class="row">
                                                        <div class="element-form">
                                                            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-xs-12 text-xs-right"><label>Source</label></div>
                                                            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="exampleInputuname_3" ng-model="source.source_link" placeholder="Enter Link Here" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="element-form">
                                                            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-xs-12 text-xs-right"><label>Name</label></div>
                                                            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="exampleInputuname_3" ng-model="source.name" placeholder="Enter Name Here" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="element-form">
                                                            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-xs-12 text-xs-right"><label>Email</label></div>
                                                            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <input type="email" class="form-control" id="exampleInputEmail_3" name="email" ng-model="source.email" placeholder="Enter email" ng-pattern = "/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/">
                                                                </div>
                                                                <span style="color:Red" ng-show="signupForm.email.$dirty && signupForm.email.$error.pattern">Please Enter Valid Email</span>

                                                            </div>
                                                        </div>
                                                        <div class="element-form">
                                                            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-xs-12 text-xs-right"><label>Mobile No</label></div>
                                                            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="exampleInputweb_31" ng-model="source.mobile_no" placeholder="Enter Mobile No"  >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="element-form">
                                                            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-xs-12 text-xs-right"><label>Topics</label></div>
                                                            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="exampleInputweb_31" ng-model="source.topics" placeholder="Enter Topics">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="element-form">
                                                            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-xs-12 text-xs-right"><label>Which Client?</label></div>
                                                            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <select class="form-control" data-placeholder="Choose Client" ng-model="source.user_id">
                                                                        <option value="">Select</option>
                                                                        <option ng-repeat="user in userList track by $index" ng-selected="user.id == source.user_id" value="{{user.id}}">{{user.name}}</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="element-form">
                                                            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-xs-12 text-xs-right"><label>Link Type</label></div>
                                                            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <select class="form-control" data-placeholder="Choose Country" ng-model="source.link_type">
                                                                        <option value="">Select</option>
                                                                        <option value="affiliate">Affiliate</option>
                                                                        <option value="article directory">Article Directory</option>
                                                                        <option value="blog comment">Blog Comment</option>
                                                                        <option value="content link">Content Link</option>
                                                                        <option value="footer link">Footer Link</option>
                                                                        <option value="forum link">Forum Link</option>
                                                                        <option value="images">Images</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="element-form">
                                                            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-xs-12 text-xs-right"><label>Status</label></div>
                                                            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <select class="form-control" data-placeholder="Choose Country" ng-model="source.link_status">
                                                                        <option value="">Select</option>
                                                                        <option value="open">Open</option>
                                                                        <option value="processing">Processing</option>
                                                                        <option value="completed">Completed</option>
                                                                        <option value="rejected">Rejected</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="element-form">
                                                            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-xs-12 text-xs-right"><label>Comment</label></div>
                                                            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <textarea class="form-control" rows="2" ng-model="source.comment"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="element-form">
                                                            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-xs-12 text-xs-right">
                                                                <button class="btn btn-info btn-success" ng-disabled="source.source_link =='' || source.name== ''" ng-click="saveType == 'SAVE' ? saveNewSourceDetails() : updateSourceDetails()">{{ saveType}}</button>
                                                            </div>
                                                            
                                                        </div
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>


<div myModal class="modal fade" id="defaultmodal" tabindex="-1" role="dialog" aria-labelledby="defaultmodal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Upload Excel</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group file-control-upload">
                            <input ng-model="excelFile" style="height:35px;width:230px;padding:0px;" type="file" class="form-control  btn btn-success fileinput-button"  onchange="angular.element(this).scope().uploadedFile(this)">
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary"  ng-click="saveExcelData()">Save</button>
            </div>
        </div>
    </div>
</div>