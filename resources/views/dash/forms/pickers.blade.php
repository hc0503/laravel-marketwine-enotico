@extends('layouts.vertical', ['title' => 'Pickers'])

@section('css')
    <!-- Plugins css -->
    <link href="{{asset('assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/clockpicker/clockpicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Pickers</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Form Pickers</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Flatpickr - Date picker</h4>
                    <p class="sub-header">A lightweight and powerful datetimepicker</p>

                    <div class="form-group mb-3">
                        <label>Basic</label>
                        <input type="text" id="basic-datepicker" class="form-control" placeholder="Basic datepicker">
                    </div>

                    <div class="form-group mb-3">
                        <label>Date & Time</label>
                        <input type="text" id="datetime-datepicker" class="form-control" placeholder="Date and Time">
                    </div>

                    <div class="form-group mb-3">
                        <label>Human-friendly Dates</label>
                        <input type="text" id="humanfd-datepicker" class="form-control" placeholder="October 9, 2018">
                    </div>

                    <div class="form-group mb-3">
                        <label>MinDate and MaxDate</label>
                        <input type="text" id="minmax-datepicker" class="form-control" placeholder="mindate - maxdate">
                    </div>

                    <div class="form-group mb-3">
                        <label>Disabling dates</label>
                        <input type="text" id="disable-datepicker" class="form-control" placeholder="Disabling dates">
                    </div>

                    <div class="form-group mb-3">
                        <label>Selecting multiple dates</label>
                        <input type="text" id="multiple-datepicker" class="form-control" placeholder="Multiple dates">
                    </div>

                    <div class="form-group mb-3">
                        <label>Selecting multiple dates - Conjunction</label>
                        <input type="text" id="conjunction-datepicker" class="form-control" placeholder="2018-10-10 :: 2018-10-11">
                    </div>

                    <div class="form-group mb-3">
                        <label>Range Calendar</label>
                        <input type="text" id="range-datepicker" class="form-control" placeholder="2018-10-03 to 2018-10-10">
                    </div>

                    <div class="form-group mb-0">
                        <label>Inline Calendar</label>
                        <input type="text" id="inline-datepicker" class="form-control" placeholder="Inline calendar">
                    </div>

                </div> <!-- end card-box-->
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Flatpickr - Time Picker</h4>
                    <p class="sub-header">A lightweight and powerful datetimepicker</p>

                    <div class="form-group mb-3">
                        <label>Basic</label>
                        <input type="text" id="basic-timepicker" class="form-control" placeholder="Basic timepicker">
                    </div>

                    <div class="form-group mb-3">
                        <label>24-hour Time Picker</label>
                        <input type="text" id="24hours-timepicker" class="form-control" placeholder="16:21">
                    </div>

                    <div class="form-group mb-3">
                        <label>Time Picker w/ Limits</label>
                        <input type="text" id="minmax-timepicker" class="form-control" placeholder="Limits">
                    </div>

                    <div class="form-group mb-0">
                        <label>Preloading Time</label>
                        <input type="text" id="preloading-timepicker" class="form-control" placeholder="Pick a time">
                    </div>

                </div> <!-- end card-box-->


                <div class="card-box">
                    <h4 class="header-title">Colorpicker</h4>
                    <p class="sub-header">Bootstrap Colorpicker is a modular color picker plugin for Bootstrap 4</p>

                    <div class="form-group mb-3">
                        <label>Default</label>
                        <input type="text" id="basic-colorpicker" class="form-control" placeholder="Basic colorpicker">
                    </div>

                    <div class="form-group mb-3">
                        <label>Hexa Color</label>
                        <input type="text" id="hexa-colorpicker" class="form-control" value="#4a81d4">
                    </div>

                    <div class="form-group mb-3">
                        <label>As Component</label>
                        <div id="component-colorpicker" class="input-group" title="Using format option">
                            <input type="text" class="form-control input-lg" value="#305AA2"/>
                            <span class="input-group-append">
                                <span class="input-group-text colorpicker-input-addon"><i></i></span>
                            </span>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label>Horizontal</label>
                        <input type="text" id="horizontal-colorpicker" class="form-control" value="#8fff00">
                    </div>

                    <div class="form-group mb-0">
                        <label>Inline</label>
                        <div id="inline-colorpicker"></div>
                    </div>

                </div> <!-- end card-box-->

            </div> <!-- end col -->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title">Clock Picker</h4>
                    <p class="sub-header">A clock-style timepicker for Bootstrap.</p>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Default Clock Picker</label>
                                <div class="input-group clockpicker">
                                    <input type="text" class="form-control" value="09:30">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-0">
                                <label>Auto close</label>
                                <div class="input-group clockpicker" data-placement="top" data-align="top" data-autoclose="true">
                                    <input type="text" class="form-control" value="13:14">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col-->
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Now time</label>
                                <div class="input-group m-b-20">
                                    <input class="form-control" id="single-input" type="text" value="" placeholder="Now">
                                    <div class="input-group-append">
                                        <button type="button" id="check-minutes" class="btn waves-effect waves-light btn-primary">Check the minutes</button>
                                    </div>
                                </div>                
                            </div>

                            <div class="form-group mb-0">
                                <label>Place at left, align the arrow to top </label>
                                <div class="input-group clockpicker" data-placement="top" data-align="top">
                                    <input type="text" class="form-control" value="13:14">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col-->
                    </div> <!-- end row-->
                </div> <!-- end card-box-->
            </div> <!-- end col -->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Bootstrap Datepicker</h4>
                        <p class="text-muted font-14">
                            Bootstrap-datepicker provides a flexible datepicker widget in the Bootstrap style.
                        </p>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label>Date Picker</label>
                                    <input type="text" class="form-control" data-provide="datepicker">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label>Date View</label>
                                    <input type="text" class="form-control" data-provide="datepicker" data-date-format="d-M-yyyy">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Multi Datepicker</label>
                                    <input type="text" class="form-control" data-provide="datepicker" data-date-multidate="true">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Autoclose</label>
                                    <input type="text" class="form-control" data-provide="datepicker" data-date-autoclose="true">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Month View</label>
                                    <input type="text" class="form-control" data-provide="datepicker" data-date-format="MM yyyy" data-date-min-view-mode="1">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Year View</label>
                                    <input type="text" class="form-control" data-provide="datepicker" data-date-min-view-mode="2">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Inline Datepicker</label>
                                    <div data-provide="datepicker-inline"></div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->    
        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{asset('assets/libs/clockpicker/clockpicker.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('assets/js/pages/form-pickers.init.js')}}"></script>
@endsection