@extends('layouts.vertical', ['title' => 'Chartist Charts'])

@section('css')
    <!-- Plugins css -->
    <link href="{{asset('assets/libs/chartist/chartist.min.css')}}" rel="stylesheet" type="text/css" />

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
                            <li class="breadcrumb-item active">Chartist</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Chartist Charts</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 


        <div class="row">
            <div class="col-lg-6">
                <div class="card-box" dir="ltr">
                    <h4 class="header-title">Advanced Smil Animations</h4>
                    <p class="sub-header">
                        Example of Horizontal bar chart.
                    </p>

                    <div id="smil-animations" class="ct-chart ct-golden-section"></div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card-box" dir="ltr">
                    <h4 class="header-title">Simple line chart</h4>
                    <p class="sub-header">
                        Example of Horizontal bar chart.
                    </p>

                    <div id="simple-line-chart" class="ct-chart ct-golden-section"></div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card-box" dir="ltr">
                    <h4 class="header-title">Line Scatter Diagram</h4>
                    <p class="sub-header">
                        Example of Horizontal bar chart.
                    </p>

                    <div id="scatter-diagram" class="ct-chart ct-golden-section"></div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card-box" dir="ltr">
                    <h4 class="header-title">Line chart with tooltips</h4>
                    <p class="sub-header">
                        Example of Horizontal bar chart.
                    </p>

                    <div id="line-chart-tooltips" class="ct-chart ct-golden-section"></div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card-box" dir="ltr">
                    <h4 class="header-title">Line chart with area</h4>
                    <p class="sub-header">
                        Example of Horizontal bar chart.
                    </p>

                    <div id="chart-with-area" class="ct-chart ct-golden-section"></div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card-box" dir="ltr">
                    <h4 class="header-title">Bi-polar Line chart with area only</h4>
                    <p class="sub-header">
                        Example of Horizontal bar chart.
                    </p>

                    <div id="bi-polar-line" class="ct-chart ct-golden-section"></div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card-box" dir="ltr">
                    <h4 class="header-title">SVG Path animation</h4>
                    <p class="sub-header">
                        Example of Horizontal bar chart.
                    </p>

                    <div id="svg-animation" class="ct-chart ct-golden-section"></div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card-box" dir="ltr">
                    <h4 class="header-title">Line Interpolation / Smoothing</h4>
                    <p class="sub-header">
                        Example of Horizontal bar chart.
                    </p>

                    <div id="line-smoothing" class="ct-chart ct-golden-section"></div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card-box" dir="ltr">
                    <h4 class="header-title">Different configuration for different series</h4>
                    <p class="sub-header">
                        Example of Horizontal bar chart.
                    </p>

                    <div id="different-series" class="ct-chart ct-golden-section"></div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card-box" dir="ltr">
                    <h4 class="header-title">SVG Animations chart</h4>
                    <p class="sub-header">
                        Example of Label placement chart.
                    </p>

                    <div id="svg-dot-animation" class="ct-chart ct-golden-section"></div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card-box" dir="ltr">
                    <h4 class="header-title">Bi-polar bar chart</h4>
                    <p class="sub-header">
                        Example of Horizontal bar chart.
                    </p>

                    <div id="bi-polar-bar" class="ct-chart ct-golden-section"></div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card-box" dir="ltr">
                    <h4 class="header-title">Overlapping bars on mobile</h4>
                    <p class="sub-header">
                        Example of Horizontal bar chart.
                    </p>

                    <div id="overlapping-bars" class="ct-chart ct-golden-section"></div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card-box" dir="ltr">
                    <h4 class="header-title">Multi-line labels</h4>
                    <p class="sub-header">
                        Example of Horizontal bar chart.
                    </p>

                    <div id="multi-line-chart" class="ct-chart ct-golden-section"></div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card-box" dir="ltr">
                    <h4 class="header-title">Stacked bar chart</h4>
                    <p class="sub-header">
                        Example of Horizontal bar chart.
                    </p>

                    <div id="stacked-bar-chart" class="ct-chart ct-golden-section"></div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card-box" dir="ltr">
                    <h4 class="header-title">Horizontal bar chart</h4>
                    <p class="sub-header">
                        Example of Horizontal bar chart.
                    </p>

                    <div id="horizontal-bar-chart" class="ct-chart ct-golden-section"></div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card-box" dir="ltr">
                    <h4 class="header-title">Extreme responsive configuration</h4>
                    <p class="sub-header">
                        Example of Horizontal bar chart.
                    </p>

                    <div id="extreme-chart" class="ct-chart ct-golden-section"></div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card-box" dir="ltr">
                    <h4 class="header-title">Distributed series</h4>
                    <p class="sub-header">
                        Example of Horizontal bar chart.
                    </p>

                    <div id="distributed-series" class="ct-chart ct-golden-section"></div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card-box" dir="ltr">
                    <h4 class="header-title">Label placement</h4>
                    <p class="sub-header">
                        Example of Label placement chart.
                    </p>

                    <div id="label-placement-chart" class="ct-chart ct-golden-section"></div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card-box" dir="ltr">
                    <h4 class="header-title">Animating a Donut with Svg.animate</h4>
                    <p class="sub-header">
                        Example of Horizontal bar chart.
                    </p>

                    <div id="animating-donut" class="ct-chart ct-golden-section"></div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card-box" dir="ltr">
                    <h4 class="header-title">Simple pie chart</h4>
                    <p class="sub-header">
                        Example of Label placement chart.
                    </p>

                    <div id="simple-pie" class="ct-chart ct-golden-section simple-pie-chart-chartist"></div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card-box" dir="ltr">
                    <h4 class="header-title">Pie chart with custom labels</h4>
                    <p class="sub-header">
                        Example of Horizontal bar chart.
                    </p>

                    <div id="pie-chart" class="ct-chart ct-golden-section"></div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card-box" dir="ltr">
                    <h4 class="header-title">Gauge chart</h4>
                    <p class="sub-header">
                        Example of Label placement chart.
                    </p>

                    <div id="gauge-chart" class="ct-chart ct-golden-section"></div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/chartist/chartist.min.js')}}"></script>
    <script src="{{asset('assets/libs/chartist-plugin-tooltips/chartist-plugin-tooltips.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('assets/js/pages/chartist.init.js')}}"></script>
@endsection