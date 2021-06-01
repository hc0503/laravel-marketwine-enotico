@extends('layouts.vertical', ['title' => 'ION Range Slider'])

@section('css')
    <!-- Plugins css -->
    <link href="{{asset('assets/libs/ion-rangeslider/ion-rangeslider.min.css')}}" rel="stylesheet" type="text/css" />

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Extended UI</a></li>
                            <li class="breadcrumb-item active">Range Slider</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Range Slider</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title">Default</h4>
                    <p class="sub-header">
                        Start without params
                    </p>
                    <input type="text" id="range_01">
                </div> <!-- end card-box-->
            </div> <!-- end col -->

            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title">Min-Max</h4>
                    <p class="sub-header">
                        Set min value, max value and start point
                    </p>
                    <input type="text" id="range_02">
                </div> <!-- end card-box-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title">Prefix</h4>
                    <p class="sub-header">
                        Showing grid and adding prefix "$"
                    </p>
                    <input type="text" id="range_03">
                </div> <!-- end card-box-->
            </div> <!-- end col -->

            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title">Range</h4>
                    <p class="sub-header">
                        Set up range with negative values
                    </p>
                    <input type="text" id="range_04">
                </div> <!-- end card-box-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title">Step</h4>
                    <p class="sub-header">
                        Using step 250
                    </p>
                    <input type="text" id="range_05">
                </div> <!-- end card-box-->
            </div> <!-- end col -->

            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title">Custom Values</h4>
                    <p class="sub-header">
                        Using any strings as values
                    </p>
                    <input type="text" id="range_06">
                </div> <!-- end card-box-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title">Prettify Numbers</h4>
                    <p class="sub-header">
                        Prettify enabled. Much better!
                    </p>
                    <input type="text" id="range_07">
                </div> <!-- end card-box-->
            </div> <!-- end col -->

            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title">Disabled</h4>
                    <p class="sub-header">
                        Lock slider by using disable option
                    </p>
                    <input type="text" id="range_08">
                </div> <!-- end card-box-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title">Extra Example</h4>
                    <p class="sub-header">
                        Whant to show that max number is not the biggest one?
                    </p>
                    <input type="text" id="range_09">
                </div> <!-- end card-box-->
            </div> <!-- end col -->

            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title">Use decorate_both option</h4>
                    <p class="sub-header">
                        Use decorate_both option
                    </p>
                    <input type="text" id="range_10">
                </div> <!-- end card-box-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title">Postfixes</h4>
                    <p class="sub-header">
                        Using postfixes
                    </p>
                    <input type="text" id="range_11">
                </div> <!-- end card-box-->
            </div> <!-- end col -->

            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title">Hide</h4>
                    <p class="sub-header">
                        Or hide any part you wish
                    </p>
                    <input type="text" id="range_12">
                </div> <!-- end card-box-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title">Modern skin</h4>
                    <p class="sub-header">
                        Example of modern skin
                    </p>
                    <input type="text" id="range_13">
                </div> <!-- end card-box-->
            </div> <!-- end col -->

            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title">Sharp skin</h4>
                    <p class="sub-header">
                        Example of sharp skin
                    </p>
                    <input type="text" id="range_14">
                </div> <!-- end card-box-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title">Round skin</h4>
                    <p class="sub-header">
                        Example of round skin
                    </p>
                    <input type="text" id="range_15">
                </div> <!-- end card-box-->
            </div> <!-- end col -->

            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="header-title">Square skin</h4>
                    <p class="sub-header">
                        Example of square skin
                    </p>
                    <input type="text" id="range_16">
                </div> <!-- end card-box-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/ion-rangeslider/ion-rangeslider.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('assets/js/pages/range-sliders.init.js')}}"></script>
@endsection