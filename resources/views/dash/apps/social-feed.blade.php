@extends('layouts.vertical', ['title' => 'Social Feed'])

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
                            <li class="breadcrumb-item active">Social Feed</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Social Feed</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-xl-3 col-lg-6 order-lg-1 order-xl-1">
                <!-- start profile info -->
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-horizontal"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Edit Profile</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                            </div>
                        </div>

                        <div class="media">
                            <img class="d-flex align-self-start rounded mr-2" src="{{asset('assets/images/users/user-1.jpg')}}" alt="Dominic Keller" height="48">
                            <div class="media-body pl-1">
                                <h5 class="mt-1 mb-0">Geneva McKnight</h5>
                                <p class="mb-1 mt-1 text-muted">California, USA</p>
                            </div>
                        </div>

                        <div class="list-group list-group-flush mt-2 font-15">
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action text-primary font-weight-semibold border-0"><i class='mdi mdi-image-filter-black-white font-16 mr-1'></i> News Feed</a>
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0"><i class='mdi mdi-forum font-16 mr-1'></i> Messages</a>
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0"><i class='mdi mdi-calendar-month-outline font-16 mr-1'></i> Events</a>
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0"><i class='mdi mdi-account-multiple-outline font-16 mr-1'></i> Friends</a>
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0"><i class='mdi mdi-video font-16 mr-1'></i> Watch Videos</a>
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0"><i class='mdi mdi-image-multiple font-16 mr-1'></i> Photos</a>
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0"><i class='mdi mdi-storefront font-16 mr-1'></i> Marketplaces</a>
                        </div>

                        <h6 class="font-13 text-muted pl-3 my-3 text-uppercase">Pages you Like</h6>

                        <div class="px-2">
                            <div class="media mb-2">
                                <div class="avatar-xs bg-success rounded-circle">
                                    <span class="avatar-title font-14 font-weight-bold text-white">F</span>
                                </div>
                                <div class="media-body pl-2">
                                    <span class="badge badge-pink mt-1 float-right">142</span>
                                    <h5 class="mt-1 mb-0 font-family-primary font-weight-semibold"><a href="javascript: void(0);" class="text-reset">Football Team</a></h5>
                                </div>
                            </div>

                            <div class="media mb-2">
                                <div class="avatar-xs bg-warning rounded-circle">
                                    <span class="avatar-title font-14 font-weight-bold text-white">U</span>
                                </div>
                                <div class="media-body pl-2">
                                    <h5 class="mt-1 mb-0 font-family-primary font-weight-semibold"><a href="javascript: void(0);" class="text-reset">UI/UX Community</a></h5>
                                </div>
                            </div>

                            <div class="media mb-2">
                                <div class="avatar-xs bg-info rounded-circle">
                                    <span class="avatar-title font-14 font-weight-bold text-white">W</span>
                                </div>
                                <div class="media-body pl-2">
                                    <h5 class="mt-1 mb-0 font-family-primary font-weight-semibold"><a href="javascript: void(0);" class="text-reset">Web Designer</a></h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end profile info -->

                <!-- video -->
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="mdi mdi-dots-horizontal"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Today</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Yesterday</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Last Week</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Last Month</a>
                            </div>
                        </div>

                        <h4 class="header-title mb-1">Featured Video For You</h4>

                        <div class="mt-3">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9_eqq0HlN9g?autohide=0&showinfo=0&controls=0"></iframe>
                            </div>
                        </div>
                    </div> <!-- end card-body -->
                </div>
                <!-- end video -->

            </div> <!-- end col -->

            <div class="col-xl-6 col-lg-12 order-lg-2 order-xl-1">
                <!-- new post -->
                <div class="card">
                    <div class="card-body p-0">
                        <ul class="nav nav-tabs nav-bordered">
                            <li class="nav-item">
                                <a href="#newpost" data-toggle="tab" aria-expanded="false" class="nav-link active px-3 py-2">
                                    <i class="mdi mdi-pencil-box-multiple font-18 d-md-none d-block"></i>
                                    <span class="d-none d-md-block">Create Post</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#photo-video" data-toggle="tab" aria-expanded="true" class="nav-link px-3 py-2">
                                    <i class="mdi mdi-image font-18 d-md-none d-block"></i>
                                    <span class="d-none d-md-block">Photos/Videos</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#story" data-toggle="tab" aria-expanded="true" class="nav-link px-3 py-2">
                                    <i class="mdi mdi-book-open-variant font-18 d-md-none d-block"></i>
                                    <span class="d-none d-md-block">Story</span>
                                </a>
                            </li>
                        </ul> <!-- end nav-->
                        <div class="tab-content pt-0">
                            <div class="tab-pane show active p-3" id="newpost">
                                <!-- comment box -->
                                <div class="border rounded">
                                    <form action="#" class="comment-area-box">
                                        <textarea rows="4" class="form-control border-0 resize-none" placeholder="Write something...."></textarea>
                                        <div class="p-2 bg-light d-flex justify-content-between align-items-center">
                                            <div>
                                                <a href="#" class="btn btn-sm px-2 font-16 btn-light"><i class="mdi mdi-image-outline"></i></a>
                                                <a href="#" class="btn btn-sm px-2 font-16 btn-light"><i class="mdi mdi-crosshairs-gps"></i></a>
                                                <a href="#" class="btn btn-sm px-2 font-16 btn-light"><i class="mdi mdi-attachment"></i></a>
                                            </div>
                                            <button type="submit" class="btn btn-sm btn-success"><i class='mdi mdi-send-outline mr-1'></i>Post</button>
                                        </div>
                                    </form>
                                </div> <!-- end .border-->
                                <!-- end comment box -->
                            </div> <!-- end preview-->
                        </div> <!-- end tab-content-->
                    </div>
                </div>
                <!-- end new post -->

                <!-- Story Box-->
                <div class="card-box">
                    <div class="media">
                        <img class="mr-2 avatar-sm rounded-circle" src="{{asset('assets/images/users/user-3.jpg')}}"
                            alt="Generic placeholder image">
                        <div class="media-body">
                            <div class="dropdown float-right text-muted">
                                <a href="#" class="dropdown-toggle text-muted font-18" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Edit</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Delete</a>
                                </div>
                            </div>
                            <h5 class="m-0"><a href="{{route('second', ['contacts', 'profile'])}}" class="text-reset">Jeremy Tomlinson</a></h5>
                            <p class="text-muted"><small>about 2 minuts ago</small></p>
                        </div>
                    </div>
                    <p>Story based around the idea of time lapse, animation to post soon!</p>

                    <div class="row">
                        <div class="col-sm-8">
                            <img src="{{asset('assets/images/small/img-4.jpg')}}" alt="post-img" class="rounded mr-1 mb-3 mb-sm-0 img-fluid">
                        </div>
                        <div class="col">
                            <img src="{{asset('assets/images/small/img-1.jpg')}}" alt="post-img" class="rounded mr-1 img-fluid mb-3">
                            <img src="{{asset('assets/images/small/img-3.jpg')}}" alt="post-img" class="rounded mr-1 img-fluid">
                        </div>
                    </div>

                    <div class="mt-2">
                        <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted pl-0"><i class="mdi mdi-heart text-danger"></i> 2k Likes</a>
                        <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i class="mdi mdi-comment-multiple-outline"></i> 184 Comments</a>
                        <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i class="mdi mdi-share-variant"></i> Share</a>
                    </div>

                    <div class="media mt-3">
                        <img src="{{asset('assets/images/users/user-1.jpg')}}" height="32" class="align-self-start rounded mr-2" alt="Arya Stark">
                        <div class="media-body">
                            <input type="text" class="form-control form-control-light border-0 form-control-sm" placeholder="Write a comment">
                        </div> <!-- end medi-body -->
                    </div>
                </div>

                <!-- Story Box-->
                <div class="card-box">
                    <div class="media">
                        <img class="mr-2 avatar-sm rounded-circle" src="{{asset('assets/images/users/user-4.jpg')}}"
                            alt="Generic placeholder image">
                        <div class="media-body">
                            <div class="dropdown float-right text-muted">
                                <a href="#" class="dropdown-toggle text-muted font-18" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Edit</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Delete</a>
                                </div>
                            </div>
                            <h5 class="m-0"><a href="{{route('second', ['contacts', 'profile'])}}" class="text-reset">Thelma Fridley</a></h5>
                            <p class="text-muted"><small>about 1 hour ago</small></p>
                        </div>
                    </div>
                    <div class="font-16 text-center font-italic text-dark">
                        <i class="mdi mdi-format-quote-open font-20"></i> Cras sit amet nibh libero, in
                        gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                        purus odio, vestibulum in vulputate at, tempus viverra turpis. Duis
                        sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper
                        porta. Mauris massa.
                    </div>

                    <div class="mt-3">
                        <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted pl-0"><i class="mdi mdi-heart-outline text-danger"></i> 751 Likes</a>
                        <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i class="mdi mdi-comment-multiple-outline"></i> 85 Comments</a>
                        <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i class="mdi mdi-share-variant"></i> Share</a>
                    </div>

                    <div class="post-user-comment-box mt-2">
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
                                        <h5 class="mt-0"><a href="{{route('second', ['contacts', 'profile'])}}" class="text-reset">Kathleen Thomas</a> <small class="text-muted">5 hours ago</small></h5>
                                        i'm in the middle of a timelapse animation myself! (Very different though.) Awesome stuff.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="media mt-2">
                            <a class="pr-2" href="#">
                                <img src="{{asset('assets/images/users/user-1.jpg')}}" class="rounded-circle"
                                    alt="Generic placeholder image" height="31">
                            </a>
                            <div class="media-body">
                                <input type="text" id="simpleinput" class="form-control border-0 form-control-sm" placeholder="Add comment">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Story Box-->
                <div class="card-box">
                    <div class="media">
                        <img class="mr-2 avatar-sm rounded-circle" src="{{asset('assets/images/users/user-6.jpg')}}"
                            alt="Generic placeholder image">
                        <div class="media-body">
                            <div class="dropdown float-right text-muted">
                                <a href="#" class="dropdown-toggle text-muted font-18" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Edit</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Delete</a>
                                </div>
                            </div>
                            <h5 class="m-0"><a href="{{route('second', ['contacts', 'profile'])}}" class="text-reset">Jonathan Tiner</a></h5>
                            <p class="text-muted"><small>15 hours ago</small></p>
                        </div>
                    </div>
                    <p>The parallax is a little odd but O.o that house build is awesome!!</p>

                    <iframe src='https://player.vimeo.com/video/87993762' height='300' class="img-fluid border-0"></iframe>

                    <div class="mt-2">
                        <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted pl-0"><i class="mdi mdi-heart text-danger"></i> 1.5k Likes</a>
                        <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i class="mdi mdi-comment-multiple-outline"></i> 521 Comments</a>
                        <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i class="mdi mdi-eye-outline"></i> 3.5k Views</a>
                        <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i class="mdi mdi-share-variant"></i> Share</a>
                    </div>

                    <div class="media mt-2">
                        <img src="{{asset('assets/images/users/user-1.jpg')}}" height="32" class="align-self-start rounded mr-2" alt="Arya Stark">
                        <div class="media-body">
                            <input type="text" class="form-control form-control-light border-0 form-control-sm" placeholder="Write a comment">
                        </div> <!-- end medi-body -->
                    </div>

                </div>

                <!-- loader -->
                <div class="text-center mb-3">
                    <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-spin mdi-loading mr-1 font-16"></i> Load more </a>
                </div>
                <!-- end loader -->
            </div>

            <div class="col-xl-3 col-lg-6 order-lg-1 order-xl-2">
                <!-- news -->
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-horizontal"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Today</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Yesterday</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Last Week</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Last Month</a>
                            </div>
                        </div>

                        <h4 class="header-title mb-1">Trending</h4>

                        <div class="media mt-3">
                            <i class='mdi mdi-trending-up mr-2 font-18 text-primary'></i>
                            <div class="media-body">
                                <a class="mt-1 font-14 text-reset" href="javascript:void(0);">
                                    <strong>Golden Globes:</strong>
                                    <span class="text-muted">
                                        The 27 Best moments from the Golden Globe Awards
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="media mt-3">
                            <i class='mdi mdi-trending-up mr-2 font-18 text-primary'></i>
                            <div class="media-body">
                                <a class="mt-1 font-14 text-reset" href="javascript:void(0);">
                                    <strong>World Cricket:</strong>
                                    <span class="text-muted">
                                        India has won ICC T20 World Cup Yesterday
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="media mt-3">
                            <i class='mdi mdi-trending-up mr-2 font-18 text-primary'></i>
                            <div class="media-body">
                                <a class="mt-1 font-14 text-reset" href="javascript:void(0);">
                                    <strong>Antartica:</strong>
                                    <span class="text-muted">
                                        Metling of Totten Glacier could cause high risk to areas near by sea
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="media mt-3">
                            <i class='mdi mdi-trending-up mr-2 font-18 text-primary'></i>
                            <div class="media-body">
                                <a class="mt-1 font-14 text-reset" href="javascript:void(0);">
                                    <strong>Global Tournament:</strong>
                                    <span class="text-muted">
                                        America has won Football match Yesterday
                                    </span>
                                </a>
                            </div>
                        </div>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->

                <!-- People -->
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="mdi mdi-dots-horizontal"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">View All</a>
                            </div>
                        </div>

                        <h4 class="header-title mb-3">People you may know</h4>

                        <div class="inbox-widget">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="{{asset('assets/images/users/user-2.jpg')}}" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Robb Stark</p>
                                <p class="inbox-item-text">The first king in the North</p>
                                <p class="inbox-item-date">
                                    <button type="button" class="btn btn-sm btn-outline-primary px-1 py-0"> <i class='mdi mdi-plus font-16'></i> </button>
                                </p>
                            </div>
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="{{asset('assets/images/users/user-3.jpg')}}" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Stillnot David </p>
                                <p class="inbox-item-text">Lady of winterfall</p>
                                <p class="inbox-item-date">
                                    <button type="button" class="btn btn-sm btn-outline-primary px-1 py-0"> <i class='mdi mdi-plus font-16'></i> </button>
                                </p>
                            </div>
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="{{asset('assets/images/users/user-4.jpg')}}" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Cersei Lannister</p>
                                <p class="inbox-item-text">Queen of the Seven Kingdoms</p>
                                <p class="inbox-item-date">
                                    <button type="button" class="btn btn-sm btn-outline-primary px-1 py-0"> <i class='mdi mdi-plus font-16'></i> </button>
                                </p>
                            </div>

                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="{{asset('assets/images/users/user-5.jpg')}}" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Daenerys Targaryen</p>
                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                <p class="inbox-item-date">
                                    <button type="button" class="btn btn-sm btn-outline-primary px-1 py-0"> <i class='mdi mdi-plus font-16'></i> </button>
                                </p>
                            </div>
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="{{asset('assets/images/users/user-6.jpg')}}" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Adhamd Annaway</p>
                                <p class="inbox-item-text">Queen Daenerys</p>
                                <p class="inbox-item-date">
                                    <button type="button" class="btn btn-sm btn-outline-primary px-1 py-0"> <i class='mdi mdi-plus font-16'></i> </button>
                                </p>
                            </div>
                        </div> <!-- end inbox-widget -->    

                        <div class="mt-2 mb-3 text-center">
                            <a href="">View More <i class="mdi mdi-arrow-right"></i></a>
                        </div>

                    </div> <!-- end card-body -->
                </div>
                <!-- end video -->
            </div> <!-- end col -->
        </div> <!--end row -->
        
    </div> <!-- container -->
@endsection