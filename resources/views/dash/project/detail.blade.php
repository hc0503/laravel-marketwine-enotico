@extends('layouts.vertical', ['title' => 'Project Details'])

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                            <li class="breadcrumb-item active">Project Details</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Project Details</h4>
                </div>
            </div>
        </div>     
        <!-- end page title -->
        
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-light">
                                <i class="fe-list font-26 avatar-title text-primary"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">942</span></h3>
                                <p class="text-muted mb-1 text-truncate">Total Tasks</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-light">
                                <i class="fe-check-square font-26 avatar-title text-success"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">328</span></h3>
                                <p class="text-muted mb-1 text-truncate">Total Tasks Completed</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-light">
                                <i class="fe-users font-26 avatar-title text-info"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">17</span></h3>
                                <p class="text-muted mb-1 text-truncate">Total Team Size</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-light">
                                <i class="fe-clock font-26 avatar-title text-warning"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">412</span></h3>
                                <p class="text-muted mb-1 text-truncate">Total Hours Spent</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->
        </div>

        <div class="row">
            <div class="col-xl-8 col-lg-6">
                <!-- project card -->
                <div class="card d-block">
                    <div class="card-body">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="dripicons-dots-3"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil mr-1"></i>Edit</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete mr-1"></i>Delete</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-email-outline mr-1"></i>Invite</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app mr-1"></i>Leave</a>
                            </div>
                        </div>
                        <!-- project title-->
                        <h3 class="mt-0 font-20">
                            App design and development
                        </h3>
                        <div class="badge badge-secondary mb-3">Ongoing</div>

                        <h5>Project Overview:</h5>

                        <p class="text-muted mb-2">
                            With supporting text below as a natural lead-in to additional contenposuere erat a ante. Voluptates, illo, iste itaque voluptas
                            corrupti ratione reprehenderit magni similique? Tempore, quos delectus asperiores libero voluptas quod perferendis! Voluptate,
                            quod illo rerum? Lorem ipsum dolor sit amet.
                        </p>

                        <p class="text-muted mb-4">
                            Voluptates, illo, iste itaque voluptas corrupti ratione reprehenderit magni similique? Tempore, quos delectus asperiores
                            libero voluptas quod perferendis! Voluptate, quod illo rerum? Lorem ipsum dolor sit amet. With supporting text below
                            as a natural lead-in to additional contenposuere erat a ante.
                        </p>

                        <div class="mb-4">
                            <h5>Tags</h5>
                            <div class="text-uppercase">
                                <a href="#" class="badge badge-soft-primary mr-1">Html</a>
                                <a href="#" class="badge badge-soft-primary mr-1">Css</a>
                                <a href="#" class="badge badge-soft-primary mr-1">Bootstrap</a>
                                <a href="#" class="badge badge-soft-primary mr-1">JQuery</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-4">
                                    <h5>Start Date</h5>
                                    <p>17 March 2019 <small class="text-muted">1:00 PM</small></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-4">
                                    <h5>End Date</h5>
                                    <p>22 December 2019 <small class="text-muted">1:00 PM</small></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-4">
                                    <h5>Budget</h5>
                                    <p>$15,800</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h5>Team Members:</h5>
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme" class="d-inline-block">
                                <img src="{{asset('assets/images/users/user-6.jpg')}}" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                            </a>

                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty" class="d-inline-block">
                                <img src="{{asset('assets/images/users/user-7.jpg')}}" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                            </a>

                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson" class="d-inline-block">
                                <img src="{{asset('assets/images/users/user-8.jpg')}}" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                            </a>

                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme" class="d-inline-block">
                                <img src="{{asset('assets/images/users/user-4.jpg')}}" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                            </a>

                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty" class="d-inline-block">
                                <img src="{{asset('assets/images/users/user-5.jpg')}}" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                            </a>

                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson" class="d-inline-block">
                                <img src="{{asset('assets/images/users/user-3.jpg')}}" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                            </a>
                        </div>

                    </div> <!-- end card-body-->
                    
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="dripicons-dots-3"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Latest</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Popular</a>
                            </div>
                        </div>

                        <h4 class="mt-0 mb-3">Comments (258)</h4>

                        <textarea class="form-control form-control-light mb-2" placeholder="Write message" id="example-textarea" rows="3"></textarea>
                        <div class="text-right">
                            <div class="btn-group mb-2">
                                <button type="button" class="btn btn-link btn-sm text-muted font-18"><i class="dripicons-paperclip"></i></button>
                            </div>
                            <div class="btn-group mb-2 ml-2">
                                <button type="button" class="btn btn-primary btn-sm">Submit</button>
                            </div>
                        </div>

                        <div class="mt-2">
                            <div class="media">
                                <img class="mr-2 avatar-sm rounded-circle" src="{{asset('assets/images/users/user-3.jpg')}}"
                                    alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0"><a href="{{route('second', ['contacts', 'profile'])}}" class="text-reset">Jeremy Tomlinson</a> <small class="text-muted">3 hours ago</small></h5>
                                    Nice work, makes me think of The Money Pit.

                                    <br/>
                                    <a href="javascript: void(0);" class="text-muted font-13 d-inline-block mt-2"><i class="mdi mdi-reply"></i> Reply</a>

                                    <div class="media mt-3">
                                        <a class="pr-2" href="#">
                                            <img src="{{asset('assets/images/users/user-4.jpg')}}" class="avatar-sm rounded-circle" alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="mt-0"><a href="{{route('second', ['contacts', 'profile'])}}" class="text-reset">Kathleen Thomas</a> <small class="text-muted">1 hours ago</small></h5>
                                            i'm in the middle of a timelapse animation myself! (Very different though.) Awesome stuff.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="media mt-3">
                                <img class="mr-2 avatar-sm rounded-circle" src="{{asset('assets/images/users/user-2.jpg')}}"
                                    alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0"><a href="{{route('second', ['contacts', 'profile'])}}" class="text-reset">Jonathan Tiner</a> <small class="text-muted">1 day ago</small></h5>
                                    The parallax is a little odd but O.o that house build is awesome!!
                                    
                                    <br/>
                                    <a href="javascript: void(0);" class="text-muted font-13 d-inline-block mt-2"><i class="mdi mdi-reply"></i> Reply</a>

                                </div>
                            </div>

                            <div class="media mt-3">
                                <a class="pr-2" href="#">
                                    <img src="{{asset('assets/images/users/user-1.jpg')}}" class="rounded-circle"
                                        alt="Generic placeholder image" height="31">
                                </a>
                                <div class="media-body">
                                    <input type="text" id="simpleinput" class="form-control form-control-sm form-control-light" placeholder="Add comment">
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-2">
                            <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-spin mdi-loading mr-1 font-16"></i> Load more </a>
                        </div>
                    </div> <!-- end card-body-->
                </div>
                <!-- end card-->
            </div> <!-- end col -->

            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Progress</h5>
                        <div class="mt-3 chartjs-chart" style="height: 320px;">
                            <canvas id="line-chart-example"></canvas>
                        </div>    
                    </div>
                </div>
                <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Files</h5>

                        <div class="card mb-1 shadow-none border">
                            <div class="p-2">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="avatar-sm">
                                            <span class="avatar-title badge-soft-primary text-primary rounded">
                                                ZIP
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col pl-0">
                                        <a href="javascript:void(0);" class="text-muted font-weight-bold">Ubold-sketch-design.zip</a>
                                        <p class="mb-0">2.3 MB</p>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Button -->
                                        <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                            <i class="dripicons-download"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-1 shadow-none border">
                            <div class="p-2">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="avatar-sm">
                                            <span class="avatar-title badge-soft-primary text-primary rounded">
                                                JPG
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col pl-0">
                                        <a href="javascript:void(0);" class="text-muted font-weight-bold">Dashboard-design.jpg</a>
                                        <p class="mb-0">3.25 MB</p>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Button -->
                                        <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                            <i class="dripicons-download"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-0 shadow-none border">
                            <div class="p-2">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="avatar-sm">
                                            <span class="avatar-title badge-soft-primary text-primary rounded">
                                                MP4
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col pl-0">
                                        <a href="javascript:void(0);" class="text-muted font-weight-bold">Admin-bug-report.mp4</a>
                                        <p class="mb-0">7.05 MB</p>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Button -->
                                        <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                            <i class="dripicons-download"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/chart.js/chart.js.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('assets/js/pages/project-details.init.js')}}"></script>
@endsection