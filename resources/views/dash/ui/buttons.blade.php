@extends('layouts.vertical', ['title' => 'Buttons'])

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
                            <li class="breadcrumb-item active">Buttons</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Buttons</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-xl-6">
                            <h4 class="header-title">Default Buttons</h4>
                            <p class="sub-header">
                                Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.
                            </p>

                            <div class="button-list">
                                <button type="button" class="btn btn-primary waves-effect waves-light">Primary</button>
                                <button type="button" class="btn btn-success waves-effect waves-light">Success</button>
                                <button type="button" class="btn btn-info waves-effect waves-light">Info</button>
                                <button type="button" class="btn btn-warning waves-effect waves-light">Warning</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light">Danger</button>
                                <button type="button" class="btn btn-dark waves-effect waves-light">Dark</button>
                                <button type="button" class="btn btn-blue waves-effect waves-light">Blue</button>
                                <button type="button" class="btn btn-pink waves-effect waves-light">Pink</button>
                                <button type="button" class="btn btn-secondary waves-effect">Secondary</button>
                                <button type="button" class="btn btn-light waves-effect">Light</button>
                                <button type="button" class="btn btn-white waves-effect">White</button>
                                <button type="button" class="btn btn-link waves-effect">Link</button>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-xl-6 mt-xl-0 mt-3">
                            <h4 class="header-title">Rounded Button</h4>
                            <p class="sub-header">
                                Add <code>.btn-rounded</code> to default button to get rounded corners.
                            </p>

                            <div class="button-list">
                                <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">Primary</button>
                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light">Success</button>
                                <button type="button" class="btn btn-info btn-rounded waves-effect waves-light">Info</button>
                                <button type="button" class="btn btn-warning btn-rounded waves-effect waves-light">Warning</button>
                                <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">Danger</button>
                                <button type="button" class="btn btn-dark btn-rounded waves-effect waves-light">Dark</button>
                                <button type="button" class="btn btn-blue btn-rounded waves-effect waves-light">Blue</button>
                                <button type="button" class="btn btn-pink btn-rounded waves-effect waves-light">Pink</button>
                                <button type="button" class="btn btn-secondary btn-rounded waves-effect">Secondary</button>
                                <button type="button" class="btn btn-white btn-rounded waves-effect">White</button>
                                <button type="button" class="btn btn-light btn-rounded waves-effect">Light</button>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div> <!-- end card-box-->
            </div> <!-- end col -->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-xl-6">
                            <h4 class="header-title">Outline Buttons</h4>
                            <p class="sub-header">
                                Use a classes <code>.btn-outline-**</code> to quickly create a bordered buttons.
                            </p>

                            <div class="button-list">
                                <button type="button" class="btn btn-outline-primary waves-effect waves-light">Primary</button>
                                <button type="button" class="btn btn-outline-success waves-effect waves-light">Success</button>
                                <button type="button" class="btn btn-outline-info waves-effect waves-light">Info</button>
                                <button type="button" class="btn btn-outline-warning waves-effect waves-light">Warning</button>
                                <button type="button" class="btn btn-outline-danger waves-effect waves-light">Danger</button>
                                <button type="button" class="btn btn-outline-dark waves-effect waves-light">Dark</button>
                                <button type="button" class="btn btn-outline-blue waves-effect waves-light">Blue</button>
                                <button type="button" class="btn btn-outline-pink waves-effect waves-light">Pink</button>
                                <button type="button" class="btn btn-outline-secondary waves-effect">Secondary</button>
                                <button type="button" class="btn btn-outline-light waves-effect">Light</button>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-xl-6 mt-xl-0 mt-3">
                            <h4 class="header-title">Outline Rounded Button</h4>
                            <p class="sub-header">
                                Add <code>.btn-rounded</code> to default button to get rounded corners.
                            </p>

                            <div class="button-list">
                                <button type="button" class="btn btn-outline-primary btn-rounded waves-effect waves-light">Primary</button>
                                <button type="button" class="btn btn-outline-success btn-rounded waves-effect waves-light">Success</button>
                                <button type="button" class="btn btn-outline-info btn-rounded waves-effect waves-light">Info</button>
                                <button type="button" class="btn btn-outline-warning btn-rounded waves-effect waves-light">Warning</button>
                                <button type="button" class="btn btn-outline-danger btn-rounded waves-effect waves-light">Danger</button>
                                <button type="button" class="btn btn-outline-dark btn-rounded waves-effect waves-light">Dark</button>
                                <button type="button" class="btn btn-outline-blue btn-rounded waves-effect waves-light">Blue</button>
                                <button type="button" class="btn btn-outline-pink btn-rounded waves-effect waves-light">Pink</button>
                                <button type="button" class="btn btn-outline-secondary btn-rounded waves-effect">Secondary</button>
                                <button type="button" class="btn btn-outline-light btn-rounded waves-effect">Light</button>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div> <!-- end card-box-->
            </div> <!-- end col -->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-xl-6">
                            <h4 class="header-title">Soft Buttons</h4>
                            <p class="sub-header">
                                Use a classes <code>.btn-soft-**</code> to quickly create buttons with soft background.
                            </p>

                            <div class="button-list">
                                <button type="button" class="btn btn-soft-primary waves-effect waves-light">Primary</button>
                                <button type="button" class="btn btn-soft-success waves-effect waves-light">Success</button>
                                <button type="button" class="btn btn-soft-info waves-effect waves-light">Info</button>
                                <button type="button" class="btn btn-soft-warning waves-effect waves-light">Warning</button>
                                <button type="button" class="btn btn-soft-danger waves-effect waves-light">Danger</button>
                                <button type="button" class="btn btn-soft-dark waves-effect waves-light">Dark</button>
                                <button type="button" class="btn btn-soft-blue waves-effect waves-light">Blue</button>
                                <button type="button" class="btn btn-soft-pink waves-effect waves-light">Pink</button>
                                <button type="button" class="btn btn-soft-secondary waves-effect">Secondary</button>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-xl-6 mt-xl-0 mt-3">
                            <h4 class="header-title">Soft Rounded Button</h4>
                            <p class="sub-header">
                                Add <code>.btn-rounded</code> to default button to get rounded corners.
                            </p>

                            <div class="button-list">
                                <button type="button" class="btn btn-soft-primary btn-rounded waves-effect waves-light">Primary</button>
                                <button type="button" class="btn btn-soft-success btn-rounded waves-effect waves-light">Success</button>
                                <button type="button" class="btn btn-soft-info btn-rounded waves-effect waves-light">Info</button>
                                <button type="button" class="btn btn-soft-warning btn-rounded waves-effect waves-light">Warning</button>
                                <button type="button" class="btn btn-soft-danger btn-rounded waves-effect waves-light">Danger</button>
                                <button type="button" class="btn btn-soft-dark btn-rounded waves-effect waves-light">Dark</button>
                                <button type="button" class="btn btn-soft-blue btn-rounded waves-effect waves-light">Blue</button>
                                <button type="button" class="btn btn-soft-pink btn-rounded waves-effect waves-light">Pink</button>
                                <button type="button" class="btn btn-soft-secondary btn-rounded waves-effect">Secondary</button>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div> <!-- end card-box-->
            </div> <!-- end col -->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-xl-6">
                            <h4 class="header-title">Buttons Labels</h4>
                            <p class="sub-header">
                                Put <code>&lt;span&gt;</code> with class <code>.btn-label</code> and any <code>icon</code> inside it. If you want to
                                put icon on right side then add class <code>.btn-label-right</code> in <code>&lt;span&gt;</code>
                            </p>

                            <div class="button-list">
                                <button type="button" class="btn btn-success waves-effect waves-light">
                                    <span class="btn-label"><i class="mdi mdi-check-all"></i></span>Success
                                </button>
                                <button type="button" class="btn btn-danger waves-effect waves-light">
                                    <span class="btn-label"><i class="mdi mdi-close-circle-outline"></i></span>Danger
                                </button>
                                <button type="button" class="btn btn-info waves-effect waves-light">
                                    <span class="btn-label"><i class="mdi mdi-alert-circle-outline"></i></span>Info
                                </button>
                                <button type="button" class="btn btn-warning waves-effect waves-light">
                                    <span class="btn-label"><i class="mdi mdi-alert"></i></span>Warning
                                </button>
                            </div>
                            <br/>
                            <div class="button-list">
                                <button type="button" class="btn btn-success waves-effect waves-light">
                                    Success<span class="btn-label-right"><i class="mdi mdi-check-all"></i></span>
                                </button>
                                <button type="button" class="btn btn-danger waves-effect waves-light">
                                    Danger<span class="btn-label-right"><i class="mdi mdi-close-circle-outline"></i></span>
                                </button>
                                <button type="button" class="btn btn-info waves-effect waves-light">
                                    Info<span class="btn-label-right"><i class="mdi mdi-alert-circle-outline"></i></span>
                                </button>
                                <button type="button" class="btn btn-warning waves-effect waves-light">
                                    Warning<span class="btn-label-right"><i class="mdi mdi-alert"></i></span>
                                </button>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-xl-6 mt-xl-0 mt-3">
                            <h4 class="header-title">Outline Rounded Button</h4>
                            <p class="sub-header">
                                Add <code>.btn-rounded</code> to default button to get rounded corners.
                            </p>

                            <div class="button-list">
                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light">
                                    <span class="btn-label"><i class="mdi mdi-check-all"></i></span>Success
                                </button>
                                <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">
                                    <span class="btn-label"><i class="mdi mdi-close-circle-outline"></i></span>Danger
                                </button>
                                <button type="button" class="btn btn-info btn-rounded waves-effect waves-light">
                                    <span class="btn-label"><i class="mdi mdi-alert-circle-outline"></i></span>Info
                                </button>
                                <button type="button" class="btn btn-warning btn-rounded waves-effect waves-light">
                                    <span class="btn-label"><i class="mdi mdi-alert"></i></span>Warning
                                </button>
                            </div>
                            <br/>
                            <div class="button-list">
                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light">
                                    Success<span class="btn-label-right"><i class="mdi mdi-check-all"></i></span>
                                </button>
                                <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">
                                    Danger<span class="btn-label-right"><i class="mdi mdi-close-circle-outline"></i></span>
                                </button>
                                <button type="button" class="btn btn-info btn-rounded waves-effect waves-light">
                                    Info<span class="btn-label-right"><i class="mdi mdi-alert-circle-outline"></i></span>
                                </button>
                                <button type="button" class="btn btn-warning btn-rounded waves-effect waves-light">
                                    Warning<span class="btn-label-right"><i class="mdi mdi-alert"></i></span>
                                </button>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div> <!-- end card-box-->
            </div> <!-- end col -->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-xl-4">
                            <h4 class="header-title">Button Width</h4>
                            <p class="sub-header">
                                Create buttons with minimum width by adding add <code>.width-xs</code>, <code>.width-sm</code>, <code>.width-md</code>, <code>.width-lg</code> or <code>.width-xl</code>.
                            </p>

                            <div class="button-list">
                                <button type="button" class="btn btn-primary width-xs waves-effect waves-light">xs</button>
                                <button type="button" class="btn btn-success width-sm waves-effect waves-light">Small</button>
                                <button type="button" class="btn btn-info width-md waves-effect waves-light">Middle</button>
                                <button type="button" class="btn btn-warning width-lg waves-effect waves-light">Large</button>
                                <button type="button" class="btn btn-danger width-xl waves-effect waves-light">Extra Large</button>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-xl-4 mt-xl-0 mt-3">
                            <h4 class="header-title">Button Sizes</h4>
                            <p class="sub-header">
                                Add <code>.btn-lg</code>, <code>.btn-sm</code>, or <code>.btn-xs</code> for additional sizes.
                            </p>

                            <div class="button-list">
                                <button type="button" class="btn btn-pink btn-lg waves-effect waves-light">Btn Large</button>
                                <button type="button" class="btn btn-secondary waves-effect waves-light">Btn Normal</button>
                                <button type="button" class="btn btn-blue btn-sm waves-effect waves-light">Btn Small</button>
                                <button type="button" class="btn btn-warning btn-xs waves-effect waves-light">Btn Xs</button>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-xl-4 mt-xl-0 mt-3">
                            <h4 class="header-title">Button Disabled</h4>
                            <p class="sub-header">
                                Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.
                            </p>

                            <div class="button-list">
                                <button type="button" class="btn btn-primary disabled">Primary</button>
                                <button type="button" class="btn btn-success disabled">Success</button>
                                <button type="button" class="btn btn-info disabled">Info</button>
                                <button type="button" class="btn btn-warning disabled">Warning</button>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div> <!-- end card-box-->
            </div> <!-- end col -->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-xl-6">
                            <h4 class="header-title">Icons Buttons</h4>
                            <p class="sub-header">
                                Icon only button.
                            </p>

                            <div class="button-list">
                                <button type="button" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-heart-half-full"></i></button>
                                <button type="button" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></button>
                                <button type="button" class="btn btn-info waves-effect waves-light"><i class="mdi mdi-music"></i></button>
                                <button type="button" class="btn btn-warning waves-effect waves-light"><i class="mdi mdi-star"></i></button>
                                <button type="button" class="btn btn-blue waves-effect waves-light"><i class="mdi mdi-cog"></i></button>
                            </div>
                            <br/>
                            <div class="button-list">
                                <button type="button" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-heart mr-1"></i> Like</button>
                                <button type="button" class="btn btn-dark waves-effect waves-light"><i class="mdi mdi-email-outline mr-1"></i> Share</button>
                                <button type="button" class="btn btn-info waves-effect waves-light"><i class="mdi mdi-cloud-outline mr-1"></i> Cloud Hosting</button>
                                <button type="button" class="btn btn-warning waves-effect waves-light">Donate <i class="mdi mdi-currency-btc ml-1"></i></button>
                            </div>

                            <h4 class="header-title mt-4">Block Buttons</h4>
                            <p class="sub-header">
                                Create block level buttons,with by adding add <code>.btn-block</code>.
                            </p>

                            <div class="button-list pr-xl-4">
                                <button type="button" class="btn btn-block btn-lg btn-primary waves-effect waves-light">Block Button</button>
                                <button type="button" class="btn btn-block btn--md btn-pink waves-effect waves-light">Block Button</button>
                                <button type="button" class="btn btn-block btn-sm btn-success waves-effect waves-light">Block Button</button>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-xl-6 mt-xl-0 mt-3">
                            <h4 class="header-title">Button Group</h4>
                            <p class="sub-header">
                                Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.
                            </p>

                            <div class="btn-group mb-2">
                                <button type="button" class="btn btn-light">Left</button>
                                <button type="button" class="btn btn-light">Middle</button>
                                <button type="button" class="btn btn-light">Right</button>
                            </div>

                            <br>

                            <div class="btn-group mb-2">
                                <button type="button" class="btn btn-light">1</button>
                                <button type="button" class="btn btn-light">2</button>
                                <button type="button" class="btn btn-light">3</button>
                                <button type="button" class="btn btn-light">4</button>
                            </div>

                            <div class="btn-group mb-2">
                                <button type="button" class="btn btn-light">5</button>
                                <button type="button" class="btn btn-light">6</button>
                                <button type="button" class="btn btn-light">7</button>
                            </div>

                            <div class="btn-group mb-2">
                                <button type="button" class="btn btn-light">8</button>
                            </div>

                            <br>

                            <div class="btn-group mb-2">
                                <button type="button" class="btn btn-light">1</button>
                                <button type="button" class="btn btn-primary">2</button>
                                <button type="button" class="btn btn-light">3</button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Dropdown <i class="mdi mdi-chevron-down"></i> </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="btn-group-vertical mb-2">
                                        <button type="button" class="btn btn-light">Top</button>
                                        <button type="button" class="btn btn-light">Middle</button>
                                        <button type="button" class="btn btn-light">Bottom</button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="btn-group-vertical mb-2">
                                        <button type="button" class="btn btn-light">Button 1</button>
                                        <button type="button" class="btn btn-light">Button 2</button>
                                        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Button 3 <i class="mdi mdi-chevron-down"></i> </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div> <!-- end card-box-->
            </div> <!-- end col -->
        </div>
        <!-- end row-->
        
    </div> <!-- container -->    
@endsection