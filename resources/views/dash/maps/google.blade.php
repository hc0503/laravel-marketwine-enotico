@extends('layouts.vertical', ['title' => 'Google Maps'])

@section('css')
    <!-- Plugins css -->
    <link href="{{asset('assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Maps</a></li>
                            <li class="breadcrumb-item active">Google</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Google Maps</h4>
                </div>
            </div>
        </div>     
        <!-- end page title -->
        
        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Basic</h4>

                    <div id="gmaps-basic" class="gmaps"></div>
                </div> <!-- end card-box-->
            </div> <!-- end col-->

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Markers</h4>

                    <div id="gmaps-markers" class="gmaps"></div>
                </div> <!-- end card-box-->
            </div> <!-- end col-->
        </div> <!-- end row -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Ultra Light</h4>

                    <div id="ultra-light" class="gmaps"></div>
                </div> <!-- end card-box-->
            </div> <!-- end col-->

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Dark</h4>

                    <div id="dark" class="gmaps"></div>
                </div> <!-- end card-box-->
            </div> <!-- end col-->
        </div> <!-- end row -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Polygons</h4>

                    <div id="gmaps-polygons" class="gmaps"></div>
                </div> <!-- end card-box-->
            </div> <!-- end col-->

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Overlays</h4>

                    <div id="gmaps-overlay" class="gmaps"></div>
                </div> <!-- end card-box-->
            </div> <!-- end col-->
        </div> <!-- end row-->


        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Street View Panoramas</h4>

                    <div id="panorama" class="gmaps-panaroma"></div>
                </div> <!-- end card-box-->
            </div> <!-- end col-->

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Routes</h4>

                    <div id="gmaps-route" class="gmaps"></div>
                </div> <!-- end card-box-->
            </div> <!-- end col-->
        </div> <!-- end row-->


        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Map Types</h4>

                    <div id="gmaps-types" class="gmaps"></div>
                </div> <!-- end card-box-->
            </div> <!-- end col-->

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Context menu (right click on map)</h4>

                    <div id="gmaps-menu" class="gmaps"></div>
                </div> <!-- end card-box-->
            </div> <!-- end col-->
        </div> <!-- end row-->
        
    </div> <!-- container -->    
@endsection

@section('script')
    <!-- google maps api -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyDsucrEdmswqYrw0f6ej3bf4M4suDeRgNA"></script>

    <!-- Plugins js-->
    <script src="{{asset('assets/libs/gmaps/gmaps.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('assets/js/pages/google-maps.init.js')}}"></script>
@endsection