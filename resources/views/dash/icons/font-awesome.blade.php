@extends('layouts.vertical', ['title' => 'Font Awesome Icons'])

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Icons</a></li>
                            <li class="breadcrumb-item active">Font Awesome</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Font Awesome Icons</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Solid</h4>
                        <p class="sub-header">Use <code>&lt;i class="fas fa-ad"&gt;&lt;/i&gt;</code> <span class="badge badge-success">v 5.13.0</span>.</p>

                        <div class="row icons-list-demo" id="solid">
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card -->

                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Regular</h4>
                        <p class="sub-header">Use <code>&lt;i class="far fa-address-book"&gt;&lt;/i&gt;</code> <span class="badge badge-success">v 5.13.0</span>.</p>

                        <div class="row icons-list-demo" id="regular">
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card -->

                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Brands</h4>
                        <p class="sub-header">Use <code>&lt;i class="fab fa-500px"&gt;&lt;/i&gt;</code> <span class="badge badge-success">v 5.13.0</span>.</p>

                        <div class="row icons-list-demo" id="brand">
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row --> 
        
    </div> <!-- container -->  
@endsection

@section('script')
    <!-- Page js-->
    <script src="{{asset('assets/js/pages/fontawesome.init.js')}}"></script>
@endsection