@extends('layouts.vertical', ['title' => 'jQuery Knob'])

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
                            <li class="breadcrumb-item active">Knob</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Jquery knob Charts</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            
            <div class="col-md-6 col-xl-3">
                <div class="card-box">
                    <div class="text-center" dir="ltr">
                        <h5>Lifetime Sales</h5>
                        <h3 class="mb-3"><i class="mdi mdi-arrow-up-bold-circle-outline text-success"></i> 549849 <small>USD</small></h3>

                        <input data-plugin="knob" data-width="150" data-height="150" data-bgColor="rgba(150, 150, 150, 0.1)"
                            data-fgColor="#188ae2" data-displayInput=false value="35"/>
                        <h6 class="text-muted mt-2">Disable display input</h6>
                    </div> <!-- end .text-center -->
                </div> <!-- end card-box -->
            </div><!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="card-box">
                    <div class="text-center" dir="ltr">
                        <h5>Income Amounts</h5>
                        <h3 class="mb-3"><i class="mdi mdi-arrow-up-bold-circle-outline text-success"></i> 64654 <small>USD</small></h3>
                        <input data-plugin="knob" data-width="150" data-height="150" data-cursor=true data-bgColor="rgba(150, 150, 150, 0.1)"
                            data-fgColor="#4bd396" value="29"  data-knob-icon="icon-dollar"/>

                        <h6 class="text-muted mt-2">Cursor mode</h6>
                    </div> <!-- end .text-center -->
                </div> <!-- end card-box -->
            </div><!-- end col-->
            
            <div class="col-md-6 col-xl-3">
                <div class="card-box">
                    <div class="text-center" dir="ltr">
                        <h5>Total visits</h5>
                        <h3 class="mb-3"><i class="mdi mdi-arrow-down-bold-circle-outline text-danger"></i> 87798 <small>USD</small></h3>
                        <input data-plugin="knob" data-width="150" data-height="150" data-min="-100" data-bgColor="rgba(150, 150, 150, 0.1)"
                            data-fgColor="#3ac9d6" data-displayPrevious=true value="44"/>
                        <h6 class="text-muted mt-2">Display previous value</h6>
                    </div> <!-- end .text-center -->
                </div> <!-- end card-box -->
            </div><!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="card-box">
                    <div class="text-center" dir="ltr">
                        <h5>You have to pay</h5>
                        <h3 class="mb-3"><i class="mdi mdi-arrow-down-bold-circle-outline text-danger"></i> 545 <small>USD</small></h3>
                        <input data-plugin="knob" data-width="150" data-height="150" data-min="-100" data-bgColor="rgba(150, 150, 150, 0.1)"
                            data-fgColor="#f9c851" data-displayPrevious=true data-angleOffset=-125
                            data-angleArc=250 value="44"/>
                        <h6 class="text-muted mt-2">Angle offset and arc</h6>
                    </div> <!-- end .text-center -->
                </div> <!-- end card-box -->
            </div><!-- end col-->

        </div><!-- end row -->

        <div class="row">

            <div class="col-md-6 col-xl-3">
                <div class="card-box">
                    <div class="text-center" dir="ltr">
                        <h5>Lifetime Sales</h5>
                        <h3 class="mb-3"><i class="mdi mdi-arrow-down-bold-circle-outline text-danger"></i> 898 <small>USD</small></h3>
                        <input data-plugin="knob" data-width="150" data-height="150" data-bgColor="rgba(150, 150, 150, 0.1)"
                            data-angleOffset="90" data-linecap="round" data-fgColor="#f5707a"
                            value="35"/>
                        <h6 class="text-muted mt-2">Angle offset</h6>
                    </div> <!-- end .text-center -->
                </div> <!-- end card-box -->
            </div><!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="card-box">
                    <div class="text-center" dir="ltr">
                        <h5>Income Amounts</h5>
                        <h3 class="mb-3"><i class="mdi mdi-arrow-up-bold-circle-outline text-success"></i> 54 <small>USD</small></h3>
                        <input data-plugin="knob" data-width="150" data-height="150" data-min="-15000" data-bgColor="rgba(150, 150, 150, 0.1)"
                            data-displayPrevious=true data-max="15000" data-step="1000"
                            value="-11000" data-fgColor="#3b3e47"/>
                        <h6 class="text-muted mt-2">5-digit values, step 1000</h6>
                    </div> <!-- end .text-center -->
                </div> <!-- end card-box -->
            </div><!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="card-box">
                    <div class="text-center" dir="ltr">
                        <h5>Lifetime Sales</h5>
                        <h3 class="mb-3"><i class="mdi mdi-arrow-up-bold-circle-outline text-success"></i> 48948 <small>USD</small></h3>
                        <input data-plugin="knob" data-width="150" data-height="150" data-linecap=round
                            data-fgColor="#6b5fb5" value="80" data-skin="tron" data-angleOffset="180" data-bgColor="rgba(150, 150, 150, 0.1)"
                            data-readOnly=true data-thickness=".1"/>
                        <h6 class="text-muted mt-2">Readonly</h6>
                    </div> <!-- end .text-center -->
                </div> <!-- end card-box -->
            </div><!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="card-box">
                    <div class="text-center" dir="ltr">
                        <h5>You have to pay</h5>
                        <h3 class="mb-3"><i class="mdi mdi-arrow-down-bold-circle-outline text-danger"></i> 4894 <small>USD</small></h3>
                        <input data-plugin="knob" data-width="150" data-height="150"
                            data-displayPrevious=true data-fgColor="#f06292" data-skin="tron"
                            data-cursor=true value="75" data-thickness=".2" data-angleOffset=-125 data-bgColor="rgba(150, 150, 150, 0.1)"
                            data-angleArc=250 />
                        <h6 class="text-muted mt-2">Angle offset and arc</h6>
                    </div> <!-- end .text-center -->
                </div> <!-- end card-box -->
            </div><!-- end col-->

        </div><!-- end row-->
        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/jquery-knob/jquery-knob.min.js')}}"></script>
@endsection