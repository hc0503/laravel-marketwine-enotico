@extends('layouts.vertical', ['title' => 'Form Masks'])

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
                            <li class="breadcrumb-item active">Masks</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Form Masks</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Input Masks</h4>
                        <p class="sub-header">
                            A jQuery Plugin to make masks on form fields and HTML elements.
                        </p>

                        <div class="row">
                            <div class="col-md-6">
                                <form action="#">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00/00/0000">
                                        <span class="font-13 text-muted">e.g "DD/MM/YYYY"</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Hour</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00:00:00">
                                        <span class="font-13 text-muted">e.g "HH:MM:SS"</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Date & Hour</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00/00/0000 00:00:00">
                                        <span class="font-13 text-muted">e.g "DD/MM/YYYY HH:MM:SS"</span>
                                    </div>
                                    <div class="form-group">
                                        <label>ZIP Code</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00000-000">
                                        <span class="font-13 text-muted">e.g "xxxxx-xxx"</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Crazy Zip Code</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="0-00-00-00">
                                        <span class="font-13 text-muted">e.g "x-xx-xx-xx"</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Money</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="000.000.000.000.000,00" data-reverse="true">
                                        <span class="font-13 text-muted">e.g "Your money"</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Money 2</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="#.##0,00" data-reverse="true">
                                        <span class="font-13 text-muted">e.g "#.##0,00"</span>
                                    </div>

                                </form>
                            </div> <!-- end col -->

                            <div class="col-md-6">
                                <form action="#">
                                    <div class="form-group">
                                        <label>Telephone</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="0000-0000">
                                        <span class="font-13 text-muted">e.g "xxxx-xxxx"</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Telephone with Code Area</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="(00) 0000-0000">
                                        <span class="font-13 text-muted">e.g "(xx) xxxx-xxxx"</span>
                                    </div>
                                    <div class="form-group">
                                        <label>US Telephone</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="(000) 000-0000">
                                        <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                                    </div>
                                    <div class="form-group">
                                        <label>São Paulo Celphones</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="(00) 00000-0000">
                                        <span class="font-13 text-muted">e.g "(xx) xxxxx-xxxx"</span>
                                    </div>
                                    <div class="form-group">
                                        <label>CPF</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="000.000.000-00" data-reverse="true">
                                        <span class="font-13 text-muted">e.g "xxx.xxx.xxxx-xx"</span>
                                    </div>
                                    <div class="form-group">
                                        <label>CNPJ</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00.000.000/0000-00" data-reverse="true">
                                        <span class="font-13 text-muted">e.g "xx.xxx.xxx/xxxx-xx"</span>
                                    </div>
                                    <div class="form-group">
                                        <label>IP Address</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="099.099.099.099" data-reverse="true">
                                        <span class="font-13 text-muted">e.g "xxx.xxx.xxx.xxx"</span>
                                    </div>

                                </form>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Auto Numberic</h4>
                        <p class="sub-header">
                            A jQuery Plugin to make masks on form fields and HTML elements.
                        </p>

                        <div class="row">
                            <div class="col-md-6">
                                <form action="#">
                                    <div class="form-group">
                                        <label>Default</label>
                                        <input type="text" placeholder="" class="form-control autonumber" data-a-sep="." data-a-dec=",">
                                        <span class="font-13 text-muted">e.g. "1.234.567.890.123"</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Auto Numeric ($)</label>
                                        <input type="text" placeholder="" data-a-sign="$ " class="form-control autonumber">
                                        <span class="font-13 text-muted">e.g. "$ $ 1,234,567,890,123"</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Auto Numeric (€)</label>
                                        <input type="text" placeholder="" data-a-sign="€ " class="form-control autonumber">
                                        <span class="font-13 text-muted">e.g. "€ 1,234,567,890,123"</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Auto Numeric (Rs.)</label>
                                        <input type="text" placeholder="" data-a-sign="Rs. " class="form-control autonumber">
                                        <span class="font-13 text-muted">e.g. "Rs. 1,234,567,890,123"</span>
                                    </div>
                                    <div class="form-group m-b-0">
                                        <label>4 digit Group (¥)</label>
                                        <input type="text" placeholder="" data-d-group="4" data-a-sign="¥ " class="form-control autonumber">
                                        <span class="font-13 text-muted">e.g. "¥ 1,2345,6789,0123"</span>
                                    </div>

                                </form>            
                            </div> <!-- end col -->

                            <div class="col-md-6">
                                <form action="#">
                                    <div class="form-group">
                                        <label>Auto Numeric (£)</label>
                                        <input type="text" placeholder="" data-a-sign="£ " class="form-control autonumber">
                                        <span class="font-13 text-muted">e.g. "£ 1,234,567,890,123"</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Auto Numeric (%)</label>
                                        <input type="text" placeholder="" data-a-sign="%" data-p-sign="s" class="form-control autonumber">
                                        <span class="font-13 text-muted">e.g. "11%"</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Maximum Value (0 - 9999)</label>
                                        <input type="text" placeholder="" data-v-max="9999" data-v-min="0" class="form-control autonumber">
                                        <span class="font-13 text-muted">e.g. "9,999"</span>
                                    </div>

                                    <div class="form-group">
                                        <label>Range Value (-99.99 - 1000.00)</label>
                                        <input type="text" placeholder="" data-v-min="-99.99" data-v-max="1000.00" class="form-control autonumber">
                                        <span class="font-13 text-muted">e.g. "1000 Or -99.99"</span>
                                    </div>

                                    <div class="form-group m-b-0">
                                        <label>Bracket Value</label>
                                        <input type="text" placeholder="" data-a-sep="." data-a-dec="," data-v-min="-9999.99" data-v-max="0.00" data-n-bracket="(,)" class="form-control autonumber">
                                        <span class="font-13 text-muted">e.g. "(9,999.00)"</span>
                                    </div>

                                </form>        
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row --> 
        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/jquery-mask-plugin/jquery-mask-plugin.min.js')}}"></script>
    <script src="{{asset('assets/libs/autonumeric/autonumeric.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('assets/js/pages/form-masks.init.js')}}"></script>
@endsection