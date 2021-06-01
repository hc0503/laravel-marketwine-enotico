@extends('layouts.vertical', ['title' => 'Kanban Board'])

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">
    
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                            <li class="breadcrumb-item active">Kanban Board</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Kanban Board</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-lg-4">
                <div class="card-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical m-0 text-muted h3"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                            <a class="dropdown-item" href="#">Add Members</a>
                            <a class="dropdown-item" href="#">Add Due Date</a>
                        </div>
                    </div> <!-- end dropdown -->
                    
                    <h4 class="header-title">Upcoming</h4>
                    <p class="sub-header">
                        Your awesome text goes here. Your awesome text goes here.
                    </p>

                    <ul class="sortable-list tasklist list-unstyled" id="upcoming">
                        <li id="task1">
                            <span class="badge bg-soft-danger text-danger float-right">High</span>
                            <h5 class="mt-0"><a href="javascript: void(0);" class="text-dark">iOS App home page</a></h5>
                            <div class="checkbox checkbox-blue mb-2 checkbox-single float-right">
                                <input type="checkbox">
                                <label></label>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available.</p>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col">
                                    <p class="font-13 mt-2 mb-0"><i class="mdi mdi-calendar"></i> Oct 16, 2018</p>
                                </div>
                                <div class="col-auto">
                                    <div class="text-right">
                                        <a href="javascript: void(0);" class="text-muted">
                                            <img src="{{asset('assets/images/users/user-1.jpg')}}" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                        </a> 
                                        <a href="javascript: void(0);" class="text-muted">
                                            <img src="{{asset('assets/images/users/user-3.jpg')}}" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                        </a> 
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li id="task2">
                            <span class="badge bg-soft-success text-success float-right">Low</span>
                            <h5 class="mt-0"><a href="javascript: void(0);" class="text-dark">Topnav layout design</a></h5>
                            <div class="checkbox checkbox-blue mb-2 checkbox-single float-right">
                                <input type="checkbox">
                                <label></label>
                            </div>
                            <p>Many desktop publishing packages and web page.</p>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col">
                                    <p class="font-13 mt-2 mb-0"><i class="mdi mdi-calendar"></i> Nov 22, 2018</p>
                                </div>
                                <div class="col-auto">
                                    <div class="text-right">
                                        <a href="javascript: void(0);" class="text-muted">
                                            <img src="{{asset('assets/images/users/user-2.jpg')}}" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                        </a> 
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li id="task3">
                            <span class="badge bg-soft-danger text-danger float-right">High</span>
                            <h5 class="mt-0"><a href="javascript: void(0);" class="text-dark">Invite user to a project</a></h5>
                            <div class="checkbox checkbox-blue mb-2 checkbox-single float-right">
                                <input type="checkbox">
                                <label></label>
                            </div>
                            <p>If you are going to use a passage of Lorem Ipsum.</p>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col">
                                    <p class="font-13 mt-2 mb-0"><i class="mdi mdi-calendar"></i> Oct 15, 2018</p>
                                </div>
                                <div class="col-auto">
                                    <div class="text-right">
                                        <a href="javascript: void(0);" class="text-muted">
                                            <img src="{{asset('assets/images/users/user-5.jpg')}}" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="task-info" id="task4">
                            <span class="badge bg-soft-warning text-warning float-right">Medium</span>
                            <h5 class="mt-0"><a href="javascript: void(0);" class="text-dark">Write a release note</a></h5>
                            <div class="checkbox checkbox-blue mb-2 checkbox-single float-right">
                                <input type="checkbox">
                                <label></label>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available.</p>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col">
                                    <p class="font-13 mt-2 mb-0"><i class="mdi mdi-calendar"></i> Dec 03, 2018</p>
                                </div>
                                <div class="col-auto">
                                    <div class="text-right">
                                        <a href="javascript: void(0);" class="text-muted">
                                            <img src="{{asset('assets/images/users/user-6.jpg')}}" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                        </a> 
                                        <a href="javascript: void(0);" class="text-muted">
                                            <img src="{{asset('assets/images/users/user-7.jpg')}}" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                        </a> 
                                    </div>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                    <a href="javascript: void(0);" class="btn btn-primary btn-block mt-3 waves-effect waves-light"><i class="mdi mdi-plus-circle"></i> Add New</a>
                </div>
            </div> <!-- end col -->

            <div class="col-lg-4">
                <div class="card-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical m-0 text-muted h3"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                            <a class="dropdown-item" href="#">Add Members</a>
                            <a class="dropdown-item" href="#">Add Due Date</a>
                        </div>
                    </div> <!-- end dropdown -->

                    <h4 class="header-title">In Progress</h4>
                    <p class="sub-header">
                        Your awesome text goes here.
                    </p>

                    <ul class="sortable-list tasklist list-unstyled" id="inprogress">
                        <li id="task6">
                            <span class="badge bg-soft-warning text-warning float-right">Medium</span>
                            <h5 class="mt-0"><a href="javascript: void(0);" class="text-dark">Enable analytics tracking</a></h5>
                            <div class="checkbox checkbox-blue mb-2 checkbox-single float-right">
                                <input type="checkbox">
                                <label></label>
                            </div>
                            <p>It has roots in a piece of classical Latin literature from 45 BC.</p>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col">
                                    <p class="font-13 mt-2 mb-0"><i class="mdi mdi-calendar"></i> Sep 18, 2018</p>
                                </div>
                                <div class="col-auto">
                                    <div class="text-right">
                                        <a href="javascript: void(0);" class="text-muted">
                                            <img src="{{asset('assets/images/users/user-8.jpg')}}" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                        </a> 
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="task-info" id="task7">
                            <span class="badge bg-soft-danger text-danger float-right">High</span>
                            <h5 class="mt-0"><a href="javascript: void(0);" class="text-dark">Kanban board design</a></h5>
                            <div class="checkbox checkbox-blue mb-2 checkbox-single float-right">
                                <input type="checkbox">
                                <label></label>
                            </div>
                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined.</p>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col">
                                    <p class="font-13 mt-2 mb-0"><i class="mdi mdi-calendar"></i> Oct 30, 2018</p>
                                </div>
                                <div class="col-auto">
                                    <div class="text-right">
                                        <a href="javascript: void(0);" class="text-muted">
                                            <img src="{{asset('assets/images/users/user-9.jpg')}}" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                        </a> 
                                        <a href="javascript: void(0);" class="text-muted">
                                            <img src="{{asset('assets/images/users/user-10.jpg')}}" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                        </a> 
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="task-danger" id="task8">
                            <span class="badge bg-soft-success text-success float-right">Low</span>
                            <h5 class="mt-0"><a href="javascript: void(0);" class="text-dark">Code HTML email template</a></h5>
                            <div class="checkbox checkbox-blue mb-2 checkbox-single float-right">
                                <input type="checkbox">
                                <label></label>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available.</p>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col">
                                    <p class="font-13 mt-2 mb-0"><i class="mdi mdi-calendar"></i> Nov 23, 2018</p>
                                </div>
                                <div class="col-auto">
                                    <div class="text-right">
                                        <a href="javascript: void(0);" class="text-muted">
                                            <img src="{{asset('assets/images/users/user-1.jpg')}}" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                        </a> 
                                        <a href="javascript: void(0);" class="text-muted">
                                            <img src="{{asset('assets/images/users/user-3.jpg')}}" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                        </a> 
                                    </div>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                    <a href="javascript: void(0);" class="btn btn-primary btn-block mt-3 waves-effect waves-light"><i class="mdi mdi-plus-circle"></i> Add New</a>
                </div> <!-- end card-box -->
            </div> <!-- end col -->

            <div class="col-lg-4">
                <div class="card-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical m-0 text-muted h3"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                            <a class="dropdown-item" href="#">Add Members</a>
                            <a class="dropdown-item" href="#">Add Due Date</a>
                        </div>
                    </div> <!-- end dropdown -->

                    <h4 class="header-title">Completed</h4>
                    <p class="sub-header">
                        Your awesome text goes here. Your awesome text goes here.
                    </p>

                    <ul class="sortable-list tasklist list-unstyled" id="completed">
                        <li class="task-warning" id="task10">
                            <span class="badge bg-soft-success text-success float-right">Low</span>
                            <h5 class="mt-0"><a href="javascript: void(0);" class="text-dark">Brand logo design</a></h5>
                            <div class="checkbox checkbox-blue mb-2 checkbox-single float-right">
                                <input type="checkbox">
                                <label></label>
                            </div>
                            <p>Various versions have evolved over the years, sometimes by accident.</p>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col">
                                    <p class="font-13 mt-2 mb-0"><i class="mdi mdi-calendar"></i> Jun 13, 2018</p>
                                </div>
                                <div class="col-auto">
                                    <div class="text-right">
                                        <a href="javascript: void(0);" class="text-muted">
                                            <img src="{{asset('assets/images/users/user-3.jpg')}}" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                        </a> 
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="task-success" id="task11">
                            <span class="badge bg-soft-warning text-warning float-right">Medium</span>
                            <h5 class="mt-0"><a href="javascript: void(0);" class="text-dark">Improve animation loader</a></h5>
                            <div class="checkbox checkbox-blue mb-2 checkbox-single float-right">
                                <input type="checkbox">
                                <label></label>
                            </div>
                            <p>A handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col">
                                    <p class="font-13 mt-2 mb-0"><i class="mdi mdi-calendar"></i> Oct 16, 2018</p>
                                </div>
                                <div class="col-auto">
                                    <div class="text-right">
                                        <a href="javascript: void(0);" class="text-muted">
                                            <img src="{{asset('assets/images/users/user-4.jpg')}}" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                        </a> 
                                        <a href="javascript: void(0);" class="text-muted">
                                            <img src="{{asset('assets/images/users/user-7.jpg')}}" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                        </a> 
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li id="task12">
                            <span class="badge bg-soft-danger text-danger float-right">High</span>
                            <h5 class="mt-0"><a href="javascript: void(0);" class="text-dark">Dashboard Re-design</a></h5>
                            <div class="checkbox checkbox-blue mb-2 checkbox-single float-right">
                                <input type="checkbox">
                                <label></label>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available.</p>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col">
                                    <p class="font-13 mt-2 mb-0"><i class="mdi mdi-calendar"></i> Oct 16, 2018</p>
                                </div>
                                <div class="col-auto">
                                    <div class="text-right">
                                        <a href="javascript: void(0);" class="text-muted">
                                            <img src="{{asset('assets/images/users/user-5.jpg')}}" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                        </a> 
                                        <a href="javascript: void(0);" class="text-muted">
                                            <img src="{{asset('assets/images/users/user-9.jpg')}}" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                        </a> 
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="task-info" id="task13">
                            <span class="badge bg-soft-success text-success float-right">Low</span>
                            <h5 class="mt-0"><a href="javascript: void(0);" class="text-dark">iOS App home page</a></h5>
                            <div class="checkbox checkbox-blue mb-2 checkbox-single float-right">
                                <input type="checkbox">
                                <label></label>
                            </div>
                            <p>you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col">
                                    <p class="font-13 mt-2 mb-0"><i class="mdi mdi-calendar"></i> Oct 16, 2018</p>
                                </div>
                                <div class="col-auto">
                                    <div class="text-right">
                                        <a href="javascript: void(0);" class="text-muted">
                                            <img src="{{asset('assets/images/users/user-10.jpg')}}" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                        </a> 
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <a href="javascript: void(0);" class="btn btn-primary btn-block mt-3 waves-effect waves-light"><i class="mdi mdi-plus-circle"></i> Add New</a>
                </div> <!-- end card-box -->
            </div> <!-- end col -->

        </div>
        <!-- end row -->
        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/sortablejs/sortablejs.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('assets/js/pages/kanban.init.js')}}"></script>
@endsection