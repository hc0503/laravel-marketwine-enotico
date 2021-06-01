@extends('dash.layouts.vertical', ['title' => 'Packs'])

@section('css')
    <!-- Plugins css -->
    <link href="{{asset('dash/assets/libs/mohithg-switchery/mohithg-switchery.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dash/assets/libs/multiselect/multiselect.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dash/assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dash/assets/libs/selectize/selectize.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dash/assets/libs/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dash/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dash/assets/libs/summernote/summernote.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Plugins css -->
    <link href="{{asset('dash/assets/libs/quill/quill.min.css')}}" rel="stylesheet" type="text/css" />
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
                            <li class="breadcrumb-item active">Nuevo Pack</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Agregar Pack</h4>
                </div>
            </div>
        </div>     
        <!-- end page title -->  

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body"> 
                         
    {!! Form::open(['route'=>'packproduct.store','method'=>'post','files'=>true]) !!}

                        <input type="hidden" name="id_pack" value="{{$packs->id}}">
                        <div class="row">
                             <div class="col-lg-12">
                            <div class="form-group mb-3">
                                        <label for="example-palaceholder">Producto<span class="text-danger">*</span></label>
                                        <select name="id_producto" class="form-control">
                                            @foreach($productos as $producto)
                                            <option value="{{$producto->id}}">{{$producto->nombre}}</option>
                                            @endforeach
                                        </select>
                            </div>

                            </div>
                            
                            
                        </div>

                        

                      
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="clearfix"></div>
                                    </div>
                            <div class="col-md-6">
                            <button type="submit" class="btn btn-primary waves-effect 
                            waves-light">Siguiente</button>
                            </div>
                            </div> <!-- end row -->
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
    <!-- Plugins js-->
    <script src="{{asset('dash/assets/libs/quill/quill.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('dash/assets/js/pages/form-quilljs.init.js')}}"></script>
@endsection