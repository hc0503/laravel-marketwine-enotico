@extends('layouts.vertical', ['title' => 'Mapeal Maps'])

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
                            <li class="breadcrumb-item active">Mapeal</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Mapeal Maps</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 


        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title mb-3">Map with a legend where slices are specified with a fixed value instead of min and max values</h4>
                    <div class="row justify-content-center" dir="ltr">
                        <div class="col-md-6">
                            <div class="map-usa">
                                <div class="map">
                                    <span>Alternative content for the map</span>
                                </div>
                                <div class="plotLegend">
                                    <span>Alternative content for the legend</span>
                                </div>
                            </div>
                        </div> <!-- end col-->
                    </div> <!-- end row-->
                </div> <!-- end card-box-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title mb-3">Map with links between the plotted cities</h4>
                    <div class="mapcontainer">
                        <div class="map">
                            <span>Alternative content for the map</span>
                        </div>
                    </div>
                </div> <!-- end card-box-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->
        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('assets/libs/jquery-mapael/jquery-mapael.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('assets/js/pages/mapeal-maps.init.js')}}"></script>
@endsection