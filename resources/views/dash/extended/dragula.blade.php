@extends('layouts.vertical', ['title' => 'Drag and Drop | Dragula'])

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Extended UI</a></li>
                            <li class="breadcrumb-item active">Dragula</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Dragula</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Simple Drag and Drop Example</h4>
                        <p class="text-muted font-14">
                            Just specify the data attribute <code>data-plugin='dragula'</code> to have drag and drop support in your container.
                        </p>

                        <div class="row" id="simple-dragula" data-plugin="dragula">
                            <div class="col-md-4">
                                <div class="card mb-0 mt-3 border">
                                    <div class="card-body">
                                        <span class="badge badge-soft-secondary float-right">03 Nov</span>
                                        <h5 class="mt-0"><a href="javascript: void(0);" class="text-secondary">iOS App home page</a></h5>
                                        
                                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                                        <div class="clearfix"></div>
                                        <div class="row">
                                            <div class="col">
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="{{asset('assets/images/users/user-2.jpg')}}" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                                    <span class="d-none d-md-inline-block ml-1 font-weight-semibold">David Muth</span>
                                                </a>
                                            </div>
                                            <div class="col-auto">
                                                <div class="text-right text-muted">
                                                    <p class="font-13 mt-2 mb-0"><i class="mdi mdi-calendar"></i> Oct 16, 2018</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-md-4">
                                <div class="card mb-0 mt-3 border border-success">
                                    <div class="card-body">
                                        <span class="badge badge-soft-success float-right">Latest</span>
                                        <h5 class="mt-0"><a href="javascript: void(0);" class="text-success">Topnav layout design</a></h5>
                                        
                                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                                        <div class="clearfix"></div>
                                        <div class="row">
                                            <div class="col">
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="{{asset('assets/images/users/user-3.jpg')}}" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                                    <span class="d-none d-md-inline-block ml-1 font-weight-semibold">Raleigh Aragon</span>
                                                </a>
                                            </div>
                                            <div class="col-auto">
                                                <div class="text-right text-muted">
                                                    <p class="font-13 mt-2 mb-0"><i class="mdi mdi-calendar"></i> Oct 16, 2018</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-md-4">
                                <div class="card mb-0 mt-3 border">
                                    <div class="card-body">
                                        <span class="badge badge-soft-secondary float-right">New</span>
                                        <h5 class="mt-0"><a href="javascript: void(0);" class="text-secondary">Invite user to a project</a></h5>
                                        
                                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                                        <div class="clearfix"></div>
                                        <div class="row">
                                            <div class="col">
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="{{asset('assets/images/users/user-5.jpg')}}" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                                    <span class="d-none d-md-inline-block ml-1 font-weight-semibold">Dan Statler</span>
                                                </a>
                                            </div>
                                            <div class="col-auto">
                                                <div class="text-right text-muted">
                                                    <p class="font-13 mt-2 mb-0"><i class="mdi mdi-calendar"></i> Oct 16, 2018</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-md-4">
                                <div class="card mb-0 mt-3 border border-success">
                                    <div class="card-body">
                                        <span class="badge badge-soft-success float-right">Latest</span>
                                        <h5 class="mt-0"><a href="javascript: void(0);" class="text-success">Write a release note</a></h5>
                                        
                                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                                        <div class="clearfix"></div>
                                        <div class="row">
                                            <div class="col">
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="{{asset('assets/images/users/user-6.jpg')}}" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                                    <span class="d-none d-md-inline-block ml-1 font-weight-semibold">Gary Rhode</span>
                                                </a>
                                            </div>
                                            <div class="col-auto">
                                                <div class="text-right text-muted">
                                                    <p class="font-13 mt-2 mb-0"><i class="mdi mdi-calendar"></i> Oct 16, 2018</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-md-4">
                                <div class="card mb-0 mt-3 border">
                                    <div class="card-body">
                                        <span class="badge badge-soft-secondary float-right">15 Jun</span>
                                        <h5 class="mt-0"><a href="javascript: void(0);" class="text-secondary">Enable analytics tracking</a></h5>
                                        
                                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                                        <div class="clearfix"></div>
                                        <div class="row">
                                            <div class="col">
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="{{asset('assets/images/users/user-8.jpg')}}" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                                    <span class="d-none d-md-inline-block ml-1 font-weight-semibold">Andres Preston</span>
                                                </a>
                                            </div>
                                            <div class="col-auto">
                                                <div class="text-right text-muted">
                                                    <p class="font-13 mt-2 mb-0"><i class="mdi mdi-calendar"></i> Oct 16, 2018</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-md-4">
                                <div class="card mb-0 mt-3 border">
                                    <div class="card-body">
                                        <span class="badge badge-soft-secondary float-right">Latest</span>
                                        <h5 class="mt-0"><a href="javascript: void(0);" class="text-secondary">Kanban board design</a></h5>
                                        
                                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                                        <div class="clearfix"></div>
                                        <div class="row">
                                            <div class="col">
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <img src="{{asset('assets/images/users/user-9.jpg')}}" alt="task-user" class="avatar-sm img-thumbnail rounded-circle">
                                                    <span class="d-none d-md-inline-block ml-1 font-weight-semibold">Joseph Carson</span>
                                                </a>
                                            </div>
                                            <div class="col-auto">
                                                <div class="text-right text-muted">
                                                    <p class="font-13 mt-2 mb-0"><i class="mdi mdi-calendar"></i> Oct 16, 2018</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                        </div>
                        <!-- end row-->

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div> <!-- end row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Move stuff between containers</h4>
                        <p class="text-muted font-14 mb-3"> 
                                Just specify the data attribute
                            <code>data-plugin='dragula'</code> and
                            <code>data-containers='["first-container-id", "second-container-id"]'</code>.
                        </p>

                        <div class="row" data-plugin="dragula" data-containers='["company-list-left", "company-list-right"]'>
                            <div class="col-md-6">
                                <h5 class="mt-0 text-center">Team One</h5>
                                <div id="company-list-left" class="py-2">

                                    <div class="card border rounded">
                                        <div class="card-body">
                                            <div class="media">
                                                <img src="{{asset('assets/images/users/user-1.jpg')}}" alt="image" class="mr-3 d-none d-sm-block avatar-sm rounded-circle">
                                                <div class="media-body">
                                                    <h5 class="mb-1 mt-0">Louis K. Bond</h5>
                                                    <p> Founder & CEO </p>
                                                    <p class="mb-0 text-muted">
                                                        <span class="font-italic"><b>"</b>Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh.</span>
                                                    </p>
                                                </div> <!-- end media-body -->
                                            </div> <!-- end media -->
                                        </div> <!-- end card-body -->
                                    </div> <!-- end col -->

                                    <div class="card border rounded">
                                        <div class="card-body">
                                            <div class="media">
                                                <img src="{{asset('assets/images/users/user-2.jpg')}}" alt="image" class="mr-3 d-none d-sm-block avatar-sm rounded-circle">
                                                <div class="media-body">
                                                    <h5 class="mb-1 mt-0">Dennis N. Cloutier</h5>
                                                    <p> Software Engineer </p>
                                                    <p class="mb-0 text-muted">
                                                        <span class="font-italic"><b>"</b>Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh.</span>
                                                    </p>
                                                </div> <!-- end media-body -->
                                            </div> <!-- end media -->
                                        </div> <!-- end card-body -->
                                    </div> <!-- end col -->

                                    <div class="card border rounded">
                                        <div class="card-body">
                                            <div class="media">
                                                <img src="{{asset('assets/images/users/user-3.jpg')}}" alt="image" class="mr-3 d-none d-sm-block avatar-sm rounded-circle">
                                                <div class="media-body">
                                                    <h5 class="mb-1 mt-0">Susan J. Sander</h5>
                                                    <p> Web Designer </p>
                                                    <p class="mb-0 text-muted">
                                                        <span class="font-italic"><b>"</b>Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh.</span>
                                                    </p>
                                                </div> <!-- end media-body -->
                                            </div> <!-- end media -->
                                        </div> <!-- end card-body -->
                                    </div> <!-- end col -->
                                    
                                </div> <!-- end company-list-1-->
                            </div> <!-- end col -->

                            <div class="col-md-6">
                                <h5 class="mt-0 text-center">Team Two</h5>
                                <div id="company-list-right" class="py-2">
                                    <div class="card border rounded">
                                        <div class="card-body p-3">
                                            <div class="media">
                                                <img src="{{asset('assets/images/users/user-4.jpg')}}" alt="image" class="mr-3 d-none d-sm-block avatar-sm rounded-circle">
                                                <div class="media-body">
                                                    <h5 class="mb-1 mt-0">James M. Short</h5>
                                                    <p> Web Developer </p>
                                                    <p class="mb-0 text-muted">
                                                        <span class="font-italic"><b>"</b>Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh </span>
                                                    </p>
                                                </div> <!-- end media-body -->
                                            </div> <!-- end media -->
                                        </div> <!-- end card-body -->
                                    </div> <!-- end col -->

                                    <div class="card border rounded">
                                        <div class="card-body p-3">
                                            <div class="media">
                                                <img src="{{asset('assets/images/users/user-5.jpg')}}" alt="image" class="mr-3 d-none d-sm-block avatar-sm rounded-circle">
                                                <div class="media-body">
                                                    <h5 class="mb-1 mt-0">Gabriel J. Snyder</h5>
                                                    <p> Business Analyst </p>
                                                    <p class="mb-0 text-muted">
                                                        <span class="font-italic"><b>"</b>Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh </span>
                                                    </p>
                                                </div> <!-- end media-body -->
                                            </div> <!-- end media -->
                                        </div> <!-- end card-body -->
                                    </div> <!-- end col -->

                                    <div class="card border rounded">
                                        <div class="card-body p-3">
                                            <div class="media">
                                                <img src="{{asset('assets/images/users/user-6.jpg')}}" alt="image" class="mr-3 d-none d-sm-block avatar-sm rounded-circle">
                                                <div class="media-body">
                                                    <h5 class="mb-1 mt-0">Louie C. Mason</h5>
                                                    <p>Human Resources</p>
                                                    <p class="mb-0 text-muted">
                                                        <span class="font-italic"><b>"</b>Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh </span>
                                                    </p>
                                                </div> <!-- end media-body -->
                                            </div> <!-- end media -->
                                        </div> <!-- end card-body -->
                                    </div> <!-- end col -->
                                    
                                </div> <!-- end company-list-2-->
                            </div> <!-- end col -->

                        </div> <!-- end row -->

                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Move stuff between containers using handle</h4>
                        <p class="text-muted font-14 mb-3">
                                Just specify the data attribute
                            <code>data-plugin='dragula'</code>, 
                            <code>data-containers='["first-container-id", "second-container-id"]'</code> and 
                            <code>data-handle-class='dragula-handle'</code>.
                        </p>

                        <div class="row" data-plugin="dragula" data-containers='["handle-dragula-left", "handle-dragula-right"]' data-handleClass="dragula-handle">
                            <div class="col-md-6">
                                <div class="bg-light p-2 p-lg-4">
                                    <h5 class="mt-0">Part 1</h5>
                                    <div id="handle-dragula-left" class="py-2">

                                        <div class="card mb-0 mt-2">
                                            <div class="card-body">
                                                <div class="media">
                                                    <img src="{{asset('assets/images/users/user-7.jpg')}}" alt="image" class="mr-3 d-none d-sm-block avatar-sm rounded-circle">
                                                    <div class="media-body">
                                                        <h5 class="mb-1 mt-1">Louis K. Bond</h5>
                                                        <p class="mb-0"> Founder & CEO </p>
                                                    </div> <!-- end media-body -->
                                                    <span class="dragula-handle"></span>
                                                </div> <!-- end media -->
                                            </div> <!-- end card-body -->
                                        </div> <!-- end col -->

                                        <div class="card mb-0 mt-2">
                                            <div class="card-body">
                                                <div class="media">
                                                    <img src="{{asset('assets/images/users/user-8.jpg')}}" alt="image" class="mr-3 d-none d-sm-block avatar-sm rounded-circle">
                                                    <div class="media-body">
                                                        <h5 class="mb-1 mt-1">Dennis N. Cloutier</h5>
                                                        <p class="mb-0"> Software Engineer </p>
                                                    </div> <!-- end media-body -->
                                                    <span class="dragula-handle"></span>
                                                </div> <!-- end media -->
                                            </div> <!-- end card-body -->
                                        </div> <!-- end col -->

                                        <div class="card mb-0 mt-2">
                                            <div class="card-body">
                                                <div class="media">
                                                    <img src="{{asset('assets/images/users/user-9.jpg')}}" alt="image" class="mr-3 d-none d-sm-block avatar-sm rounded-circle">
                                                    <div class="media-body">
                                                        <h5 class="mb-1 mt-1">Susan J. Sander</h5>
                                                        <p class="mb-0"> Web Designer </p>
                                                    </div> <!-- end media-body -->
                                                    <span class="dragula-handle"></span>
                                                </div> <!-- end media -->
                                            </div> <!-- end card-body -->
                                        </div> <!-- end col -->
                                        
                                    </div> <!-- end company-list-1-->
                                </div> <!-- end div.bg-light-->
                            </div> <!-- end col -->

                            <div class="col-md-6">
                                <div class="bg-light p-2 p-lg-4">
                                    <h5 class="mt-0">Part 2</h5>
                                    <div id="handle-dragula-right" class="py-2">
                                        <div class="card mb-0 mt-2">

                                            <div class="card-body p-3">
                                                <div class="media">
                                                    <img src="{{asset('assets/images/users/user-10.jpg')}}" alt="image" class="mr-3 d-none d-sm-block avatar-sm rounded-circle">
                                                    <div class="media-body">
                                                        <h5 class="mb-1 mt-1">James M. Short</h5>
                                                        <p class="mb-0"> Web Developer </p>
                                                    </div> <!-- end media-body -->
                                                    <span class="dragula-handle"></span>
                                                </div> <!-- end media -->
                                            </div> <!-- end card-body -->
                                        </div> <!-- end col -->

                                        <div class="card mb-0 mt-2">
                                            <div class="card-body p-3">
                                                <div class="media">
                                                    <img src="{{asset('assets/images/users/user-5.jpg')}}" alt="image" class="mr-3 d-none d-sm-block avatar-sm rounded-circle">
                                                    <div class="media-body">
                                                        <h5 class="mb-1 mt-1">Gabriel J. Snyder</h5>
                                                        <p class="mb-0"> Business Analyst </p>
                                                    </div> <!-- end media-body -->
                                                    <span class="dragula-handle"></span>
                                                </div> <!-- end media -->
                                            </div> <!-- end card-body -->
                                        </div> <!-- end col -->

                                        <div class="card mb-0 mt-2">
                                            <div class="card-body p-3">
                                                <div class="media">
                                                    <img src="{{asset('assets/images/users/user-3.jpg')}}" alt="image" class="mr-3 d-none d-sm-block avatar-sm rounded-circle">
                                                    <div class="media-body">
                                                        <h5 class="mb-1 mt-1">Louie C. Mason</h5>
                                                        <p class="mb-0">Human Resources</p>
                                                    </div> <!-- end media-body -->
                                                    <span class="dragula-handle"></span>
                                                </div> <!-- end media -->
                                            </div> <!-- end card-body -->
                                        </div> <!-- end col -->
                                        
                                    </div> <!-- end company-list-2-->
                                </div> <!-- end div.bg-light-->
                            </div> <!-- end col -->

                        </div> <!-- end row -->

                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->
        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/dragula/dragula.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('assets/js/pages/dragula.init.js')}}"></script>
@endsection