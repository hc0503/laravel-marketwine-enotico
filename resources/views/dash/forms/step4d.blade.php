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
    <!-- Plugins css -->
    <link href="{{asset('dash/assets/libs/quill/quill.min.css')}}" rel="stylesheet" type="text/css" />
    <script>
  addEventListener('load',inicio,false);

  function inicio()
  {
    document.getElementById('example-range').addEventListener('change',cambioTemperatura,false);
    document.getElementById('example').addEventListener('change',formato,false);
  }

  function cambioTemperatura()
  {    
    document.getElementById('graduacion').innerHTML=document.getElementById('example-range').value;
  }
  function formato()
  {    
    document.getElementById('formato').innerHTML=document.getElementById('example').value;
  }
</script>  
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
                    <h4 class="page-title">Nuevo Destilado</h4>
                </div>
            </div>
        </div>     
        <!-- end page title -->  

        <div class="row">
            <div class="col-12">
                {!! Form::open(['route'=>'productos.store','method'=>'post','files'=>true]) !!}
                <div class="card">
                    <div class="card-body"> 
                        
       
                        <div class="row">
                             <div class="col-lg-6">
                                
                                 <div class="form-group">
                                    <label>Clasificación</label>
                                    <select id="destilado" name="subcate" onchange="run()" class="form-control">
                                        <option value="">Selecciona una opción...</option>
                                        @foreach($subcate as $subcat)
                                        <option value="{{$subcat->nombre}}">{{$subcat->nombre}}</option>
                                        @endforeach                                   
                                    </select>
                                    <input type="hidden" name="cate_principal" value="{{$categorias->id}}" />
                                </div>
                            </div>
                            <div class="col-lg-3">
                                
                                 <div class="form-group">
                                    <label>Tipo</label>
                                    <select name="tipo" id="tipo" onchange="runtipo()" class="form-control" >
                                        <option value="">Selecciona una opción...</option>                                        
                                        <option  id="ADS" style="display: none" value="Aguardiente de sidra">Aguardiente de sidra</option>
                                        <option  id="ADH" style="display: none" value="Aguardiente de Hierbas">Aguardiente de Hierbas</option>
                                        <option  id="ADF" style="display: none" value="Aguardiente de fruta">Aguardiente de fruta</option>
                                        <option  id="anis" style="display: none"value="Anis">Anís</option>
                                        <option  id="LDF" style="display: none"value="Licor de fruta">Licor de fruta</option>
                                        <option  id="LFS" style="display: none"value="Licor de fruto seco">Licor de fruto seco</option>
                                        <option  id="LDC" style="display: none"value="Licor de café">Licor de café</option>
                                        <option  id="CDL" style="display: none"value="Crema de Licor">Crema de Licor</option>
                                                                          
                                    </select>
                                    
                                </div>


                            </div>
                            <div class="col-lg-3">
                                
                                 <div class="form-group">
                                    <label>Estilo</label>
                                    <select name="tipo" id="tipo" class="form-control" >
                                        <option value="">Selecciona una opción...</option>                                        
                                        <option  id="ADCereza" style="display: none" value="Aguardiente de Cerezas">Aguardiente de Cerezas</option>
                                        <option  id="ADciruela" style="display: none" value="Aguardiente de ciruelas">Aguardiente de ciruelas</option>
                                        <option  id="ADMelocoton" style="display: none" value="Aguardiente de melocotón">Aguardiente de melocotón</option>
                                        <option  id="ADManzana" style="display: none" value="Aguardiente de manzana">Aguardiente de manzana</option>
                                        <option  id="ADPera" style="display: none" value="Aguardiente de pera">Aguardiente de pera</option>
                                        <option  id="ADAlbaricoque" style="display: none" value="Aguardiente de albaricoque">Aguardiente de albaricoque</option>
                                        
                                                                          
                                    </select>
                                    
                                </div>


                            </div>
                        </div>
                            <!-- end col -->
                           
                       

                        

                        <div class="row">
                            <div class="col-lg-3">
                          <div class="form-group">
                                    <label>Dulzura</label>
                                    <select  name="dulzura" class="form-control">
                                        <option value="">Selecciona una opción...</option>
                                        <option  value="Seco">Seco</option>
                                        <option value="Semi Dulce">Semi Dulce</option>
                                        <option value="Dulce">Dulce</option>
                                        
                                                              
                                    </select>
                                    
                                </div>


                            </div>
                            <div class="col-lg-3">
                          <div class="form-group">
                                    <label>Marca</label>
                                    <input type="text" class="form-control" name="marca">
                                    
                                </div>


                            </div>

                            <div class="col-lg-6">     
                            <div class="form-group">
                                    <label>Certificaciones y Extras</label>
                                    <select name="cert[]" multiple="multiple" class="multi-select" id="my_multi_select2" name="cate_principal[]" data-plugin="multiselect" data-selectable-optgroup="true" >
                                        
                                        <option value="BIO">BIO</option>
                                        <option value="Demeter">Demeter</option>
                                        <option value="Vegano">Vegano</option>
                                                             
                                    </select>
                                    <div class="clearfix"></div>
                                </div>

                            </div>

                            
                        </div>

                            
                            <div class="row">
                                <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Envejecimiento</label>
                                    <select  name="envejecimiento" class="form-control">
                                        <option value="">Selecciona una opción...</option>
                                        <option value="Sin Crianza">Sin Crianza</option>
                                        <option value="Extra Brut">Barrica</option>
                                                                               
                                                              
                                    </select>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-lg-3">

                               
                            <div class="radio radio-info form-check-inline">
                                <input type="radio" id="inlineRadio1" value="Botella" name="envase" checked="">
                                <label for="inlineRadio1"> Botella </label>
                            </div>
                             <div class="radio radio-info form-check-inline">
                                <input type="radio" id="inlineRadio2" value="Lata" name="envase">
                                <label for="inlineRadio2"> Lata </label>
                            </div>
                            <div class="radio radio-info form-check-inline" id="envase">
                                <input type="radio" id="inlineRadio3" value="BIB" name="envase">
                                <label for="inlineRadio3"> BIB </label>
                            </div>
                            
                        </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    
                                    <div class="form-group mb-0">
                                        <label for="example-range">Graduación</label>
                                        <input class="custom-range" id="example-range" type="range" step="0.01" name="graduacion" min="0" max="100" />
                                        <span id="graduacion">0</span>%
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            </div> 

                               <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Añada</label>
                                    <input type="number" class="form-control" name="anada" min="1900" max="2099" step="1" value="2021" />
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    
                                    <div class="form-group mb-0">
                                        <label for="example-range">Formato</label>
                                        <input class="custom-range" id="example" type="range" step="0.01" name="formato" min="0" max="100">
                                        <span id="formato">0</span>L
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                               </div>


                               
                               

                            <div class="row">
                                <div class="col-md-6">
                                     <div class="checkbox checkbox-info checkbox-circle mb-2">
                                <input id="checkbox8" name="nonvintaje" type="checkbox" >
                                <label for="checkbox8">
                                    Non-vintage
                                </label>
                            </div>
                                    <div class="clearfix"></div>
                                </div>
                            <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Siguiente</button>
                            </div>
                            </div> <!-- end row -->

           

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
                 {!! Form::close() !!}
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
    <script type="text/javascript">
        function run() {
        
        var destilado = document.getElementById("destilado").value;
                        
        if(destilado=="Aguardiente"){
            //tipo
            document.getElementById("ADS").style.display = "block";
            document.getElementById("ADH").style.display = "block";
            document.getElementById("ADF").style.display = "block";
            document.getElementById("anis").style.display = "none";
            document.getElementById("LDF").style.display = "none";
            document.getElementById("LFS").style.display = "none";
            document.getElementById("LDC").style.display = "none";
            document.getElementById("CDL").style.display = "none";
            
        }
        if(destilado=="Licor"){
            document.getElementById("ADS").style.display = "none";
            document.getElementById("ADH").style.display = "none";
            document.getElementById("ADF").style.display = "none";
            document.getElementById("anis").style.display = "block";
            document.getElementById("LDF").style.display = "block";
            document.getElementById("LFS").style.display = "block";
            document.getElementById("LDC").style.display = "block";
            document.getElementById("CDL").style.display = "block";
        }
        
    }

    function runtipo() {
        var tipo = document.getElementById("tipo").value;
        if(tipo=="Aguardiente de fruta"){
            document.getElementById("ADCereza").style.display = "block";
            document.getElementById("ADciruela").style.display = "block";
            document.getElementById("ADMelocoton").style.display = "block";
            document.getElementById("ADManzana").style.display = "block";
            document.getElementById("ADPera").style.display = "block";
            document.getElementById("ADAlbaricoque").style.display = "block";
        }

        if(tipo=="Aguardiente de sidra"){
            document.getElementById("ADCereza").style.display = "none";
            document.getElementById("ADciruela").style.display = "none";
            document.getElementById("ADMelocoton").style.display = "none";
            document.getElementById("ADManzana").style.display = "none";
            document.getElementById("ADPera").style.display = "none";
            document.getElementById("ADAlbaricoque").style.display = "none";
        }
        if(tipo=="Aguardiente de Hierbas"){
            document.getElementById("ADCereza").style.display = "none";
            document.getElementById("ADciruela").style.display = "none";
            document.getElementById("ADMelocoton").style.display = "none";
            document.getElementById("ADManzana").style.display = "none";
            document.getElementById("ADPera").style.display = "none";
            document.getElementById("ADAlbaricoque").style.display = "none";
        }

    }
    </script>
@endsection