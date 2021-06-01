@extends('layouts.vertical', ['title' => 'Widgets'])

@section('css')
    <!-- Plugins css -->
    <link href="{{asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />

@endsection

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin UI</a></li>
                            <li class="breadcrumb-item active">Widgets</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Widgets</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                <i class="fe-heart font-22 avatar-title text-primary"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="mt-1">$<span data-plugin="counterup">58,947</span></h3>
                                <p class="text-muted mb-1 text-truncate">Total Revenue</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                                <i class="fe-shopping-cart font-22 avatar-title text-success"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="mt-1"><span data-plugin="counterup">127</span></h3>
                                <p class="text-muted mb-1 text-truncate">Today's Sales</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                <i class="fe-bar-chart-line- font-22 avatar-title text-info"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="mt-1"><span data-plugin="counterup">0.58</span>%</h3>
                                <p class="text-muted mb-1 text-truncate">Conversion</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
                                <i class="fe-eye font-22 avatar-title text-warning"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="mt-1"><span data-plugin="counterup">78,412</span></h3>
                                <p class="text-muted mb-1 text-truncate">Today's Visits</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->


        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-danger border-danger border">
                                <i class="fe-shopping-bag font-22 avatar-title text-danger"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="mt-1"><span data-plugin="counterup">178</span></h3>
                                <p class="text-muted mb-1 text-truncate">Available Stores</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-secondary border-secondary border">
                                <i class="fe-gitlab font-22 avatar-title text-secondary"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="mt-1"><span data-plugin="counterup">289</span></h3>
                                <p class="text-muted mb-1 text-truncate">Gitlab Commits</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-blue border-blue border">
                                <i class="fe-gift font-22 avatar-title text-blue"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="mt-1"><span data-plugin="counterup">1021</span></h3>
                                <p class="text-muted mb-1 text-truncate">Free Gifts</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-pink border-pink border">
                                <i class="fe-users font-22 avatar-title text-pink"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="mt-1"><span data-plugin="counterup">154</span>k</h3>
                                <p class="text-muted mb-1 text-truncate">Paid Users</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-12">
                <div class="card-box widget-inline">
                    <div class="row">
                        <div class="col-sm-6 col-xl-3">
                            <div class="p-2 text-center">
                                <i class="mdi mdi-cart-plus text-primary mdi-24px"></i>
                                <h3><span data-plugin="counterup">8954</span></h3>
                                <p class="text-muted font-15 mb-0">Lifetime Sales</p>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="p-2 text-center">
                                <i class="mdi mdi-currency-usd text-success mdi-24px"></i>
                                <h3>$ <span data-plugin="counterup">7841</span></h3>
                                <p class="text-muted font-15 mb-0">Income Amounts</p>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="p-2 text-center">
                                <i class="mdi mdi-account-group text-danger mdi-24px"></i>
                                <h3><span data-plugin="counterup">6521</span></h3>
                                <p class="text-muted font-15 mb-0">Total Users</p>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="p-2 text-center">
                                <i class="mdi mdi-eye-outline text-blue mdi-24px"></i>
                                <h3><span data-plugin="counterup">325</span> k</h3>
                                <p class="text-muted font-15 mb-0">Total Visits</p>
                            </div>
                        </div>

                    </div> <!-- end row -->
                </div> <!-- end card-box-->
            </div> <!-- end col-->
        </div>    
        <!-- end row-->

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card-box">
                    <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                    <h4 class="mt-0 font-16">Income Status</h4>
                    <h2 class="text-primary my-3 text-center">$<span data-plugin="counterup">31,570</span></h2>
                    <p class="text-muted mb-0">Total income: $22506 <span class="float-right"><i class="fa fa-caret-up text-success mr-1"></i>10.25%</span></p>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card-box">
                    <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                    <h4 class="mt-0 font-16">Sales Status</h4>
                    <h2 class="text-primary my-3 text-center"><span data-plugin="counterup">683</span></h2>
                    <p class="text-muted mb-0">Total sales: 2398 <span class="float-right"><i class="fa fa-caret-down text-danger mr-1"></i>7.85%</span></p>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card-box">
                    <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                    <h4 class="mt-0 font-16">Recent Users</h4>
                    <h2 class="text-primary my-3 text-center"><span data-plugin="counterup">3.2</span>M</h2>
                    <p class="text-muted mb-0">Total users: 121 M <span class="float-right"><i class="fa fa-caret-up text-success mr-1"></i>3.64%</span></p>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card-box">
                    <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                    <h4 class="mt-0 font-16">Total Revenue</h4>
                    <h2 class="text-primary my-3 text-center">$<span data-plugin="counterup">68,541</span></h2>
                    <p class="text-muted mb-0">Total revenue: $1.2 M <span class="float-right"><i class="fa fa-caret-up text-success mr-1"></i>17.48%</span></p>
                </div>
            </div>
        </div> <!-- end row -->

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-sm bg-blue rounded">
                                <i class="fe-aperture avatar-title font-22 text-white"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="my-1">$<span data-plugin="counterup">12,145</span></h3>
                                <p class="text-muted mb-1 text-truncate">Income status</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h6 class="text-uppercase">Target <span class="float-right">60%</span></h6>
                        <div class="progress progress-sm m-0">
                            <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-box-->
            </div> <!-- end col -->

            <div class="col-md-6 col-xl-3">
                <div class="card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-sm bg-success rounded">
                                <i class="fe-shopping-cart avatar-title font-22 text-white"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="my-1"><span data-plugin="counterup">1576</span></h3>
                                <p class="text-muted mb-1 text-truncate">January's Sales</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h6 class="text-uppercase">Target <span class="float-right">49%</span></h6>
                        <div class="progress progress-sm m-0">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100" style="width: 49%">
                                <span class="sr-only">49% Complete</span>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-box-->
            </div> <!-- end col -->

            <div class="col-md-6 col-xl-3">
                <div class="card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-sm bg-primary rounded">
                                <i class="fe-bar-chart-2 avatar-title font-22 text-white"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="my-1">$<span data-plugin="counterup">8947</span></h3>
                                <p class="text-muted mb-1 text-truncate">Payouts</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h6 class="text-uppercase">Target <span class="float-right">18%</span></h6>
                        <div class="progress progress-sm m-0">
                            <div class="progress-bar" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100" style="width: 18%">
                                <span class="sr-only">18% Complete</span>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-box-->
            </div> <!-- end col -->

            <div class="col-md-6 col-xl-3">
                <div class="card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-sm bg-info rounded">
                                <i class="fe-cpu avatar-title font-22 text-white"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="my-1"><span data-plugin="counterup">178</span></h3>
                                <p class="text-muted mb-1 text-truncate">Available Stores</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h6 class="text-uppercase">Target <span class="float-right">74%</span></h6>
                        <div class="progress progress-sm m-0">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width: 74%">
                                <span class="sr-only">74% Complete</span>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-box-->
            </div> <!-- end col -->
            
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="avatar-lg">
                                <img src="{{asset('assets/images/users/user-3.jpg')}}" class="img-fluid rounded-circle" alt="user-img" />
                            </div>
                        </div>
                        <div class="col">
                            <h5 class="mb-1 mt-2">Thelma Fridley</h5>
                            <p class="mb-2 text-muted">Admin User</p>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="avatar-lg">
                                <img src="{{asset('assets/images/users/user-4.jpg')}}" class="img-fluid rounded-circle" alt="user-img" />
                            </div>
                        </div>
                        <div class="col">
                            <h5 class="mb-1 mt-2">Chandler Hervieux</h5>
                            <p class="mb-2 text-muted">Manager</p>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="avatar-lg">
                                <img src="{{asset('assets/images/users/user-5.jpg')}}" class="img-fluid rounded-circle" alt="user-img" />
                            </div>
                        </div>
                        <div class="col">
                            <h5 class="mb-1 mt-2">Percy Demers</h5>
                            <p class="mb-2 text-muted">Product Manager</p>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="avatar-lg">
                                <img src="{{asset('assets/images/users/user-6.jpg')}}" class="img-fluid rounded-circle" alt="user-img" />
                            </div>
                        </div>
                        <div class="col">
                            <h5 class="mb-1 mt-2">Antoine Masson</h5>
                            <p class="mb-2 text-muted">Premium User</p>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-12">
                <h4 class="mb-4">Other Widgets</h4>
            </div> <!-- end col-->
        </div>
        <!-- end row -->

        <div class="row">
            <!-- INBOX -->
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            </div>
                        </div>
                        <h4 class="header-title mb-3">Inbox</h4>

                        <div class="inbox-widget" data-simplebar style="max-height: 407px;">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="{{asset('assets/images/users/user-2.jpg')}}" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Tomaslau</p>
                                <p class="inbox-item-text">I've finished it! See you so...</p>
                                <p class="inbox-item-date">
                                    <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                </p>
                            </div>
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="{{asset('assets/images/users/user-3.jpg')}}" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Stillnotdavid</p>
                                <p class="inbox-item-text">This theme is awesome!</p>
                                <p class="inbox-item-date">
                                    <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                </p>
                            </div>
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="{{asset('assets/images/users/user-4.jpg')}}" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Kurafire</p>
                                <p class="inbox-item-text">Nice to meet you</p>
                                <p class="inbox-item-date">
                                    <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                </p>
                            </div>

                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="{{asset('assets/images/users/user-5.jpg')}}" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Shahedk</p>
                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                <p class="inbox-item-date">
                                    <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                </p>
                            </div>
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="{{asset('assets/images/users/user-6.jpg')}}" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Adhamdannaway</p>
                                <p class="inbox-item-text">This theme is awesome!</p>
                                <p class="inbox-item-date">
                                    <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                </p>
                            </div>

                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="{{asset('assets/images/users/user-3.jpg')}}" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Stillnotdavid</p>
                                <p class="inbox-item-text">This theme is awesome!</p>
                                <p class="inbox-item-date">
                                    <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                </p>
                            </div>
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="{{asset('assets/images/users/user-4.jpg')}}" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Kurafire</p>
                                <p class="inbox-item-text">Nice to meet you</p>
                                <p class="inbox-item-date">
                                    <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                </p>
                            </div>
                        </div> <!-- end inbox-widget -->
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col -->

            <!-- CHAT -->
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            </div>
                        </div>
                        <h4 class="header-title mb-3">Chat</h4>

                        <div class="chat-conversation">
                            <div data-simplebar style="height: 370px;">
                                <ul class="conversation-list">
                                    <li class="clearfix">
                                        <div class="chat-avatar">
                                            <img src="{{asset('assets/images/users/user-5.jpg')}}" alt="male">
                                            <i>10:00</i>
                                        </div>
                                        <div class="conversation-text">
                                            <div class="ctext-wrap">
                                                <i>Geneva</i>
                                                <p>
                                                    Hello!
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="clearfix odd">
                                        <div class="chat-avatar">
                                            <img src="{{asset('assets/images/users/user-1.jpg')}}" alt="Female">
                                            <i>10:01</i>
                                        </div>
                                        <div class="conversation-text">
                                            <div class="ctext-wrap">
                                                <i>Dominic</i>
                                                <p>
                                                    Hi, How are you? What about our next meeting?
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="chat-avatar">
                                            <img src="{{asset('assets/images/users/user-5.jpg')}}" alt="male">
                                            <i>10:01</i>
                                        </div>
                                        <div class="conversation-text">
                                            <div class="ctext-wrap">
                                                <i>Geneva</i>
                                                <p>
                                                    Yeah everything is fine
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="clearfix odd">
                                        <div class="chat-avatar">
                                            <img src="{{asset('assets/images/users/user-1.jpg')}}" alt="male">
                                            <i>10:02</i>
                                        </div>
                                        <div class="conversation-text">
                                            <div class="ctext-wrap">
                                                <i>Dominic</i>
                                                <p>
                                                    Wow that's great
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <form class="needs-validation" novalidate name="chat-form" id="chat-form">
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control chat-input" placeholder="Enter your text" required>
                                        <div class="invalid-feedback">
                                            Please enter your messsage
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-danger chat-send btn-block waves-effect waves-light">Send</button>
                                    </div>
                                </div>
                            </form>

                        </div> <!-- end .chat-conversation-->
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col-->

            <!-- Todos app -->
            <div class="col-xl-4">
                <!-- Todo-->
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            </div>
                        </div>
                        <h4 class="header-title mb-3">Todo</h4>

                        <div class="todoapp">
                            <div class="row">
                                <div class="col">
                                    <h5 id="todo-message"><span id="todo-remaining"></span> of <span id="todo-total"></span> remaining</h5>
                                </div>
                                <div class="col-auto">
                                    <a href="" class="float-right btn btn-light btn-sm" id="btn-archive">Archive</a>
                                </div>
                            </div>

                            <div style="max-height: 310px;" data-simplebar>
                                <ul class="list-group list-group-flush todo-list" id="todo-list"></ul>
                            </div>

                            <form name="todo-form" id="todo-form" class="needs-validation mt-3" novalidate>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" id="todo-input-text" name="todo-input-text" class="form-control" 
                                            placeholder="Add new todo" required>
                                        <div class="invalid-feedback">
                                            Please enter your task name
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn-primary btn-md btn-block btn waves-effect waves-light" type="submit" id="todo-btn-submit">Add</button>
                                    </div>
                                </div>
                            </form>
                        </div> <!-- end .todoapp-->

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div> <!-- end row -->


        <div class="row">
            <div class="col-12">
                <h4 class="mb-4">Chart Widgets</h4>
            </div> <!-- end col-->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-4">
                <div class="card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-sm bg-warning rounded-circle">
                                <i class="fe-aperture avatar-title font-22 text-white"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="my-1">$<span data-plugin="counterup">8,145</span></h3>
                                <p class="text-muted mb-1 text-truncate">Income Status</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <span data-plugin="peity-bar" data-colors="#f7b84b,#ebeff2" data-width="100%" data-height="45">5,3,9,6,5,9,7,3,5,2,9,7,2,1,3,5,2,9,7,2,5,3,9,6,5,9,7</span>
                    </div>
                </div> <!-- end card-box-->
            </div> <!-- end col -->

            <div class="col-xl-4">
                <div class="card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-sm bg-blue rounded-circle">
                                <i class="fe-shopping-bag avatar-title font-22 text-white"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="my-1"><span data-plugin="counterup">367</span></h3>
                                <p class="text-muted mb-1 text-truncate">Sales Status</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4 text-center">
                        <span data-plugin="peity-line" data-fill="transparent" data-stroke="#4a81d4" data-width="100%" data-height="48">5,3,9,6,5,9,7,3,5,2</span>
                    </div>
                </div> <!-- end card-box-->
            </div> <!-- end col -->

            <div class="col-xl-4">
                <div class="card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-sm bg-success rounded-circle">
                                <i class="fe-users avatar-title font-22 text-white"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="my-1"><span data-plugin="counterup">7204</span></h3>
                                <p class="text-muted mb-1 text-truncate">Recent Users</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <span data-plugin="peity-line" data-fill="#1abc9c" data-stroke="#1abc9c" data-width="100%" data-height="48">3,5,2,9,7,2,5,3,9,6,5,9,7</span>
                    </div>
                </div> <!-- end card-box-->
            </div> <!-- end col -->

        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-xl-4">
                <div class="card-box">
                    <h4 class="header-title mb-3">Total Revenue</h4>

                    <div class="widget-chart text-center" dir="ltr">
                        <input data-plugin="knob" data-width="120" data-height="120" data-linecap=round data-bgColor="rgba(0,0,0,0.1)" data-fgColor="#f1556c" value="60" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".12"/>
                        <h5 class="text-muted mt-3">Total sales made today</h5>
                        <h2>$178</h2>

                        <div class="row mt-3">
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                <h4>$12k</h4>
                            </div>
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                <h4>$2487</h4>
                            </div>
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                <h4>$14.5k</h4>
                            </div>
                        </div> <!-- end row -->
                        
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col-->

            <div class="col-xl-4">
                <div class="card-box">
                    <h4 class="header-title mb-3">Sales Status</h4>

                    <div class="widget-chart text-center" dir="ltr">
                        <input data-plugin="knob" data-width="120" data-height="120" data-linecap=round data-bgColor="rgba(0,0,0,0.1)" data-fgColor="#6658dd" value="37" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".12"/>
                        <h5 class="text-muted mt-3">Total sales made today</h5>
                        <h2>29</h2>

                        <div class="row mt-3">
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                <h4>480</h4>
                            </div>
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                <h4>136</h4>
                            </div>
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                <h4>514</h4>
                            </div>
                        </div> <!-- end row -->
                        
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col-->

            <div class="col-xl-4">
                <div class="card-box">
                    <h4 class="header-title mb-3">Recent Users</h4>

                    <div class="widget-chart text-center" dir="ltr">
                        <input data-plugin="knob" data-width="120" data-height="120" data-linecap=round data-bgColor="rgba(0,0,0,0.1)" data-fgColor="#1abc9c" value="81" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".12"/>
                        <h5 class="text-muted mt-3">Total sales made today</h5>
                        <h2>72</h2>

                        <div class="row mt-3">
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                <h4>8k</h4>
                            </div>
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                <h4>2.5k</h4>
                            </div>
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                <h4>10.2k</h4>
                            </div>
                        </div> <!-- end row -->
                        
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col-->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-xl-4">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Lifetime Sales</h4>

                        <div id="cardCollpase1" class="collapse pt-3 show">
                            <div class="text-center">
                                <div id="lifetime-sales" data-colors="#00acc1,#f1556c"></div>

                                <div class="row mt-3">
                                    <div class="col-4">
                                        <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                        <h4><i class="fe-arrow-down text-danger mr-1"></i>$7.8k</h4>
                                    </div>
                                    <div class="col-4">
                                        <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                        <h4><i class="fe-arrow-up text-success mr-1"></i>$1.4k</h4>
                                    </div>
                                    <div class="col-4">
                                        <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                        <h4><i class="fe-arrow-down text-danger mr-1"></i>$9.8k</h4>
                                    </div>
                                </div> <!-- end row -->
                                
                            </div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Income Amounts</h4>

                        <div id="cardCollpase2" class="collapse pt-3 show">
                            <div class="text-center">
                                <div id="income-amounts" data-colors="#00acc1"></div>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                        <h4><i class="fe-arrow-up text-success mr-1"></i>641</h4>
                                    </div>
                                    <div class="col-4">
                                        <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                        <h4><i class="fe-arrow-down text-danger mr-1"></i>234</h4>
                                    </div>
                                    <div class="col-4">
                                        <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                        <h4><i class="fe-arrow-up text-success mr-1"></i>3201</h4>
                                    </div>
                                </div> <!-- end row -->
                            </div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Total Users</h4>

                        <div id="cardCollpase3" class="collapse pt-3 show">
                            <div class="text-center">
                                <div id="total-users" data-colors="#00acc1,#4b88e4,#e3eaef,#fd7e14"></div>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                        <h4><i class="fe-arrow-down text-danger mr-1"></i>18k</h4>
                                    </div>
                                    <div class="col-4">
                                        <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                        <h4><i class="fe-arrow-up text-success mr-1"></i>3.25k</h4>
                                    </div>
                                    <div class="col-4">
                                        <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                        <h4><i class="fe-arrow-up text-success mr-1"></i>28k</h4>
                                    </div>
                                </div> <!-- end row -->
                            </div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row -->

    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/peity/peity.min.js')}}"></script>
    <script src="{{asset('assets/libs/jquery-knob/jquery-knob.min.js')}}"></script>
    <script src="{{asset('assets/libs/jquery-sparkline/jquery-sparkline.min.js')}}"></script>
    <script src="{{asset('assets/libs/moment/moment.min.js')}}"></script>
    <script src="{{asset('assets/libs/jquery.scrollto/jquery.scrollto.min.js')}}"></script>
    <script src="{{asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('assets/js/pages/jquery.chat.js')}}"></script>
    <script src="{{asset('assets/js/pages/jquery.todo.js')}}"></script>
    <script src="{{asset('assets/js/pages/widgets.init.js')}}"></script>
@endsection