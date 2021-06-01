@extends('layouts.vertical', ['title' => 'Project Listing'])

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
                            <li class="breadcrumb-item active">Projects</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Projects</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row mb-2">
            <div class="col-sm-4">
                <a href="{{route('second', ['project', 'create'])}}" class="btn btn-danger btn-rounded waves-effect waves-light mb-3"><i class="mdi mdi-plus"></i> Create Project</a>
            </div>
            <div class="col-sm-8">
                <div class="text-sm-right">
                    <div class="btn-group mb-3">
                        <button type="button" class="btn btn-primary">All</button>
                    </div>
                    <div class="btn-group mb-3 ml-1">
                        <button type="button" class="btn btn-light">Ongoing</button>
                        <button type="button" class="btn btn-light">Finished</button>
                    </div>
                    <div class="btn-group mb-3 ml-2 d-none d-sm-inline-block">
                        <button type="button" class="btn btn-dark"><i class="mdi mdi-apps"></i></button>
                    </div>
                    <div class="btn-group mb-3 d-none d-sm-inline-block">
                        <button type="button" class="btn btn-link text-dark"><i class="mdi mdi-format-list-bulleted-type"></i></button>
                    </div>
                </div>
            </div><!-- end col-->
        </div> 
        <!-- end row-->


        <div class="row">
            <div class="col-lg-4">
                <div class="card-box project-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle card-drop arrow-none" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-horizontal m-0 text-muted h3"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                            <a class="dropdown-item" href="#">Add Members</a>
                            <a class="dropdown-item" href="#">Add Due Date</a>
                        </div>
                    </div> <!-- end dropdown -->
                    <!-- Title-->
                    <h4 class="mt-0"><a href="{{route('second', ['project', 'detail'])}}" class="text-dark">New Admin Design</a></h4>
                    <p class="text-muted text-uppercase"><i class="mdi mdi-account-circle"></i> <small>Orange Limited</small></p>
                    <div class="badge bg-soft-success text-success mb-3">Finished</div>
                    <!-- Desc-->
                    <p class="text-muted font-13 mb-3 sp-line-2">With supporting text below as a natural lead-in to additional contenposuere erat a
                        ante...<a href="javascript:void(0);" class="font-weight-bold text-muted">view more</a>
                    </p>
                    <!-- Task info-->
                    <p class="mb-1">
                        <span class="pr-2 text-nowrap mb-2 d-inline-block">
                            <i class="mdi mdi-format-list-bulleted-type text-muted"></i>
                            <b>78</b> Tasks
                        </span>
                        <span class="text-nowrap mb-2 d-inline-block">
                            <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                            <b>214</b> Comments
                        </span>
                    </p>
                    <!-- Team-->
                    <div class="avatar-group mb-3">
                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                            <img src="{{asset('assets/images/users/user-1.jpg')}}" class="rounded-circle avatar-sm" alt="friend" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty">
                            <img src="{{asset('assets/images/users/user-2.jpg')}}" class="rounded-circle avatar-sm" alt="friend" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson">
                            <img src="{{asset('assets/images/users/user-3.jpg')}}" class="rounded-circle avatar-sm" alt="friend" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                            <img src="{{asset('assets/images/users/user-4.jpg')}}" class="rounded-circle avatar-sm" alt="friend" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Username">
                            <img src="{{asset('assets/images/users/user-5.jpg')}}" class="rounded-circle avatar-sm" alt="friend" />
                        </a>
                    </div>
                    <!-- Progress-->
                    <p class="mb-2 font-weight-semibold">Task completed: <span class="float-right">28/78</span></p>
                    <div class="progress mb-1" style="height: 7px;">
                        <div class="progress-bar"
                                role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"
                                style="width: 34%;">
                        </div><!-- /.progress-bar .progress-bar-danger -->
                    </div><!-- /.progress .no-rounded -->

                </div> <!-- end card box-->
            </div><!-- end col-->

            <div class="col-lg-4">
                <div class="card-box project-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle card-drop arrow-none" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-horizontal m-0 text-muted h3"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                            <a class="dropdown-item" href="#">Add Members</a>
                            <a class="dropdown-item" href="#">Add Due Date</a>
                        </div>
                    </div> <!-- end dropdown -->
                    <!-- Title-->
                    <h4 class="mt-0"><a href="{{route('second', ['project', 'detail'])}}" class="text-dark">App Design and Development</a></h4>
                    <p class="text-muted text-uppercase"><i class="mdi mdi-account-circle"></i> <small>Moondust Softwares</small></p>
                    <div class="badge bg-soft-secondary text-secondary mb-3">Ongoing</div>
                    <!-- Desc-->
                    <p class="text-muted font-13 mb-3 sp-line-2">A handful of model sentence structures, to generate Lorem Ipsum which looks reasonable...<a href="javascript:void(0);" class="font-weight-bold text-muted">view more</a>
                    </p>
                    <!-- Task info-->
                    <p class="mb-1">
                        <span class="pr-2 text-nowrap mb-2 d-inline-block">
                            <i class="mdi mdi-format-list-bulleted-type text-muted"></i>
                            <b>81</b> Tasks
                        </span>
                        <span class="text-nowrap mb-2 d-inline-block">
                            <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                            <b>103</b> Comments
                        </span>
                    </p>
                    <!-- Team-->
                    <div class="avatar-group mb-3">
                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                            <img src="{{asset('assets/images/users/user-6.jpg')}}" class="rounded-circle avatar-sm" alt="friend" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty">
                            <img src="{{asset('assets/images/users/user-7.jpg')}}" class="rounded-circle avatar-sm" alt="friend" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson">
                            <img src="{{asset('assets/images/users/user-8.jpg')}}" class="rounded-circle avatar-sm" alt="friend" />
                        </a>
                    </div>
                    <!-- Progress-->
                    <p class="mb-2 font-weight-semibold">Task completed: <span class="float-right">55/85</span></p>
                    <div class="progress mb-1" style="height: 7px;">
                        <div class="progress-bar"
                                role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                style="width: 80%;">
                        </div><!-- /.progress-bar .progress-bar-danger -->
                    </div><!-- /.progress .no-rounded -->

                </div> <!-- end card box-->
            </div><!-- end col-->

            <div class="col-lg-4">
                <div class="card-box project-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle card-drop arrow-none" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-horizontal m-0 text-muted h3"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                            <a class="dropdown-item" href="#">Add Members</a>
                            <a class="dropdown-item" href="#">Add Due Date</a>
                        </div>
                    </div> <!-- end dropdown -->
                    <!-- Title-->
                    <h4 class="mt-0"><a href="{{route('second', ['project', 'detail'])}}" class="text-dark">Landing page Design</a></h4>
                    <p class="text-muted text-uppercase"><i class="mdi mdi-account-circle"></i> <small>Rose Technologies</small></p>
                    <div class="badge bg-soft-success text-success mb-3">Finished</div>
                    <!-- Desc-->
                    <p class="text-muted font-13 mb-3 sp-line-2">You need to be sure there isn't anything embarrassing hidden in the middle of text...<a href="javascript:void(0);" class="font-weight-bold text-muted">view more</a>
                    </p>
                    <!-- Task info-->
                    <p class="mb-1">
                        <span class="pr-2 text-nowrap mb-2 d-inline-block">
                            <i class="mdi mdi-format-list-bulleted-type text-muted"></i>
                            <b>42</b> Tasks
                        </span>
                        <span class="text-nowrap mb-2 d-inline-block">
                            <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                            <b>65</b> Comments
                        </span>
                    </p>
                    <!-- Team-->
                    <div class="avatar-group mb-3">
                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                            <img src="{{asset('assets/images/users/user-9.jpg')}}" class="rounded-circle avatar-sm" alt="friend" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty">
                            <img src="{{asset('assets/images/users/user-10.jpg')}}" class="rounded-circle avatar-sm" alt="friend" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson">
                            <img src="{{asset('assets/images/users/user-1.jpg')}}" class="rounded-circle avatar-sm" alt="friend" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                            <img src="{{asset('assets/images/users/user-3.jpg')}}" class="rounded-circle avatar-sm" alt="friend" />
                        </a>
                    </div>
                    <!-- Progress-->
                    <p class="mb-2 font-weight-semibold">Task completed: <span class="float-right">21/42</span></p>
                    <div class="progress mb-1" style="height: 7px;">
                        <div class="progress-bar"
                                role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                style="width: 50%;">
                        </div><!-- /.progress-bar .progress-bar-danger -->
                    </div><!-- /.progress .no-rounded -->

                </div> <!-- end card box-->
            </div><!-- end col-->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-4">
                <div class="card-box project-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle card-drop arrow-none" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-horizontal m-0 text-muted h3"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                            <a class="dropdown-item" href="#">Add Members</a>
                            <a class="dropdown-item" href="#">Add Due Date</a>
                        </div>
                    </div> <!-- end dropdown -->
                    <!-- Title-->
                    <h4 class="mt-0"><a href="{{route('second', ['project', 'detail'])}}" class="text-dark">Custom Software Development</a></h4>
                    <p class="text-muted text-uppercase"><i class="mdi mdi-account-circle"></i> <small>Apple Navigations</small></p>
                    <div class="badge bg-soft-secondary text-secondary mb-3">Ongoing</div>
                    <!-- Desc-->
                    <p class="text-muted font-13 mb-3 sp-line-2">You need to be sure there isn't anything embarrassing hidden in the middle of text...<a href="javascript:void(0);" class="font-weight-bold text-muted">view more</a>
                    </p>
                    <!-- Task info-->
                    <p class="mb-1">
                        <span class="pr-2 text-nowrap mb-2 d-inline-block">
                            <i class="mdi mdi-format-list-bulleted-type text-muted"></i>
                            <b>95</b> Tasks
                        </span>
                        <span class="text-nowrap mb-2 d-inline-block">
                            <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                            <b>1.3k</b> Comments
                        </span>
                    </p>
                    <!-- Team-->
                    <div class="avatar-group mb-3">
                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                            <img src="{{asset('assets/images/users/user-5.jpg')}}" class="rounded-circle avatar-sm" alt="friend" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty">
                            <img src="{{asset('assets/images/users/user-8.jpg')}}" class="rounded-circle avatar-sm" alt="friend" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson">
                            <img src="{{asset('assets/images/users/user-9.jpg')}}" class="rounded-circle avatar-sm" alt="friend" />
                        </a>
                    </div>
                    <!-- Progress-->
                    <p class="mb-2 font-weight-semibold">Task completed: <span class="float-right">70/95</span></p>
                    <div class="progress mb-1" style="height: 7px;">
                        <div class="progress-bar"
                                role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"
                                style="width: 68%;">
                        </div><!-- /.progress-bar .progress-bar-danger -->
                    </div><!-- /.progress .no-rounded -->

                </div> <!-- end card box-->
            </div><!-- end col-->

            <div class="col-lg-4">
                <div class="card-box project-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle card-drop arrow-none" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-horizontal m-0 text-muted h3"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                            <a class="dropdown-item" href="#">Add Members</a>
                            <a class="dropdown-item" href="#">Add Due Date</a>
                        </div>
                    </div> <!-- end dropdown -->
                    <!-- Title-->
                    <h4 class="mt-0"><a href="{{route('second', ['project', 'detail'])}}" class="text-dark">Website Redesign</a></h4>
                    <p class="text-muted text-uppercase"><i class="mdi mdi-account-circle"></i> <small>Enigma Navigations</small></p>
                    <div class="badge bg-soft-secondary text-secondary mb-3">Ongoing</div>
                    <!-- Desc-->
                    <p class="text-muted font-13 mb-3 sp-line-2">There are many variations of passages of Lorem Ipsum available natural lead-in to additional...<a href="javascript:void(0);" class="font-weight-bold text-muted">view more</a>
                    </p>
                    <!-- Task info-->
                    <p class="mb-1">
                        <span class="pr-2 text-nowrap mb-2 d-inline-block">
                            <i class="mdi mdi-format-list-bulleted-type text-muted"></i>
                            <b>36</b> Tasks
                        </span>
                        <span class="text-nowrap mb-2 d-inline-block">
                            <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                            <b>78</b> Comments
                        </span>
                    </p>
                    <!-- Team-->
                    <div class="avatar-group mb-3">
                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson">
                            <img src="{{asset('assets/images/users/user-3.jpg')}}" class="rounded-circle avatar-sm" alt="friend" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                            <img src="{{asset('assets/images/users/user-4.jpg')}}" class="rounded-circle avatar-sm" alt="friend" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Username">
                            <img src="{{asset('assets/images/users/user-5.jpg')}}" class="rounded-circle avatar-sm" alt="friend" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                            <img src="{{asset('assets/images/users/user-1.jpg')}}" class="rounded-circle avatar-sm" alt="friend">
                        </a>
                    </div>
                    <!-- Progress-->
                    <p class="mb-2 font-weight-semibold">Task completed: <span class="float-right">12/36</span></p>
                    <div class="progress mb-1" style="height: 7px;">
                        <div class="progress-bar"
                                role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"
                                style="width: 33%;">
                        </div><!-- /.progress-bar .progress-bar-danger -->
                    </div><!-- /.progress .no-rounded -->

                </div> <!-- end card box-->
            </div><!-- end col-->

            <div class="col-lg-4">
                <div class="card-box project-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle card-drop arrow-none" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-horizontal m-0 text-muted h3"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                            <a class="dropdown-item" href="#">Add Members</a>
                            <a class="dropdown-item" href="#">Add Due Date</a>
                        </div>
                    </div> <!-- end dropdown -->
                    <!-- Title-->
                    <h4 class="mt-0"><a href="{{route('second', ['project', 'detail'])}}" class="text-dark">Multipurpose Landing Template</a></h4>
                    <p class="text-muted text-uppercase"><i class="mdi mdi-account-circle"></i> <small>Pride Softwares</small></p>
                    <div class="badge bg-soft-success text-success mb-3">Finished</div>
                    <!-- Desc-->
                    <p class="text-muted font-13 mb-3 sp-line-2">With supporting text below as a natural lead-in to additional contenposuere erat a
                        ante...<a href="javascript:void(0);" class="font-weight-bold text-muted">view more</a>
                    </p>
                    <!-- Task info-->
                    <p class="mb-1">
                        <span class="pr-2 text-nowrap mb-2 d-inline-block">
                            <i class="mdi mdi-format-list-bulleted-type text-muted"></i>
                            <b>30</b> Tasks
                        </span>
                        <span class="text-nowrap mb-2 d-inline-block">
                            <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                            <b>148</b> Comments
                        </span>
                    </p>
                    <!-- Team-->
                    <div class="avatar-group mb-3">
                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                            <img src="{{asset('assets/images/users/user-6.jpg')}}" class="rounded-circle avatar-sm" alt="friend" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty">
                            <img src="{{asset('assets/images/users/user-7.jpg')}}" class="rounded-circle avatar-sm" alt="friend" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson">
                            <img src="{{asset('assets/images/users/user-8.jpg')}}" class="rounded-circle avatar-sm" alt="friend" />
                        </a>
                    </div>
                    <!-- Progress-->
                    <p class="mb-2 font-weight-semibold">Task completed: <span class="float-right">28/30</span></p>
                    <div class="progress mb-1" style="height: 7px;">
                        <div class="progress-bar"
                                role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"
                                style="width: 95%;">
                        </div><!-- /.progress-bar .progress-bar-danger -->
                    </div><!-- /.progress .no-rounded -->

                </div> <!-- end card box-->
            </div><!-- end col-->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="text-center mb-3">
                    <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-spin mdi-loading mr-1"></i> Load more </a>
                </div>
            </div> <!-- end col-->
        </div>
        <!-- end row -->
        
    </div> <!-- container -->
@endsection