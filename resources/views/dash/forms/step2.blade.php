@extends('dash.layouts.vertical', ['title' => 'Productos'])

@section('css')
    <link href="{{asset('dash/assets/libs/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dash/assets/libs/dropify/dropify.min.css')}}" rel="stylesheet" type="text/css" />
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Nuevo Producto</a></li>
                            <li class="breadcrumb-item active">Imágenes</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Agregar imágenes</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Suba las imagenes de su producto.</h4>
                        <p class="sub-header">
                            Aquí podrá subir todas las imágenes de su producto. 
                        </p>
                        <form action="{{route('productos.imagenstore')}}" method="POST" enctype="multipart/form-data" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                            data-upload-preview-template="#uploadPreviewTemplate">

                        @csrf
                        <input type="hidden" name="producto_id" value="{{$productos->id}}">
                        

                            <div class="fallback"> 
                                <input name="file" type="file" multiple />
                            </div>

                            <div class="dz-message needsclick">
                                <i class="h1 text-muted dripicons-cloud-upload"></i>
                                <h3>Arrastra los archivos aquí o haga click para subir.</h3>
                                <span class="text-muted font-13">(Seleccione los archivos que actualmente
                                    <strong>no</strong> están seleccionados.)</span>
                            </div>
                        

                        <!-- Preview -->
                        <div class="dropzone-previews mt-3" id="file-previews"></div>  

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div><!-- end col -->
        </div>
        <!-- end row -->  

        <!-- file preview template -->
        <div class="d-none" id="uploadPreviewTemplate">
            <div class="card mt-1 mb-0 shadow-none border">
                <div class="p-2">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                        </div>
                        <div class="col pl-0">
                            <a href="javascript:void(0);" class="text-muted font-weight-bold" data-dz-name></a>
                            <p class="mb-0" data-dz-size></p>
                        </div>
                        <div class="col-auto">
                            <!-- Button -->
                            <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                <i class="dripicons-cross"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <form method="GET" action="{{route('productos.step3')}}">
        <div class="col-md-6">
            <input type="hidden" name="producto_id" value="{{$productos->id}}">
                            <button type="submit" class="btn btn-primary waves-effect 
                            waves-light">Siguiente</button>
                            </div>
        </form>
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('dash/assets/libs/dropzone/dropzone.min.js')}}"></script>
    <script src="{{asset('dash/assets/libs/dropify/dropify.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('dash/assets/js/pages/form-fileuploads.init.js')}}"></script>
    <script type="text/javascript">
        Dropzone.options.myAwesomeDropzone = {
         headers:{
            'X-CSRF-TOKEN' : "{{csrf_token()}}"
         }
        };
    </script>
@endsection