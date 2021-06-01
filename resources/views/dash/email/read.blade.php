@extends('layouts.vertical', ['title' => 'Email Read'])

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Email</a></li>
                            <li class="breadcrumb-item active">Read</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Email Read</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <!-- Right Sidebar -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <!-- Left sidebar -->
                    <div class="inbox-leftbar">

                        <a href="{{route('second', ['email', 'compose'])}}" class="btn btn-danger btn-block waves-effect waves-light">Compose</a>

                        <div class="mail-list mt-4">
                            <a href="javascript: void(0);" class="text-danger font-weight-bold"><i class="dripicons-inbox mr-2"></i>Inbox<span class="badge badge-soft-danger float-right ml-2">7</span></a>
                            <a href="javascript: void(0);"><i class="dripicons-star mr-2"></i>Starred</a>
                            <a href="javascript: void(0);"><i class="dripicons-clock mr-2"></i>Snoozed</a>
                            <a href="javascript: void(0);"><i class="dripicons-document mr-2"></i>Draft<span class="badge badge-soft-info float-right ml-2">32</span></a>
                            <a href="javascript: void(0);"><i class="dripicons-exit mr-2"></i>Sent Mail</a>
                            <a href="javascript: void(0);"><i class="dripicons-trash mr-2"></i>Trash</a>
                            <a href="javascript: void(0);"><i class="dripicons-tag mr-2"></i>Important</a>
                            <a href="javascript: void(0);"><i class="dripicons-warning mr-2"></i>Spam</a>
                        </div>

                        <h6 class="mt-4">Labels</h6>

                        <div class="list-group b-0 mail-list">
                            <a href="#" class="list-group-item border-0"><span class="mdi mdi-circle text-info mr-2"></span>Web App</a>
                            <a href="#" class="list-group-item border-0"><span class="mdi mdi-circle text-warning mr-2"></span>Recharge</a>
                            <a href="#" class="list-group-item border-0"><span class="mdi mdi-circle text-dark mr-2"></span>Wallet Balance</a>
                            <a href="#" class="list-group-item border-0"><span class="mdi mdi-circle text-primary mr-2"></span>Friends</a>
                            <a href="#" class="list-group-item border-0"><span class="mdi mdi-circle text-success mr-2"></span>Family</a>
                        </div>

                    </div>
                    <!-- End Left sidebar -->

                    <div class="inbox-rightbar">

                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light waves-effect"><i class="mdi mdi-archive font-18"></i></button>
                            <button type="button" class="btn btn-sm btn-light waves-effect"><i class="mdi mdi-alert-octagon font-18"></i></button>
                            <button type="button" class="btn btn-sm btn-light waves-effect"><i class="mdi mdi-delete-variant font-18"></i></button>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-folder font-18"></i>
                                <i class="mdi mdi-chevron-down"></i>
                            </button>
                            <div class="dropdown-menu">
                                <span class="dropdown-header">Move to</span>
                                <a class="dropdown-item" href="javascript: void(0);">Social</a>
                                <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-label font-18"></i>
                                <i class="mdi mdi-chevron-down"></i>
                            </button>
                            <div class="dropdown-menu">
                                <span class="dropdown-header">Label as:</span>
                                <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                <a class="dropdown-item" href="javascript: void(0);">Social</a>
                                <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                            </div>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-horizontal font-18"></i> More
                                <i class="mdi mdi-chevron-down"></i>
                            </button>
                            <div class="dropdown-menu">
                                <span class="dropdown-header">More Option :</span>
                                <a class="dropdown-item" href="javascript: void(0);">Mark as Unread</a>
                                <a class="dropdown-item" href="javascript: void(0);">Add to Tasks</a>
                                <a class="dropdown-item" href="javascript: void(0);">Add Star</a>
                                <a class="dropdown-item" href="javascript: void(0);">Mute</a>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h5 class="font-18">Your elite author Graphic Optimization reward is ready!</h5>

                            <hr/>

                            <div class="media mb-3 mt-1">
                                <img class="d-flex mr-2 rounded-circle" src="{{asset('assets/images/users/user-2.jpg')}}" alt="placeholder image" height="32">
                                <div class="media-body">
                                    <small class="float-right">Dec 14, 2017, 5:17 AM</small>
                                    <h6 class="m-0 font-14">Steven Smith</h6>
                                    <small class="text-muted">From: jonathan@domain.com</small>
                                </div>
                            </div>

                            <p>Hi Coderthemes!</p>
                            <p>Clicking ‘Order Service’ on the right-hand side of the above page will present you with an order page. This service has the following Briefing Guidelines that will need to be filled before placing your order:</p>
                            <ol>
                                <li>Your design preferences (Color, style, shapes, Fonts, others) </li>
                                <li>Tell me, why is your item different? </li>
                                <li>Do you want to bring up a specific feature of your item? If yes, please tell me </li>
                                <li>Do you have any preference or specific thing you would like to change or improve on your item page? </li>
                                <li>Do you want to include your item's or your provider's logo on the page? if yes, please send it to me in vector format (Ai or EPS) </li>
                                <li>Please provide me with the copy or text to display</li>
                            </ol>

                            <p>Filling in this form with the above information will ensure that they will be able to start work quickly.</p>
                            <p>You can complete your order by putting your coupon code into the Promotional code box and clicking ‘Apply Coupon’.</p>
                            <p><b>Best,</b> <br/> Graphic Studio</p>
                            <hr/>

                            <h5 class="mb-3">Attachments</h5>

                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card mb-1 shadow-none border">
                                        <div class="p-2">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="avatar-sm">
                                                        <span class="avatar-title bg-soft-primary text-primary rounded">
                                                            .ZIP
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col pl-0">
                                                    <a href="javascript:void(0);" class="text-muted font-weight-bold">ubold-admin-design.zip</a>
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
                                </div> <!-- end col -->
                                <div class="col-xl-4">
                                    <div class="card mb-1 shadow-none border">
                                        <div class="p-2">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="avatar-sm">
                                                        <span class="avatar-title bg-soft-success text-success rounded">
                                                            .JPG
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
                                </div> <!-- end col -->
                                <div class="col-xl-4">
                                    <div class="card mb-0 shadow-none border">
                                        <div class="p-2">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="avatar-sm">
                                                        <span class="avatar-title bg-secondary rounded">
                                                            .MP4
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
                                </div> <!-- end col -->
                            </div>
                            <!-- end row-->
                            
                            <div class="mt-5">
                                <a href="" class="btn btn-secondary mr-2"><i class="mdi mdi-reply mr-1"></i> Reply</a>
                                <a href="" class="btn btn-light">Forward <i class="mdi mdi-forward ml-1"></i></a>
                            </div>

                        </div>
                        <!-- end .mt-4 -->

                    </div> 
                    <!-- end inbox-rightbar-->

                    <div class="clearfix"></div>
                </div>

            </div> <!-- end Col -->

        </div><!-- End row -->

        
    </div> <!-- container -->
@endsection
