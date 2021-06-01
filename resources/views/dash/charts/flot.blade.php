@extends('layouts.vertical', ['title' => 'Flot Charts'])

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
                            <li class="breadcrumb-item active">Flot</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Flot Charts</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Multiple Statistics</h4>

                    <div id="website-stats" style="height: 350px;" class="flot-chart mt-5" data-colors="#4fc6e1,#6658dd"></div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Line Chart</h4>

                    <div id="website-stats1" style="height: 350px;" class="flot-chart mt-5" data-colors="#6658dd,#f1556c"></div>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Donut Pie</h4>

                    <div id="donut-chart" class="flot-chart mt-5" data-colors="#4a81d4,#f672a7,#f7b84b,#4fc6e1,#1abc9c" style="height: 350px;">
                    </div> <!-- end card-box -->
                </div> <!-- end col -->
            </div>
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Realtime Statistics</h4>

                    <div id="flotRealTime" style="height: 350px;" data-colors="#4a81d4" class="flot-chart mt-5"></div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Line Chart</h4>

                    <div id="line-chart-alt" class="mt-5" data-colors="#6c757d,#f1556c" style="height:350px;">
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Combine Chart</h4>

                    <div id="combine-chart" data-colors="#e3eaef,#f1556c,#1abc9c" class="flot-chart mt-5" style="height: 350px;">
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Stacked Bar chart</h4>

                    <div id="ordered-bars-chart" style="height: 350px;" class="mt-5" data-colors="#4fc6e1,#f7b84b,#4a81d4"></div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Pie Chart</h4>

                    <div id="pie-chart" class="flot-chart mt-5" data-colors="#4a81d4,#f672a7,#f7b84b,#4fc6e1,#1abc9c" style="height: 350px;">
                        
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/flot-charts/flot-charts.min.js')}}"></script>
    <script src="{{asset('assets/libs/jquery.flot.tooltip/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('assets/libs/flot-orderbars/flot-orderbars.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('assets/js/pages/flot.init.js')}}"></script>
@endsection