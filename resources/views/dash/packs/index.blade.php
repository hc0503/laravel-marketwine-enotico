@extends('dash.layouts.vertical', ['title' => 'Packs'])

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Packs</a></li>
                            <li class="breadcrumb-item active">Listado de Packs</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Packs</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 



        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title">Listado de packs</h4>
                        <p class="text-muted font-13 mb-4">
                           <a href="{{url('/new_packs')}}" class="btn btn-success">Nuevo Pack</a>
                        </p>

                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>
                                @foreach($packs as $pack)
                                <tr>
                                    <td class="table-user">{{$pack->nombre}}</td>
                                    <td class="table-user">€ {{$pack->precio}}</td>
                                    <td> <a class="btn btn-success" href="{{url('addproduct')}}/{{$pack->id}}" > Agregar producto</a>  <a class="btn btn-primary" href="{{url('ver_productos_pack')}}/{{$pack->id}}" >Ver productos del pack</a>  <a class="btn btn-danger" href="{{ route('pack.destroy',['id' => $pack->id] )}}" onclick="
return confirm('Seguro deseas eliminar este pack?')" >Borrar pack</a>
                                            </td>
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