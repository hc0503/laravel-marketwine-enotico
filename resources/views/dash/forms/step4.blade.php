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
                    <h4 class="page-title">Nuevo Vino</h4>
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
                             <div class="col-lg-3">
                                
                                 <div class="form-group">
                                    <label>Vino</label>
                                    <select id="vino" name="subcate" onchange="run()" class="form-control">
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
                                    <select name="tipo" id="tipo" class="form-control" >
                                        <option value="">Selecciona una opción...</option>                                        
                                        <option value="Blanco">Blanco</option>
                                        <option value="Rosado">Rosado</option>
                                        <option value="Tinto">Tinto</option>
                                                                          
                                    </select>
                                    
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6">
                                 <div class="form-group">
                                    <label>Vinificación</label>
                                    <select name="vinificacion" class="form-control" >
                                        <option value="">Selecciona una opción...</option>
                                        <option id="1" style="display: none" value="Método Ansestral">Método Ansestral</option>
                                        <option id="2" style="display: none" value="Método Tradicional">Método Tradicional</option>
                                        <option id="3" style="display: none" value="Método Charmat">Método Charmat</option>
                                        <option id="4" style="display: none" value="Método Transfer">Método Transfer</option> 
                                        <option id="5" style="display: none" value="Método Transfer">Método de Gasificación</option> 
                                        <option id="6" style="display: none" value="Maceración carbónica">Maceración carbónica</option> 
                                        <option id="7" style="display: none" value="Vendimia tardía">Vendimia tardía</option>     
                                         <option id="8" style="display: none" value="Pasificado">Pasificado</option> 
                                        <option id="9" style="display: none" value="Botrytis">Botrytis</option> 
                                        <option id="10" style="display: none" value="Vino de hielo">Vino de hielo</option>                                   
                                    </select>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                         <div class="row">
                               
                          <div class="col-lg-6">     
                            <div class="form-group">
                                    <label>Certificaciones y Extras</label>
                                    <select name="cert[]" multiple="multiple" class="multi-select" id="my_multi_select2" name="cate_principal[]" data-plugin="multiselect" data-selectable-optgroup="true" >
                                        
                                        <option value="BIO">BIO</option>
                                        <option value="Demeter">Demeter</option>
                                        <option value="Vegano">Vegano</option>
                                        <option value="WFCP">WFCP (Wineries for climate Protection)</option>                      
                                    </select>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Variedad de Uva</label> 
                                    <select id="selectize-maximum" name="uva[]" required="required">                                    
                                       
                                        <option value="Avouriu">Avouriu</option>
                                        <option value="Acolon">Acolon</option>
                                                              
                                    </select>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                          <div class="form-group">
                                    <label>Dulzura</label>
                                    <select  name="dulzura" class="form-control">
                                        <option value="">Selecciona una opción...</option>
                                        <option id="bn" style="display: none" value="Brut Nature">Brut Nature</option>
                                        <option id="eb" style="display: none" value="Extra Brut">Extra Brut</option>
                                        <option id="b" style="display: none" value="Brut">Brut</option>
                                        <option id="eseco" style="display: none" value="Extra Seco">Extra Seco</option>
                                        <option id="seco" style="display: none" value="Seco">Seco</option>
                                        <option id="dulce" style="display: none" value="Dulce">Dulce</option>
                                        <option id="semidulce" style="display: none" value="semidulce">Semi Dulce</option>
                                                              
                                    </select>
                                    
                                </div>

                            </div>

                            <div class="col-lg-6">

                               
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

                            
                        </div>

                            
                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Envejecimiento</label>
                                    <select  name="envejecimiento" class="form-control">
                                        <option value="">Selecciona una opción...</option>
                                        <option value="Sin Crianza">Sin Crianza</option>
                                        <option value="Extra Brut">Barrica</option>
                                        <option id="solera" style="display: none" value="Solera">Solera</option>
                                        <option id="solyserena" style="display: none" value="Sol y Serena">Sol y Serena</option>                                       
                                                              
                                    </select>
                                    <div class="clearfix"></div>
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


                               <div class="row" id="tipo_eyg" style="display: none">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tipo de vino</label>
                                    <select  name="tipo_vino" class="form-control" >
                                        <option value="">Selecciona una opción...</option>
                                        <option value="Vino Generoso">Vino Generoso</option>
                                        <option value="Vermut">Vermut</option>
                                        <option value="Mistela">Mistela</option>
                                        <option value="Sangría">Sangría</option>                                       
                                                              
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Estilo</label>
                                    <select  name="estilo" class="form-control">
                                        <option value="">Selecciona una opción...</option>
                                        <option value="Vino rancio">Vino rancio</option>
                                        <option value="Manzanilla y Fino">Manzanilla y Fino</option>
                                        <option value="Amontillado">Amontillado</option>
                                        <option value="Palo cortado">Palo cortado</option>   
                                        <option value="Pedro Ximénez">Pedro Ximénez</option>
                                        <option value="Oloroso">Oloroso</option>
                                        <option value="Pale Cream">Pale Cream</option>
                                        <option value="Medium Cream">Medium Cream</option>
                                        <option value="Cream">Cream</option>
                                        <option value="Vino dulce natural">Vino dulce natural</option>                                    
                                                              
                                    </select>
                                    
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
        var tipo = document.getElementById("tipo").value;
        var vino = document.getElementById("vino").value;

        
        if(vino=="Espumoso"){
            document.getElementById("envase").style.display = "none";
            document.getElementById("tipo_eyg").style.display = "none";
            document.getElementById("1").style.display = "block";
            document.getElementById("2").style.display = "block";
            document.getElementById("3").style.display = "block";
            document.getElementById("4").style.display = "block";
            document.getElementById("5").style.display = "block";
            document.getElementById("6").style.display = "none";
            document.getElementById("7").style.display = "none";
            document.getElementById("8").style.display = "none";
            document.getElementById("9").style.display = "none";
            document.getElementById("10").style.display = "none";
            //dulzura
            document.getElementById("bn").style.display = "block";
            document.getElementById("eb").style.display = "block";
            document.getElementById("b").style.display = "block";
            document.getElementById("eseco").style.display = "block";
            document.getElementById("seco").style.display = "block";
            document.getElementById("semidulce").style.display = "block";
            document.getElementById("dulce").style.display = "block";
            //envejecimiento
            document.getElementById("sol").style.display = "none";
            document.getElementById("solyser").style.display = "none";
            //tipo especial y generoso
           
        }
        if(vino=="Vino de Aguja / Frizzante"){
            document.getElementById("envase").style.display = "block";
            document.getElementById("tipo_eyg").style.display = "none";
            document.getElementById("1").style.display = "none";
            document.getElementById("2").style.display = "block";
            document.getElementById("3").style.display = "none";
            document.getElementById("4").style.display = "none";
            document.getElementById("5").style.display = "block";
            document.getElementById("6").style.display = "block";
            document.getElementById("7").style.display = "none";
            document.getElementById("8").style.display = "none";
            document.getElementById("9").style.display = "none";
            document.getElementById("10").style.display = "none";
            //dulzura
            document.getElementById("bn").style.display = "none";
            document.getElementById("eb").style.display = "none";
            document.getElementById("b").style.display = "none";
            document.getElementById("eseco").style.display = "none";
            document.getElementById("seco").style.display = "block";
            document.getElementById("semidulce").style.display = "block";
            document.getElementById("dulce").style.display = "block";
            //envejecimiento
            document.getElementById("sol").style.display = "none";
            document.getElementById("solyser").style.display = "none";
            //tipo especial y generoso
            
        }
        if(vino=="Vino tranquilo"){
            document.getElementById("envase").style.display = "block";
            document.getElementById("tipo_eyg").style.display = "none";
            document.getElementById("1").style.display = "none";
            document.getElementById("2").style.display = "none";
            document.getElementById("3").style.display = "block";
            document.getElementById("4").style.display = "none";
            document.getElementById("5").style.display = "none";
            document.getElementById("6").style.display = "block";
            document.getElementById("7").style.display = "none";
            document.getElementById("8").style.display = "none";
            document.getElementById("9").style.display = "none";
            document.getElementById("10").style.display = "none";
            document.getElementById("bn").style.display = "none";
            document.getElementById("eb").style.display = "none";
            document.getElementById("b").style.display = "none";
            document.getElementById("eseco").style.display = "none";
            document.getElementById("seco").style.display = "none";
            document.getElementById("semidulce").style.display = "none";
            document.getElementById("dulce").style.display = "none";
            document.getElementById("sol").style.display = "none";
            document.getElementById("solyser").style.display = "none";
            
        }
        if(vino=="Vino Dulce"){
            document.getElementById("envase").style.display = "block";
            document.getElementById("tipo_eyg").style.display = "none";
            document.getElementById("1").style.display = "none";
            document.getElementById("2").style.display = "none";
            document.getElementById("3").style.display = "none";
            document.getElementById("4").style.display = "none";
            document.getElementById("5").style.display = "none";
            document.getElementById("6").style.display = "none";
            document.getElementById("7").style.display = "block";
            document.getElementById("8").style.display = "block";
            document.getElementById("9").style.display = "block";
            document.getElementById("10").style.display = "block";
            //dulzura
            document.getElementById("bn").style.display = "none";
            document.getElementById("eb").style.display = "none";
            document.getElementById("b").style.display = "none";
            document.getElementById("eseco").style.display = "none";
            document.getElementById("seco").style.display = "none";
            document.getElementById("semidulce").style.display = "block";
            document.getElementById("dulce").style.display = "block";
            //envejecimiento
            document.getElementById("sol").style.display = "none";
            document.getElementById("solyser").style.display = "none";
            //tipo especial y generoso
            

        }
        if(vino=="Vino especial & generoso"){
            document.getElementById("envase").style.display = "block";
            document.getElementById("1").style.display = "none";
            document.getElementById("2").style.display = "none";
            document.getElementById("3").style.display = "none";
            document.getElementById("4").style.display = "none";
            document.getElementById("5").style.display = "none";
            document.getElementById("6").style.display = "none";
            document.getElementById("7").style.display = "none";
            document.getElementById("8").style.display = "none";
            document.getElementById("9").style.display = "none";
            document.getElementById("10").style.display = "none";
            //dulzura
            document.getElementById("bn").style.display = "none";
            document.getElementById("eb").style.display = "none";
            document.getElementById("b").style.display = "none";
            document.getElementById("eseco").style.display = "none";
            document.getElementById("seco").style.display = "block";
            document.getElementById("semidulce").style.display = "block";
            document.getElementById("dulce").style.display = "block";
            //envejecimiento
            document.getElementById("solera").style.display = "block";
            document.getElementById("solyserena").style.display = "block";
            //tipo especial y generoso
            document.getElementById("tipo_eyg").style.display = "block";
        }
    }
    </script>
@endsection