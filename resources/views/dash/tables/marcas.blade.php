@extends('dash.layouts.vertical', ['title' => 'Marcas'])

@section('css')
    <!-- Plugins css -->
    <link href="{{asset('dash/assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Enotico</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Marcas</a></li>
                            <li class="breadcrumb-item active">Listado de marcas</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Marcas</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 



        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title">Listado de marcas</h4>
                        <p class="text-muted font-13 mb-4">
                           Aqui se mostrará su listado de marcas y podrá agregar nuevas marcas, editarlas y eliminarlas.
                        </p>

                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    
                                    <th>Acción</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>
                                @foreach($marcas as $marca)
                                <tr>
                                    <td class="table-user"><img src="../{{$marca->img}}" alt="sin imagen" class="mr-2 rounded-circle">{{$marca->nombre}}</td>
                                    
                                    <td> <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->

        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('dash/assets/libs/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('dash/assets/libs/pdfmake/pdfmake.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('dash/assets/js/pages/datatables.init.js')}}"></script>
@endsection