@extends('dash.layouts.vertical', ['title' => 'Categorias'])

@section('css') 

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Productos</a></li>
                            <li class="breadcrumb-item active">Categorias</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Nuevo Producto</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 
        


        <div class="row">
            @foreach($categorias as $catego)
            
            <div class="col-md-6 col-xl-3">
                <a href="{{url('productos_new')}}/{{$catego->id}}">
                <div class="widget-rounded-circle card-box">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="avatar-lg">
                                <img src="{{$catego->img}}" class="img-fluid rounded-circle" alt="user-img">
                            </div>
                        </div>
                        <div class="col">
                            <h5 class="mb-1 mt-2 font-16">{{$catego->nombre}}</h5>
                            <p class="mb-2 text-muted">Admin User</p>
                        </div>
                    </div> <!-- end row-->

                </div> <!-- end widget-rounded-circle-->
                </a>
            </div> <!-- end col-->
        
            @endforeach
        </div>
        <!-- end row -->

       
        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('dash/assets/libs/morris.js06/morris.js06.min.js')}}"></script>
    <script src="{{asset('dash/assets/libs/raphael/raphael.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('dash/assets/js/pages/dashboard-4.init.js')}}"></script>
@endsection
