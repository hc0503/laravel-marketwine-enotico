@extends('dash.layouts.vertical', ['title' => 'Productos'])

@section('css')
    <!-- Plugins css -->
    <link href="{{asset('dash/assets/libs/mohithg-switchery/mohithg-switchery.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dash/assets/libs/multiselect/multiselect.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dash/assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dash/assets/libs/selectize/selectize.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dash/assets/libs/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dash/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dash/assets/libs/summernote/summernote.min.css')}}" rel="stylesheet" type="text/css" />
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Productos</a></li>
                            <li class="breadcrumb-item active">Nuevo producto</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Agregar producto</h4>
                </div>
            </div>
        </div>     
        <!-- end page title -->  

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
        
        {!! Form::model($productos,['route' => ['productos.storestep4',$productos->id], 'method' => 'put', 'novalidate','files'=>true]) !!}              
                        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Cantidades y precios</h4>
                        <p class="text-muted font-14 mb-3">
                            Aquí podrás agregar las cantidades y precios relacionados a tus productos. 
                        </p>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label>Stock disponible</label>
                                    <input data-toggle="touchspin" name="stock" data-step="1" id="stock" type="text" value="0" data-bts-button-down-class="btn btn-danger" data-bts-button-up-class="btn btn-info">
                                </div>

                                <div class="form-group mb-3">
                                    <label>Precio (sin impuestos)</label>
                                    <input data-toggle="touchspin" id="precio" type="text" name="precio" data-bts-prefix="€"  data-step="0.1" data-decimals="2" data-bts-button-down-class="btn btn-danger" data-bts-button-up-class="btn btn-info">
                                </div>

                                <div class="form-group mb-3">
                                    <label>Con ésta venta consigues (imp. excluidos). </label> 
                                    <input data-toggle="touchspin" id="ganancia" type="text" data-bts-prefix="€" data-decimals="2" data-bts-button-down-class="btn btn-danger" data-bts-button-up-class="btn btn-info" disabled="disabled">
                                    Ya hemos restado nuestra comisión del 15% y el fijo de 0,35€ por el total de la operación.
                                </div>

                                
                            </div> <!-- end col -->

                            <div class="col-lg-6 mt-3 mt-lg-0">
                                <div class="form-group mb-3">
                                    <label>Vender multiplo de</label>
                                    <input data-toggle="touchspin" type="text" name="multiplo" data-bts-prefix="X"  data-step="1" data-bts-button-down-class="btn btn-danger" data-bts-button-up-class="btn btn-info" value="1">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Cantidad mínima para la venta:</label>
                                    <input value="1" id="minimo" data-toggle="touchspin" name="minimo" type="text"  data-step="1"data-bts-button-down-class="btn btn-danger" data-bts-button-up-class="btn btn-info" >
                                </div>


                                <div class="form-group mb-3">
                                    <label>Precio (impuestos incluidos)</label>
                                    <input data-toggle="touchspin" id="precio_imp" type="text" data-bts-prefix="€" name="precio_imp" data-decimals="2" disabled="disabled">
                                </div>

                                
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
<div class="col-md-6">
                            <button type="submit" class="btn btn-primary waves-effect 
                            waves-light">Guardar</button>
                            </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
{!! Form::close() !!}

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        



        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('dash/assets/libs/selectize/selectize.min.js')}}"></script>
    <script src="{{asset('dash/assets/libs/mohithg-switchery/mohithg-switchery.min.js')}}"></script>
    <script src="{{asset('dash/assets/libs/multiselect/multiselect.min.js')}}"></script>
    <script src="{{asset('dash/assets/libs/select2/select2.min.js')}}"></script>
    <script src="{{asset('dash/assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('dash/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js')}}"></script>
    <script src="{{asset('dash/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
    <script src="{{asset('dash/assets/libs/devbridge-autocomplete/devbridge-autocomplete.min.js')}}"></script>
    <script src="{{asset('dash/assets/libs/jquery-mockjax/jquery-mockjax.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('dash/assets/js/pages/form-advanced.init.js')}}"></script>

     <!-- Plugins js-->
    <script src="{{asset('dash/assets/libs/summernote/summernote.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('dash/assets/js/pages/form-summernote.init.js')}}"></script>
    <script type="text/javascript">
        
        $("input[name=precio]").change(function(){

            var precio = parseFloat($(this).val()).toFixed(2);

            var precio_imp = parseFloat(precio*1.21).toFixed(2);
            var ganancia = parseFloat(precio*0.85-0.35).toFixed(2);

           $("#precio_imp").val(precio_imp);
           $("#ganancia").val(ganancia);
        });
        

         $("input[name=multiplo]").change(function(){
        //$("#minimo").data('step', 5);
        var multiplo = parseInt($(this).val());
        //var stock = document.getElementById('stock');
//var minimo = document.getElementById('minimo');
        //stock.attr("data-step", multiplo);

//console.log($("#minimo").attr("data-step")); // Hello mean

        $("#minimo").val(multiplo); // The data-you attribute has been changed.
        
        
    });
    </script>
@endsection