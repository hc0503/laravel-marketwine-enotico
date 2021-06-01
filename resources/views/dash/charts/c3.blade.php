@extends('layouts.vertical', ['title' => 'C3 Charts'])

@section('css')
    <!-- Plugins css -->
    <link href="{{asset('assets/libs/c3/c3.min.css')}}" rel="stylesheet" type="text/css" />
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
                            <li class="breadcrumb-item active">C3</li>
                        </ol>
                    </div>
                    <h4 class="page-title">C3 Charts</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Bar Chart</h4>

                    <div id="chart" style="height: 300px;" data-colors="#dcdcdc,#4a81d4,#1abc9c" dir="ltr"></div>
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Stacked Area Chart</h4>

                    <div id="chart-stacked" style="height: 300px;" data-colors="#1abc9c,#4a81d4" dir="ltr"></div>
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- End row -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Roated Chart</h4>

                    <div id="roated-chart" style="height: 300px;" data-colors="#1abc9c,#4a81d4" dir="ltr"></div>
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Combine Chart</h4>

                    <div id="combine-chart" style="height: 300px;" data-colors="#dcdcdc,#4a81d4,#36404a,#fb6d9d,#1abc9c" dir="ltr"></div>
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- End row -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Donut Chart</h4>

                    <div id="donut-chart" style="height: 300px;" data-colors="#f4f8fb,#4a81d4,#1abc9c" dir="ltr"></div>
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Pie Chart</h4>

                    <div id="pie-chart" style="height: 300px;" data-colors="#f4f8fb,#4a81d4,#1abc9c" dir="ltr"></div>
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- End row -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Scatter Plot</h4>

                    <div id="scatter-plot" style="height: 300px;" data-colors="#4a81d4,#1abc9c,#4a81d4,#1abc9c" dir="ltr"></div>
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Line Chart with Regions</h4>

                    <div id="line-regions" style="height: 300px;" data-colors="#4a81d4,#fb6d9d" dir="ltr"></div>
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- End row -->

        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/d3/d3.min.js')}}"></script>
    <script src="{{asset('assets/libs/c3/c3.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('assets/js/pages/c3.init.js')}}"></script>
@endsection