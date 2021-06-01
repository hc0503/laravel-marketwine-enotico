@extends('layouts.vertical', ['title' => 'Sparklines Charts'])

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
                            <li class="breadcrumb-item active">Sparklines</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Sparklines</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card-box">
                    <h4 class="header-title">Line Charts</h4>

                    <div class="mt-4">
                        <div id="sparkline1" data-colors="#6658dd,#1abc9c"></div>
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->

            <div class="col-md-6 col-lg-4">
                <div class="card-box">
                    <h4 class="header-title">Bar Chart</h4>

                    <div class="mt-4">
                        <div id="sparkline2" data-colors="#4a81d4" class="text-center"></div>
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->

            <div class="col-md-6 col-lg-4">
                <div class="card-box">
                    <h4 class="header-title">Pie Chart</h4>

                    <div class="mt-4">
                        <div id="sparkline3" data-colors="#4fc6e1,#f7b84b,#e3eaef,#f1556c" class="text-center"></div>
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->

            <div class="col-md-6 col-lg-4">
                <div class="card-box">
                    <h4 class="header-title">Custom Line Chart</h4>

                    <div class="mt-4">
                        <div id="sparkline4" data-colors="#2d7bf4,#4eb7eb" class="text-center"></div>
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->

            <div class="col-md-6 col-lg-4">
                <div class="card-box">
                    <h4 class="header-title">Mouse Speed Chart</h4>

                    <div class="mt-4">
                        <div id="sparkline5" data-colors="#f1556c" class="text-center"></div>
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->

            <div class="col-md-6 col-lg-4">
                <div class="card-box">
                    <h4 class="header-title">Composite bar Chart</h4>

                    <div class="text-center mt-4">
                        <div id="sparkline6" data-colors="#e3eaef,#6c757d" class="text-center"></div>
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->

            <div class="col-md-6 col-lg-4">
                <div class="card-box">
                    <h4 class="header-title">Discrete Chart</h4>

                    <div class="text-center mt-4">
                        <div id="sparkline7" data-colors="#4a545e" class="text-center"></div>
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->

            <div class="col-md-6 col-lg-4">
                <div class="card-box">
                    <h4 class="header-title">Bullet Chart</h4>

                    <div class="text-center mt-4" style="min-height: 164px;">
                        <div id="sparkline8" data-colors="#64c5b1,#5553ce" class="text-center"></div>
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->

            <div class="col-md-6 col-lg-4">
                <div class="card-box">
                    <h4 class="header-title">Box Plot Chart</h4>

                    <div class="text-center mt-4" style="min-height: 164px;">
                        <div id="sparkline9" data-colors="#6658dd,#1abc9c" class="text-center"></div>
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->

            <div class="col-md-6 col-lg-4">
                <div class="card-box">
                    <h4 class="header-title">Tristate Charts</h4>

                    <div class="text-center mt-4" style="min-height: 164px;">
                        <div id="sparkline10" data-colors="#0acf97,#e3eaef,#ff679b" class="text-center"></div>
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->

        </div>
        <!-- end row -->
        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/jquery-sparkline/jquery-sparkline.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('assets/js/pages/sparkline.init.js')}}"></script>
@endsection