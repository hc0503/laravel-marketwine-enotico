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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">productos</a></li>
                            <li class="breadcrumb-item active">Listado de productos</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Pack</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 



        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title">Listado de productos</h4>
                        

                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Categoria</th>
                                    <th>Subcategoria</th>
                                    <th>Marca</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>
                                @foreach($productos as $producto)
                                <tr>
                                    <td class="table-user">{{$producto->nombre}}</td>
                                    <td class="table-user">@if($producto->cate_principal==1)
                                    Vino
                                    @elseif($producto->cate_principal==2)
                                    Cerveza
                                    @endif
                                    @if($producto->cate_principal==3)
                                    Destilados
                                    @elseif($producto->cate_principal==4)
                                    Atípicos
                                    @endif
                                    </td>
                                    <td class="table-user">{{$producto->subcate}}</td>
                                    <td class="table-user">{{$producto->marca}}</td>
                                    <td> <a href="{{ route('productpack.destroy',['id' => $producto->idpack] )}}" onclick="
return confirm('Seguro deseas eliminar este producto del pack?')" class="btn btn-danger"> Borrar</a>
                                            </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button class="btn btn-success" onclick="history.back()">Volver</button>
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