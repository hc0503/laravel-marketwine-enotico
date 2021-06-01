@extends('layouts.vertical', ['title' => 'Notifications'])

@section('css')
    <!-- Plugins css -->
    <link href="{{asset('assets/libs/jquery-toast-plugin/jquery-toast-plugin.min.css')}}" rel="stylesheet" type="text/css" />

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">UI</a></li>
                            <li class="breadcrumb-item active">Notifications</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Alerts & Notifications</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title">Bootstrap Toasts</h4>
                        <p class="text-muted">Push notifications to your visitors with a toast, a lightweight and easily customizable alert message.</p>

                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="mb-2">Basic</h5>
                                <p class="text-muted">Toasts are as flexible as you need and have very little required markup. At a minimum, we
                                    require a single element to contain your “toasted” content and strongly encourage a dismiss button.</p>
                                <div class="p-3">
                                    <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">
                                        <div class="toast-header">
                                            <img src="{{asset('assets/images/logo-sm.png')}}"alt="brand-logo" height="12" class="mr-1" />
                                            <strong class="mr-auto">UBold</strong>
                                            <small>11 mins ago</small>
                                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="toast-body">
                                            Hello, world! This is a toast message.
                                        </div>
                                    </div> <!--end toast-->

                                </div>
                            </div> <!-- end col-->
                            <div class="col-md-6">
                                <h5 class="mb-2">Translucent</h5>
                                <p class="text-muted">Toasts are slightly translucent, too, so they blend over whatever they might appear over.
                                    For browsers that support the backdrop-filter CSS property, we’ll also attempt to blur the elements under a toast.</p>

                                <div class="p-3 bg-secondary">
                                    <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">
                                        <div class="toast-header">
                                            <img src="{{asset('assets/images/logo-sm.png')}}"alt="brand-logo" height="12" class="mr-1" />
                                            <strong class="mr-auto">UBold</strong>
                                            <small>11 mins ago</small>
                                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="toast-body">
                                            Hello, world! This is a toast message.
                                        </div>
                                    </div> <!--end toast-->
                                </div>
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                        <div class="row">
                            <div class="col-md-6 mt-4">
                                <h5 class="mb-2">Stacking</h5>
                                <p class="text-muted">When you have multiple toasts, we default to vertiaclly stacking them in a readable manner.</p>
                                <div class="p-3">
                                    <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
                                        <!-- Position it -->
                                        <div style="position: absolute; top: 0; right: 0;">
                                        
                                            <!-- Then put toasts within -->
                                            <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">
                                                <div class="toast-header">
                                                    <img src="{{asset('assets/images/logo-sm.png')}}"alt="brand-logo" height="12" class="mr-1" />
                                                    <strong class="mr-auto">UBold</strong>
                                                    <small class="text-muted">just now</small>
                                                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="toast-body">
                                                    See? Just like this.
                                                </div>
                                            </div> <!--end toast-->
                                        
                                            <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">
                                                <div class="toast-header">
                                                    <img src="{{asset('assets/images/logo-sm.png')}}"alt="brand-logo" height="12" class="mr-1" />
                                                    <strong class="mr-auto">UBold</strong>
                                                    <small class="text-muted">2 seconds ago</small>
                                                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="toast-body">
                                                    Heads up, toasts will stack automatically
                                                </div>
                                            </div> <!--end toast-->
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->
                            <div class="col-md-6 mt-4">
                                <h5 class="mb-2">Placement</h5>
                                <p class="text-muted">Place toasts with custom CSS as you need them. The top right is often used for
                                    notifications, as is the top middle. If you’re only ever going to show one toast at a time, put the positioning
                                    styles right on the <code>.toast</code>.</p>
                                <div class="p-3">
                                    <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center" style="min-height: 200px;">

                                        <!-- Then put toasts within -->
                                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">
                                            <div class="toast-header">
                                                <img src="{{asset('assets/images/logo-sm.png')}}"alt="brand-logo" height="12" class="mr-1" />
                                                <strong class="mr-auto">UBold</strong>
                                                <small>11 mins ago</small>
                                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="toast-body">
                                                Hello, world! This is a toast message.
                                            </div>
                                        </div> <!--end toast-->
                                    </div>
                                </div>
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div> 

        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Default Alert</h4>
                    <p class="sub-header">
                        Alerts are available for any length of text, as well as an optional dismiss button. For proper styling, use one of the eight
                        <strong>required</strong> contextual classes (e.g., <code>.alert-success</code>).
                    </p>

                    <div class="alert alert-primary" role="alert">
                        This is a <strong>primary</strong> alert—check it out!
                    </div>
                    <div class="alert alert-secondary" role="alert">
                        This is a <strong>secondary</strong> alert—check it out!
                    </div>
                    <div class="alert alert-success" role="alert">
                        <i class="mdi mdi-check-all mr-2"></i> This is a <strong>success</strong> alert—check it out!
                    </div>
                    <div class="alert alert-danger" role="alert">
                        <i class="mdi mdi-block-helper mr-2"></i> This is a <strong>danger</strong> alert—check it out!
                    </div>
                    <div class="alert alert-warning" role="alert">
                        <i class="mdi mdi-alert-outline mr-2"></i> This is a <strong>warning</strong> alert—check it out!
                    </div>
                    <div class="alert alert-info" role="alert">
                        <i class="mdi mdi-alert-circle-outline mr-2"></i> A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                    </div>
                    <div class="alert alert-light" role="alert">
                        A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                    </div>
                    <div class="alert alert-dark mb-0" role="alert">
                        A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                    </div>

                </div> <!-- end card-box-->
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Dismissing Alerts</h4>
                    <p class="sub-header">
                        Add a dismiss button and the <code>.alert-dismissible</code> class, which adds extra padding
                        to the right of the alert and positions the <code>.close</code> button.
                    </p>

                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        This is a primary alert—check it out!
                    </div>
                    <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        This is a secondary alert—check it out!
                    </div>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        This is a success alert—check it out!
                    </div>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        This is a danger alert—check it out!
                    </div>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        This is a warning alert—check it out!
                    </div>
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        This is a info alert—check it out!
                    </div>
                    <div class="alert alert-light alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        This is a light alert—check it out!
                    </div>
                    <div class="alert alert-dark alert-dismissible fade show mb-0" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        This is a dark alert—check it out!
                    </div>
                </div> <!-- end card-box-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Custom Background Alert</h4>
                    <p class="sub-header">
                        Use <code>.bg-*</code>,<code>.border-0</code> classes.
                    </p>

                    <div class="alert alert-primary bg-primary text-white border-0" role="alert">
                        This is a <strong>primary</strong> alert—check it out!
                    </div>
                    <div class="alert alert-secondary bg-secondary text-white border-0" role="alert">
                        This is a <strong>secondary</strong> alert—check it out!
                    </div>
                    <div class="alert alert-success bg-success text-white border-0" role="alert">
                        This is a <strong>success</strong> alert—check it out!
                    </div>
                    <div class="alert alert-danger bg-danger text-white border-0" role="alert">
                        This is a <strong>danger</strong> alert—check it out!
                    </div>
                    <div class="alert alert-warning bg-warning text-white border-0" role="alert">
                        This is a <strong>warning</strong> alert—check it out!
                    </div>
                    <div class="alert alert-info bg-info text-white border-0" role="alert">
                        This is a <strong>info</strong> alert—check it out!
                    </div>
                    <div class="alert alert-light bg-light text-dark border-0" role="alert">
                        This is a <strong>light</strong> alert—check it out!
                    </div>
                    <div class="alert alert-dark bg-dark text-white border-0 mb-0" role="alert">
                        This is a <strong>dark</strong> alert—check it out!
                    </div>

                </div> <!-- end card-box-->
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Dismissing Custom Background Alert</h4>
                    <p class="sub-header">
                        Use <code>.bg-*</code>,<code>.border-0</code> classes.
                    </p>

                    <div class="alert alert-primary alert-dismissible bg-primary text-white border-0 fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        This is a primary alert—check it out!
                    </div>
                    <div class="alert alert-secondary alert-dismissible bg-secondary text-white border-0 fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        This is a secondary alert—check it out!
                    </div>
                    <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        This is a success alert—check it out!
                    </div>
                    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        This is a danger alert—check it out!
                    </div>
                    <div class="alert alert-warning alert-dismissible bg-warning text-white border-0 fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        This is a warning alert—check it out!
                    </div>
                    <div class="alert alert-info alert-dismissible bg-info text-white border-0 fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        This is a info alert—check it out!
                    </div>
                    <div class="alert alert-light alert-dismissible bg-light text-dark border-0 fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        This is a light alert—check it out!
                    </div>
                    <div class="alert alert-dark alert-dismissible bg-dark text-white border-0 fade show mb-0" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        This is a dark alert—check it out!
                    </div>
                </div> <!-- end card-box-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card-box">

                    <table class="table table-borderless table-centered mb-0">
                        <thead class="thead-light">
                        <tr>
                            <th style="min-width:50%;">Jquery Toast</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Info Example</td>
                            <td>
                                <button type="button" class="btn btn-info waves-effect waves-light btn-sm" id="toastr-one">Click me</button>
                            </td>
                        </tr>

                        <tr>
                            <td>Warning Example</td>
                            <td>
                                <button type="button" class="btn btn-warning waves-effect waves-light btn-sm" id="toastr-two">Click me</button>
                            </td>
                        </tr>

                        <tr>
                            <td>Success Example</td>
                            <td>
                                <button type="button" class="btn btn-success waves-effect waves-light btn-sm" id="toastr-three">Click me</button>
                            </td>
                        </tr>

                        <tr>
                            <td>Danger Example</td>
                            <td>
                                <button type="button" class="btn btn-danger waves-light waves-effect btn-sm" id="toastr-four">Click me</button>
                            </td>
                        </tr>

                        <tr>
                            <td>The text can be an array</td>
                            <td>
                                <button type="button" class="btn btn-light waves-effect btn-sm" id="toastr-five">Click me</button>
                            </td>
                        </tr>

                        <tr>
                            <td>Put some HTML in the text</td>
                            <td>
                                <button type="button" class="btn btn-light waves-effect btn-sm" id="toastr-six">Click me</button>
                            </td>
                        </tr>

                        <tr>
                            <td>Making them sticky</td>
                            <td>
                                <button type="button" class="btn btn-light waves-effect btn-sm" id="toastr-seven">Click me</button>
                            </td>
                        </tr>

                        <tr>
                            <td>Fade transitions</td>
                            <td>
                                <button type="button" class="btn btn-light waves-effect btn-sm" id="toastr-eight">Click me</button>
                            </td>
                        </tr>

                        <tr>
                            <td>Slide up and down transitions</td>
                            <td>
                                <button type="button" class="btn btn-light waves-effect btn-sm" id="toastr-nine">Click me</button>
                            </td>
                        </tr>

                        <tr>
                            <td>Simple show from and hide to corner transition</td>
                            <td>
                                <button type="button" class="btn btn-light waves-effect btn-sm" id="toastr-ten">Click me</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div> <!-- end card-box-->
            </div> <!-- end col -->
        </div>
        <!-- end row --> 
        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/jquery-toast-plugin/jquery-toast-plugin.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('assets/js/pages/toastr.init.js')}}"></script>
@endsection