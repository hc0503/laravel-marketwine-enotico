@extends('layouts.vertical', ['title' => 'Apexcharts'])

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
                            <li class="breadcrumb-item active">Apex Charts</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Apex Charts</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Sparkline Charts</h4>

                        <div id="cardCollpase1" class="collapse pt-3 show" dir="ltr">
                            <div class="row">
                                <div class="col-md-4">
                                    <div id="spark1" class="apex-charts" data-colors="#6658dd"></div>
                                </div>
                                <div class="col-md-4">
                                    <div id="spark2" class="apex-charts" data-colors="#DCE6EC"></div>
                                </div>
                                <div class="col-md-4">
                                    <div id="spark3" class="apex-charts" data-colors="#f672a7"></div>
                                </div>
                            </div> 
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Line with Data Labels</h4>

                        <div id="cardCollpase2" class="collapse pt-3 show" dir="ltr">
                            <div id="apex-line-1" class="apex-charts" data-colors="#6658dd,#1abc9c"></div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-6">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Gradient Line Chart</h4>

                        <div id="cardCollpase3" class="collapse pt-3 show" dir="ltr">
                            <div id="apex-line-2" class="apex-charts" data-colors="#f672a7"></div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-6">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase4" role="button" aria-expanded="false" aria-controls="cardCollpase4"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Stacked Area</h4>

                        <div id="cardCollpase4" class="collapse pt-3 show" dir="ltr">
                            <div id="apex-area" class="apex-charts" data-colors="#6658dd,#f7b84b,#CED4DC"></div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase5" role="button" aria-expanded="false" aria-controls="cardCollpase5"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Basic Column Chart</h4>

                        <div id="cardCollpase5" class="collapse pt-3 show" dir="ltr">
                            <div id="apex-column-1" class="apex-charts" data-colors="#6658dd,#1abc9c,#CED4DC"></div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-xl-6">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase6" role="button" aria-expanded="false" aria-controls="cardCollpase6"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Column Chart with Datalabels</h4>

                        <div id="cardCollpase6" class="collapse pt-3 show" dir="ltr">
                            <div id="apex-column-2" class="apex-charts" data-colors="#6658dd"></div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase7" role="button" aria-expanded="false" aria-controls="cardCollpase7"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Mixed Chart - Line & Area</h4>

                        <div id="cardCollpase7" class="collapse pt-3 show" dir="ltr">
                            <div id="apex-mixed-1" class="apex-charts" data-colors="#CED4DC,#6658dd"></div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-6">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase8" role="button" aria-expanded="false" aria-controls="cardCollpase8"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Basic Bar Chart</h4>

                        <div id="cardCollpase8" class="collapse pt-3 show" dir="ltr">
                            <div id="apex-bar-1" class="apex-charts" data-colors="#1abc9c"></div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase9" role="button" aria-expanded="false" aria-controls="cardCollpase9"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Bar with Negative Values</h4>

                        <div id="cardCollpase9" class="collapse pt-3 show" dir="ltr">
                            <div id="apex-bar-2" class="apex-charts" data-colors="#6658dd,#1abc9c"></div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-6">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase10" role="button" aria-expanded="false" aria-controls="cardCollpase10"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Line, Column & Area Chart</h4>

                        <div id="cardCollpase10" class="collapse pt-3 show" dir="ltr">
                            <div id="apex-mixed-2" class="apex-charts" data-colors="#6658dd,#1abc9c,#f672a7"></div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase11" role="button" aria-expanded="false" aria-controls="cardCollpase11"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Multiple Y-Axis Chart</h4>

                        <div id="cardCollpase11" class="collapse pt-3 show" dir="ltr">
                            <div id="apex-mixed-3" class="apex-charts" data-colors="#6658dd,#ebf2f6,#f672a7"></div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-6">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase12" role="button" aria-expanded="false" aria-controls="cardCollpase12"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Simple Bubble Chart</h4>

                        <div id="cardCollpase12" class="collapse pt-3 show" dir="ltr">
                            <div id="apex-bubble-1" class="apex-charts" data-colors="#6658dd,#1abc9c,#f672a7"></div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase13" role="button" aria-expanded="false" aria-controls="cardCollpase13"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">3D Bubble Chart</h4>

                        <div id="cardCollpase13" class="collapse pt-3 show" dir="ltr">
                            <div id="apex-bubble-2" class="apex-charts" data-colors="#6658dd,#1abc9c,#f672a7,#6c757d"></div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-6">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase14" role="button" aria-expanded="false" aria-controls="cardCollpase14"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Scatter (XY) Chart</h4>

                        <div id="cardCollpase14" class="collapse pt-3 show" dir="ltr">
                            <div id="apex-scatter-1" class="apex-charts" data-colors="#1abc9c,#f672a7,#6c757d"></div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase15" role="button" aria-expanded="false" aria-controls="cardCollpase15"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Scatter Chart - Datetime</h4>

                        <div id="cardCollpase15" class="collapse pt-3 show" dir="ltr">
                            <div id="apex-scatter-2" class="apex-charts" data-colors="#1abc9c,#f672a7,#6c757d,#6658dd,#6559cc"></div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-6">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase16" role="button" aria-expanded="false" aria-controls="cardCollpase16"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Simple Candlestick Chart</h4>

                        <div id="cardCollpase16" class="collapse pt-3 show" dir="ltr">
                            <div id="apex-candlestick-1" class="apex-charts" data-colors="#6658dd,#1abc9c"></div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase17" role="button" aria-expanded="false" aria-controls="cardCollpase17"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Combo Candlestick Chart</h4>

                        <div id="cardCollpase17" class="collapse pt-3 show" dir="ltr">
                            <div id="apex-candlestick-2" class="apex-charts" data-colors="#6658dd,#f7b84b"></div>
                            <div id="apex-candlestick-3" class="apex-charts" data-colors="#f45454,#37cde6"></div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
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
                            <a data-toggle="collapse" href="#cardCollpase18" role="button" aria-expanded="false" aria-controls="cardCollpase18"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Simple Pie Chart</h4>

                        <div id="cardCollpase18" class="collapse pt-3 show" dir="ltr">
                            <div id="apex-pie-1" class="apex-charts" data-colors="#6658dd,#4fc6e1,#4a81d4,#00b19d,#f1556c"></div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-4">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase19" role="button" aria-expanded="false" aria-controls="cardCollpase19"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Gradient Donut Chart</h4>

                        <div id="cardCollpase19" class="collapse pt-3 show" dir="ltr">
                            <div id="apex-pie-2" class="apex-charts" data-colors="#6658dd,#4fc6e1,#4a81d4,#00b19d,#f1556c"></div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase20" role="button" aria-expanded="false" aria-controls="cardCollpase20"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Patterned Donut Chart</h4>

                        <div id="cardCollpase20" class="collapse pt-3 show" dir="ltr">
                            <div id="apex-pie-3" class="apex-charts" data-colors="#6658dd,#4fc6e1,#4a81d4,#00b19d,#f1556c"></div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
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
                            <a data-toggle="collapse" href="#cardCollpase21" role="button" aria-expanded="false" aria-controls="cardCollpase21"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Basic RadialBar Chart</h4>

                        <div id="cardCollpase21" class="collapse pt-3 show" dir="ltr">
                            <div id="apex-radialbar-1" class="apex-charts" data-colors="#6c757d"></div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-4">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase22" role="button" aria-expanded="false" aria-controls="cardCollpase22"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Multiple RadialBars</h4>

                        <div id="cardCollpase22" class="collapse pt-3 show" dir="ltr">
                            <div id="apex-radialbar-2" class="apex-charts" data-colors="#6658dd,#e36498,#23b397,#f7b84b"></div>
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase23" role="button" aria-expanded="false" aria-controls="cardCollpase23"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Stroked Circular Guage</h4>

                        <div id="cardCollpase23" class="collapse pt-3 show" dir="ltr">
                            <div id="apex-radialbar-3" class="apex-charts" data-colors="#f1556c"></div>
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
    <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
    <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
    <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>

    <!-- Page js-->
    <script src="{{asset('assets/js/pages/apexcharts.init.js')}}"></script>
@endsection