@extends('dash.layouts.vertical', ['title' => 'Profile'])

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}">Enotico</a></li>
                            <li class="breadcrumb-item"><a href="{{url('/perfil')}}">Perfil</a></li>
                            <li class="breadcrumb-item active">Perfil</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Perfil</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-4 col-xl-4">
                <div class="card-box text-center">
                    @if($perfil->logo==null)
                    <img src="{{asset('img/logo/Logo_enotico_-07.png')}}" class="rounded-circle avatar-lg img-thumbnail"
                        alt="profile-image">
                    @else
                    <img src="{{$perfil->logo}}" class="rounded-circle avatar-lg img-thumbnail"
                        alt="profile-image">
                    @endif
                    <h4 class="mb-0">{{$perfil->nombre}}</h4>
                    <p class="text-muted">@ {{Auth::user()->name}}</p>
                    {!! Form::model($perfil,['route' => ['perfil.update',$perfil->id], 'method' => 'put','files'=>true, 'novalidate']) !!}
                    <input id='fileid' name="img" type='file' hidden/>
                    <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light" id='buttonid'>Subir foto</button>
                    

                    <div class="text-left mt-3">
                        <h4 class="font-13 text-uppercase">Sobre mí :</h4>
                        <p class="text-muted font-13 mb-3">
                            
                        </p>
                        <p class="text-muted mb-2 font-13"><strong>Nombre :</strong> <span class="ml-2">{{$perfil->nombre}}</span></p>

                        <p class="text-muted mb-2 font-13"><strong>Teléfono :</strong><span class="ml-2">{{$perfil->tel}}</span></p>

                        <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2 ">{{Auth::user()->email}}</span></p>

                        <p class="text-muted mb-1 font-13"><strong>País :</strong> <span class="ml-2">{{$perfil->pais}}</span></p>
                    </div>

                    
                </div> <!-- end card-box -->

               
            </div> <!-- end col-->
             <div class="col-lg-8">
                <div class="card-box">
                    <h4 class="header-title m-t-0">Perfil de Productor</h4>
                    <p class="text-muted font-14 m-b-20">
                        Aquí podrás ver y actualizar tus datos de perfil cuando lo desees.
                    </p> 
                    

                               {!! Form::hidden('id', $perfil->id) !!}


                                                {!! Form::hidden('user_id', Auth::user()->id) !!}         
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-4 col-form-label">Nombre y Apellido<span class="text-danger">*</span></label>
                            <div class="col-7">
                                {!! Form::text('nombre', null, ['class' => 'form-control' , 'placeholder' => 'Ingrese su nombre']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                                        <label for="example-date" class="col-4 col-form-label">Fecha de Nacimiento</label>
                                        <div class="col-7">
                                        {!! Form::date('fecha_nac', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                                    </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-4 col-form-label">Nombre de la Empresa</label>
                            <div class="col-7">
                                {!! Form::text('empresa', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'Nombre de la empresa']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-4 col-form-label">CIF</label>
                            <div class="col-7">
                                {!! Form::text('num_iva', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'IVA']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-4 col-form-label">Dirección</label>
                            <div class="col-7">
                                {!! Form::text('direccion', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'Dirección']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-4 col-form-label">Dirección complementaria</label>
                            <div class="col-7">
                                {!! Form::text('dir_complemen', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'Dirección complementaria']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-4 col-form-label">Código postal/Zip </label>
                            <div class="col-7">
                                {!! Form::text('cp', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'Código postal/Zip']) !!}
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-4 col-form-label">Ciudad </label>
                            <div class="col-7">
                                {!! Form::text('ciudad', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'Ciudad']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-4 col-form-label">País </label>
                            <div class="col-7">
                                {!! Form::text('pais', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'País']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-4 col-form-label">Teléfono </label>
                            <div class="col-7">
                                
                                <input type="text" name="tel"  class="form-control" data-toggle="input-mask" data-mask-format="0000-0000">
                            </div>
                        </div>
                       
                        

                       

                        <div class="form-group row">
                            <div class="col-8 offset-4">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Guardar
                                </button>
                {!! Form::close() !!}
                            </div>
                        </div>
                    </form>
                </div> <!-- end card-box -->

            </div> <!-- end col -->
          
        </div>
        <!-- end row-->

    </div> <!-- container -->
    @section('script')
<script type="text/javascript">
   document.getElementById('buttonid').addEventListener('click', openDialog);

function openDialog() {
  document.getElementById('fileid').click();
} 

</script>

 <script src="{{asset('dash/assets/libs/jquery-mask-plugin/jquery-mask-plugin.min.js')}}"></script>
    <script src="{{asset('dash/assets/libs/autonumeric/autonumeric.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('dash/assets/js/pages/form-masks.init.js')}}"></script>
    @endsection
    
@endsection