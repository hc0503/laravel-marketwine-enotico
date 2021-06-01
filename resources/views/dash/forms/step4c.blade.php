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
                    <h4 class="page-title">Nueva Cerveza</h4>
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
                                    <label>Clasificación</label>
                                    <select id="subcate" name="subcate" onchange="run()" class="form-control">
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
                                    <select name="tipo" id="tipo_ale" onchange="runtipo()" style="display: none" class="form-control" >
                                        <option value="">Selecciona una opción...</option>                                        
                                        <option value="Pale_Ale">Pale Ale</option>
                                        <option value="Irish Ale">Irish Ale</option>
                                        <option value="German Ale">German Ale</option>
                                        <option value="Belgian Ale">Belgian Ale</option>
                                        <option value="Porter">Porter</option>
                                        <option value="Stout">Stout</option>
                                        <option value="Brown Ale">Brown Ale</option>
                                        <option value="Lambic">Lambic</option>
                                        <option value="Abadía">Abadía</option>                                  
                                    </select>
                                    <select name="tipo" id="tipo_large" onchange="runtipolager()" style="display: none" class="form-control" >
                                        <option value="">Selecciona una opción...</option>                                        
                                        <option value="Pilsner_style">Pilsner style</option>
                                        <option value="European_Lager">European Lager</option>
                                        <option value="German_Lager">German Lager</option>
                                        <option value="American_Lager">American Lager</option>
                                                                          
                                    </select>
                                    
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6">
                                 <div class="form-group">
                                    <label>Estilo</label>
                                    <select name="estilo"  class="form-control" >
                                        <option value="">Selecciona una opción...</option>
                                        <option id="IPANAMERICANA" style="display: none" value="IPA">IPA</option>
                                        <option id="American_Pale" style="display: none" value="American Pale">American Pale</option>
                                        <option id="Bitter" style="display: none" value="Bitter">Bitter</option>
                                        <option id="Strong" style="display: none" value="Strong">Strong</option> 
                                        <option id="Weissbier" style="display: none" value="Weissbier">Weissbier</option> 
                                        <option id="Belgian_Pale" style="display: none" value="Belgian Pale">Belgian Pale</option> 
                                        <option id="Witbier" style="display: none" value="Witbier">Witbier</option>     
                                         <option id="Saison" style="display: none" value="Saison">Saison</option> 
                                        <option id="English_Porter" style="display: none" value="English Porter">English Porter</option> 
                                        <option id="American_Porter" style="display: none" value="American Porter">American Porter</option>
                                        <option id="Oatmeal_Stout" style="display: none" value="Oatmeal Stout">Oatmeal Stout</option>
                                        <option id="Imperial_Stout" style="display: none" value="Imperial Stout">Imperial Stout</option>
                                        <option id="American_Stout" style="display: none" value="American Stout">American Stout</option>
                                        <option id="Irish_Stout" style="display: none" value="Irish Stout">Irish Stout</option>
                                        <option id="American_Pilsner" style="display: none" value="American Pilsner">American Pilsner</option>
                                        <option id="German Pilsner" style="display: none" value="German Pilsner">German Pilsner</option>
                                        <option id="Bohemian Pilsner" style="display: none" value="Bohemian Pilsner">Bohemian Pilsner</option>
                                        <option id="Pale Lager" style="display: none" value="Pale Lager">Pale Lager</option>
                                        <option id="Dark Lager" style="display: none" value="Dark Lager">Dark Lager</option>
                                        <option id="Dunkel" style="display: none" value="Dunkel">Dunkel</option>
                                        <option id="Kölsch" style="display: none" value="Kölsch">Kölsch</option>
                                        <option id="Märzen" style="display: none" value="Märzen">Märzen</option>
                                        <option id="Bock" style="display: none" value="Bock">Bock</option>
                                        <option id="Doppelbock" style="display: none" value="Doppelbock">Doppelbock</option>
                                        <option id="Licht Beer" style="display: none" value="Licht Beer">Licht Beer</option>
                                        <option id="Ice Beer" style="display: none" value="Ice Beer">Ice Beer</option>
                                        <option id="Malt Liquor" style="display: none" value="Malt Liquor">Malt Liquor</option>                                   
                                    </select>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        

                        <div class="row">
                            <div class="col-lg-6">
                          <div class="form-group">
                                    <label>Color</label>
                                    <select  name="color" class="form-control">
                                        <option value="">Selecciona una opción...</option>
                                        <option value="Blanca">Blanca</option>
                                        <option value="Palida">Pálida</option>
                                        <option value="Dorada">Dorada</option>
                                        <option value="Ambar">Ámbar</option>
                                        <option value="Rubi">Rubí</option>
                                        <option value="Oscura">Oscura</option>
                                        <option value="Negra">Negra</option>
                                        <option value="Rosada">Rosada</option>
                                        <option value="Verde">Verde</option>                      
                                    </select>
                                    
                                </div>

                            </div>

                             <div class="col-lg-6">
                          <div class="form-group">
                                    <label>Sabor</label>
                                    <select  name="sabor" class="form-control">
                                        <option value="">Selecciona una opción...</option>
                                        <option value="Acida & Refrescante">Acida & Refrescante</option>
                                        <option value="Afrutada & Floral">Afrutada & Floral</option>
                                        <option value="Lupulada & Amarga">Lupulada & Amarga</option>
                                        <option value="Dulce & Caramelizada">Dulce & Caramelizada</option>
                                        <option value="Especiada & Intensa">Especiada & Intensa</option>
                                        <option value="Potente & Sabrosa">Potente & Sabrosa</option>
                                        <option value="Oscura & Compleja">Oscura & Compleja</option>
                                    </select>
                                    
                                </div>

                            </div>

                            
                        </div>

                            
                            <div class="row">
                                <div class="col-lg-3">     
                            <div class="form-group">
                                    <label>Extras</label>
                                    <select name="extra[]" multiple="multiple" class="multi-select" id="my_multi_select2" name="cate_principal[]" data-plugin="multiselect" data-selectable-optgroup="true" >
                                        
                                        <option value="Sin Gluten">Sin Gluten</option>
                                        <option value="Envejecido en barrica">Envejecido en barrica</option>
                                        <option value="Certificado Bio">Certificado Bio</option>
                                        <option value="Certificado Vegano">Certificado Vegano</option>
                                                             
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
                                    <label>MARCA</label>
                                   <input  class="form-control" type="text" name="MARCA">
                                    
                                </div>
                            </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-0">
                                        <label for="example-range">Formato</label>
                                        <input class="custom-range" id="example" type="range" step="0.01" name="formato" min="0" max="100">
                                        <span id="formato">0</span>L
                                    </div>
                            </div>
                           

                               </div>


                              
                               

                            <div class="row">
                                <div class="col-md-6">
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
        var subcate = document.getElementById("subcate").value;
        
        if(subcate=="Ale"){
            //tipo
            document.getElementById("tipo_ale").style.display = "block";
            document.getElementById("tipo_large").style.display = "none";
            
            
        }
        if(subcate=="Lager"){
            document.getElementById("tipo_ale").style.display = "none";
            document.getElementById("tipo_large").style.display = "block";
            
        }
        
    }

    function runtipo() {
        var tipo_ale = document.getElementById("tipo_ale").value;

            if(tipo_ale=="Pale_Ale"){
                document.getElementById("IPANAMERICANA").style.display = "block";
                document.getElementById("American_Pale").style.display = "block";
                document.getElementById("Bitter").style.display = "block";
                document.getElementById("Strong").style.display = "block";
                document.getElementById("Weissbier").style.display = "none";
                document.getElementById("Belgian_Pale").style.display = "none";
                document.getElementById("Witbier").style.display = "none";
                document.getElementById("Saison").style.display = "none";
                document.getElementById("English_Porter").style.display = "none";
                document.getElementById("American_Porter").style.display = "none";
                document.getElementById("Oatmeal_Stout").style.display = "none";
                document.getElementById("Imperial_Stout").style.display = "none";
                document.getElementById("American_Stout").style.display = "none";
                document.getElementById("Irish_Stout").style.display = "none";
                document.getElementById("American Pilsner").style.display = "none";
                document.getElementById("German Pilsner").style.display = "none";
                document.getElementById("Bohemian Pilsner").style.display = "none";
                document.getElementById("Pale Lager").style.display = "none";
                document.getElementById("Dark Lager").style.display = "none";
                document.getElementById("Dunkel").style.display = "none";
                document.getElementById("Kölsch").style.display = "none";
                document.getElementById("Märzen").style.display = "none";
                document.getElementById("Bock").style.display = "none";
                document.getElementById("Doppelbock").style.display = "none";
                document.getElementById("Licht Beer").style.display = "none";
                document.getElementById("Ice Beer").style.display = "none";
                document.getElementById("Malt Liquor").style.display = "none";
            }
            if(tipo_ale=="Irish Ale"){
                document.getElementById("IPANAMERICANA").style.display = "none";
                document.getElementById("American_Pale").style.display = "none";
                document.getElementById("Bitter").style.display = "none";
                document.getElementById("Strong").style.display = "none";
                document.getElementById("Weissbier").style.display = "none";
                document.getElementById("Belgian_Pale").style.display = "none";
                document.getElementById("Witbier").style.display = "none";
                document.getElementById("Saison").style.display = "none";
                document.getElementById("English_Porter").style.display = "none";
                document.getElementById("American_Porter").style.display = "none";
                document.getElementById("Oatmeal_Stout").style.display = "none";
                document.getElementById("Imperial_Stout").style.display = "none";
                document.getElementById("American_Stout").style.display = "none";
                document.getElementById("Irish_Stout").style.display = "none";
                document.getElementById("American Pilsner").style.display = "none";
                document.getElementById("German Pilsner").style.display = "none";
                document.getElementById("Bohemian Pilsner").style.display = "none";
                document.getElementById("Pale Lager").style.display = "none";
                document.getElementById("Dark Lager").style.display = "none";
                document.getElementById("Dunkel").style.display = "none";
                document.getElementById("Kölsch").style.display = "none";
                document.getElementById("Märzen").style.display = "none";
                document.getElementById("Bock").style.display = "none";
                document.getElementById("Doppelbock").style.display = "none";
                document.getElementById("Licht Beer").style.display = "none";
                document.getElementById("Ice Beer").style.display = "none";
                document.getElementById("Malt Liquor").style.display = "none";
            }
            if(tipo_ale=="German Ale"){
                document.getElementById("IPANAMERICANA").style.display = "none";
                document.getElementById("American_Pale").style.display = "none";
                document.getElementById("Bitter").style.display = "none";
                document.getElementById("Strong").style.display = "none";
                document.getElementById("Weissbier").style.display = "block";
                document.getElementById("Belgian_Pale").style.display = "none";
                document.getElementById("Witbier").style.display = "none";
                document.getElementById("Saison").style.display = "none";
                document.getElementById("English_Porter").style.display = "none";
                document.getElementById("American_Porter").style.display = "none";
                document.getElementById("Oatmeal_Stout").style.display = "none";
                document.getElementById("Imperial_Stout").style.display = "none";
                document.getElementById("American_Stout").style.display = "none";
                document.getElementById("Irish_Stout").style.display = "none";
                document.getElementById("American Pilsner").style.display = "none";
                document.getElementById("German Pilsner").style.display = "none";
                document.getElementById("Bohemian Pilsner").style.display = "none";
                document.getElementById("Pale Lager").style.display = "none";
                document.getElementById("Dark Lager").style.display = "none";
                document.getElementById("Dunkel").style.display = "none";
                document.getElementById("Kölsch").style.display = "none";
                document.getElementById("Märzen").style.display = "none";
                document.getElementById("Bock").style.display = "none";
                document.getElementById("Doppelbock").style.display = "none";
                document.getElementById("Licht Beer").style.display = "none";
                document.getElementById("Ice Beer").style.display = "none";
                document.getElementById("Malt Liquor").style.display = "none";
            }
            if(tipo_ale=="Belgian Ale"){
                document.getElementById("IPANAMERICANA").style.display = "none";
                document.getElementById("American_Pale").style.display = "none";
                document.getElementById("Bitter").style.display = "none";
                document.getElementById("Strong").style.display = "none";
                document.getElementById("Weissbier").style.display = "none";
                document.getElementById("Belgian_Pale").style.display = "block";
                document.getElementById("Witbier").style.display = "block";
                document.getElementById("Saison").style.display = "block";
                document.getElementById("English_Porter").style.display = "none";
                document.getElementById("American_Porter").style.display = "none";
                document.getElementById("Oatmeal_Stout").style.display = "none";
                document.getElementById("Imperial_Stout").style.display = "none";
                document.getElementById("American_Stout").style.display = "none";
                document.getElementById("Irish_Stout").style.display = "none";
                document.getElementById("American Pilsner").style.display = "none";
                document.getElementById("German Pilsner").style.display = "none";
                document.getElementById("Bohemian Pilsner").style.display = "none";
                document.getElementById("Pale Lager").style.display = "none";
                document.getElementById("Dark Lager").style.display = "none";
                document.getElementById("Dunkel").style.display = "none";
                document.getElementById("Kölsch").style.display = "none";
                document.getElementById("Märzen").style.display = "none";
                document.getElementById("Bock").style.display = "none";
                document.getElementById("Doppelbock").style.display = "none";
                document.getElementById("Licht Beer").style.display = "none";
                document.getElementById("Ice Beer").style.display = "none";
                document.getElementById("Malt Liquor").style.display = "none";
            }
             if(tipo_ale=="Porter"){
                document.getElementById("IPANAMERICANA").style.display = "none";
                document.getElementById("American_Pale").style.display = "none";
                document.getElementById("Bitter").style.display = "none";
                document.getElementById("Strong").style.display = "none";
                document.getElementById("Weissbier").style.display = "none";
                document.getElementById("Belgian_Pale").style.display = "none";
                document.getElementById("Witbier").style.display = "none";
                document.getElementById("Saison").style.display = "none";
                document.getElementById("English_Porter").style.display = "block";
                document.getElementById("American_Porter").style.display = "block";
                document.getElementById("Oatmeal_Stout").style.display = "none";
                document.getElementById("Imperial_Stout").style.display = "none";
                document.getElementById("American_Stout").style.display = "none";
                document.getElementById("Irish_Stout").style.display = "none";
                document.getElementById("American Pilsner").style.display = "none";
                document.getElementById("German Pilsner").style.display = "none";
                document.getElementById("Bohemian Pilsner").style.display = "none";
                document.getElementById("Pale Lager").style.display = "none";
                document.getElementById("Dark Lager").style.display = "none";
                document.getElementById("Dunkel").style.display = "none";
                document.getElementById("Kölsch").style.display = "none";
                document.getElementById("Märzen").style.display = "none";
                document.getElementById("Bock").style.display = "none";
                document.getElementById("Doppelbock").style.display = "none";
                document.getElementById("Licht Beer").style.display = "none";
                document.getElementById("Ice Beer").style.display = "none";
                document.getElementById("Malt Liquor").style.display = "none";
            }
            if(tipo_ale=="Stout"){
                document.getElementById("IPANAMERICANA").style.display = "none";
                document.getElementById("American_Pale").style.display = "none";
                document.getElementById("Bitter").style.display = "none";
                document.getElementById("Strong").style.display = "none";
                document.getElementById("Weissbier").style.display = "none";
                document.getElementById("Belgian_Pale").style.display = "none";
                document.getElementById("Witbier").style.display = "none";
                document.getElementById("Saison").style.display = "none";
                document.getElementById("English_Porter").style.display = "none";
                document.getElementById("American_Porter").style.display = "none";
                document.getElementById("Oatmeal_Stout").style.display = "block";
                document.getElementById("Imperial_Stout").style.display = "block";
                document.getElementById("American_Stout").style.display = "block";
                document.getElementById("Irish_Stout").style.display = "block";
                document.getElementById("American Pilsner").style.display = "none";
                document.getElementById("German Pilsner").style.display = "none";
                document.getElementById("Bohemian Pilsner").style.display = "none";
                document.getElementById("Pale Lager").style.display = "none";
                document.getElementById("Dark Lager").style.display = "none";
                document.getElementById("Dunkel").style.display = "none";
                document.getElementById("Kölsch").style.display = "none";
                document.getElementById("Märzen").style.display = "none";
                document.getElementById("Bock").style.display = "none";
                document.getElementById("Doppelbock").style.display = "none";
                document.getElementById("Licht Beer").style.display = "none";
                document.getElementById("Ice Beer").style.display = "none";
                document.getElementById("Malt Liquor").style.display = "none";
            }
            if(tipo_ale=="Brown Ale"){
                document.getElementById("IPANAMERICANA").style.display = "none";
                document.getElementById("American_Pale").style.display = "none";
                document.getElementById("Bitter").style.display = "none";
                document.getElementById("Strong").style.display = "none";
                document.getElementById("Weissbier").style.display = "none";
                document.getElementById("Belgian_Pale").style.display = "none";
                document.getElementById("Witbier").style.display = "none";
                document.getElementById("Saison").style.display = "none";
                document.getElementById("English_Porter").style.display = "none";
                document.getElementById("American_Porter").style.display = "none";
                document.getElementById("Oatmeal_Stout").style.display = "none";
                document.getElementById("Imperial_Stout").style.display = "none";
                document.getElementById("American_Stout").style.display = "none";
                document.getElementById("Irish_Stout").style.display = "none";
                document.getElementById("American Pilsner").style.display = "none";
                document.getElementById("German Pilsner").style.display = "none";
                document.getElementById("Bohemian Pilsner").style.display = "none";
                document.getElementById("Pale Lager").style.display = "none";
                document.getElementById("Dark Lager").style.display = "none";
                document.getElementById("Dunkel").style.display = "none";
                document.getElementById("Kölsch").style.display = "none";
                document.getElementById("Märzen").style.display = "none";
                document.getElementById("Bock").style.display = "none";
                document.getElementById("Doppelbock").style.display = "none";
                document.getElementById("Licht Beer").style.display = "none";
                document.getElementById("Ice Beer").style.display = "none";
                document.getElementById("Malt Liquor").style.display = "none";
            }
            if(tipo_ale=="Lambic"){
                document.getElementById("IPANAMERICANA").style.display = "none";
                document.getElementById("American_Pale").style.display = "none";
                document.getElementById("Bitter").style.display = "none";
                document.getElementById("Strong").style.display = "none";
                document.getElementById("Weissbier").style.display = "none";
                document.getElementById("Belgian_Pale").style.display = "none";
                document.getElementById("Witbier").style.display = "none";
                document.getElementById("Saison").style.display = "none";
                document.getElementById("English_Porter").style.display = "none";
                document.getElementById("American_Porter").style.display = "none";
                document.getElementById("Oatmeal_Stout").style.display = "none";
                document.getElementById("Imperial_Stout").style.display = "none";
                document.getElementById("American_Stout").style.display = "none";
                document.getElementById("Irish_Stout").style.display = "none";
                document.getElementById("American Pilsner").style.display = "none";
                document.getElementById("German Pilsner").style.display = "none";
                document.getElementById("Bohemian Pilsner").style.display = "none";
                document.getElementById("Pale Lager").style.display = "none";
                document.getElementById("Dark Lager").style.display = "none";
                document.getElementById("Dunkel").style.display = "none";
                document.getElementById("Kölsch").style.display = "none";
                document.getElementById("Märzen").style.display = "none";
                document.getElementById("Bock").style.display = "none";
                document.getElementById("Doppelbock").style.display = "none";
                document.getElementById("Licht Beer").style.display = "none";
                document.getElementById("Ice Beer").style.display = "none";
                document.getElementById("Malt Liquor").style.display = "none";
            }
            if(tipo_ale=="Abadía"){
                document.getElementById("IPANAMERICANA").style.display = "none";
                document.getElementById("American_Pale").style.display = "none";
                document.getElementById("Bitter").style.display = "none";
                document.getElementById("Strong").style.display = "none";
                document.getElementById("Weissbier").style.display = "none";
                document.getElementById("Belgian_Pale").style.display = "none";
                document.getElementById("Witbier").style.display = "none";
                document.getElementById("Saison").style.display = "none";
                document.getElementById("English_Porter").style.display = "none";
                document.getElementById("American_Porter").style.display = "none";
                document.getElementById("Oatmeal_Stout").style.display = "none";
                document.getElementById("Imperial_Stout").style.display = "none";
                document.getElementById("American_Stout").style.display = "none";
                document.getElementById("Irish_Stout").style.display = "none";
                document.getElementById("American Pilsner").style.display = "none";
                document.getElementById("German Pilsner").style.display = "none";
                document.getElementById("Bohemian Pilsner").style.display = "none";
                document.getElementById("Pale Lager").style.display = "none";
                document.getElementById("Dark Lager").style.display = "none";
                document.getElementById("Dunkel").style.display = "none";
                document.getElementById("Kölsch").style.display = "none";
                document.getElementById("Märzen").style.display = "none";
                document.getElementById("Bock").style.display = "none";
                document.getElementById("Doppelbock").style.display = "none";
                document.getElementById("Licht Beer").style.display = "none";
                document.getElementById("Ice Beer").style.display = "none";
                document.getElementById("Malt Liquor").style.display = "none";
            }

        }

        function runtipolager() {

        var tipo_large = document.getElementById("tipo_large").value;

        if(tipo_large=="Pilsner_style"){
            
                document.getElementById("American_Pilsner").style.display = "block";
                document.getElementById("German Pilsner").style.display = "block";
                document.getElementById("Bohemian Pilsner").style.display = "block";
                document.getElementById("IPANAMERICANA").style.display = "none";
                document.getElementById("American_Pale").style.display = "none";
                document.getElementById("Bitter").style.display = "none";
                document.getElementById("Strong").style.display = "none";
                document.getElementById("Weissbier").style.display = "none";
                document.getElementById("Belgian_Pale").style.display = "none";
                document.getElementById("Witbier").style.display = "none";
                document.getElementById("Saison").style.display = "none";
                document.getElementById("English_Porter").style.display = "none";
                document.getElementById("American_Porter").style.display = "none";
                document.getElementById("Oatmeal_Stout").style.display = "none";
                document.getElementById("Imperial_Stout").style.display = "none";
                document.getElementById("American_Stout").style.display = "none";
                document.getElementById("Irish_Stout").style.display = "none";
                document.getElementById("Pale Lager").style.display = "none";
                document.getElementById("Dark Lager").style.display = "none";
                document.getElementById("Licht Beer").style.display = "none";
                document.getElementById("Ice Beer").style.display = "none";
                document.getElementById("Malt Liquor").style.display = "none";
                document.getElementById("Dunkel").style.display = "none";
                document.getElementById("Kölsch").style.display = "none";
                document.getElementById("Märzen").style.display = "none";
                document.getElementById("Bock").style.display = "none";
                document.getElementById("Doppelbock").style.display = "none";
            }

            if(tipo_large=="European_Lager"){
                 
                document.getElementById("Pale Lager").style.display = "block";
                document.getElementById("Dark Lager").style.display = "block";
                document.getElementById("IPANAMERICANA").style.display = "none";
                document.getElementById("American_Pale").style.display = "none";
                document.getElementById("Bitter").style.display = "none";
                document.getElementById("Strong").style.display = "none";
                document.getElementById("Weissbier").style.display = "none";
                document.getElementById("Belgian_Pale").style.display = "none";
                document.getElementById("Witbier").style.display = "none";
                document.getElementById("Saison").style.display = "none";
                document.getElementById("English_Porter").style.display = "none";
                document.getElementById("American_Porter").style.display = "none";
                document.getElementById("Oatmeal_Stout").style.display = "none";
                document.getElementById("Imperial_Stout").style.display = "none";
                document.getElementById("American_Stout").style.display = "none";
                document.getElementById("Irish_Stout").style.display = "none";
                document.getElementById("American_Pilsner").style.display = "none";
                document.getElementById("German Pilsner").style.display = "none";
                document.getElementById("Bohemian Pilsner").style.display = "none";
                document.getElementById("Licht Beer").style.display = "none";
                document.getElementById("Ice Beer").style.display = "none";
                document.getElementById("Malt Liquor").style.display = "none";
                document.getElementById("Dunkel").style.display = "none";
                document.getElementById("Kölsch").style.display = "none";
                document.getElementById("Märzen").style.display = "none";
                document.getElementById("Bock").style.display = "none";
                document.getElementById("Doppelbock").style.display = "none";  
                
            }
            if(tipo_large=="German_Lager"){
                
                document.getElementById("Dunkel").style.display = "block";
                document.getElementById("Kölsch").style.display = "block";
                document.getElementById("Märzen").style.display = "block";
                document.getElementById("Bock").style.display = "block";
                document.getElementById("Doppelbock").style.display = "block";
                document.getElementById("IPANAMERICANA").style.display = "none";
                document.getElementById("American_Pale").style.display = "none";
                document.getElementById("Bitter").style.display = "none";
                document.getElementById("Strong").style.display = "none";
                document.getElementById("Weissbier").style.display = "none";
                document.getElementById("Belgian_Pale").style.display = "none";
                document.getElementById("Witbier").style.display = "none";
                document.getElementById("Saison").style.display = "none";
                document.getElementById("English_Porter").style.display = "none";
                document.getElementById("American_Porter").style.display = "none";
                document.getElementById("Oatmeal_Stout").style.display = "none";
                document.getElementById("Imperial_Stout").style.display = "none";
                document.getElementById("American_Stout").style.display = "none";
                document.getElementById("Irish_Stout").style.display = "none";
                document.getElementById("American Pilsner").style.display = "none";
                document.getElementById("German Pilsner").style.display = "none";
                document.getElementById("Bohemian Pilsner").style.display = "none";
                document.getElementById("Pale Lager").style.display = "none";
                document.getElementById("Dark Lager").style.display = "none";
                document.getElementById("Licht Beer").style.display = "none";
                document.getElementById("Ice Beer").style.display = "none";
                document.getElementById("Malt Liquor").style.display = "none"; 
                
            }
            if(tipo_large=="American_Lager"){
                
                document.getElementById("Licht Beer").style.display = "block";
                document.getElementById("Ice Beer").style.display = "block";
                document.getElementById("Malt Liquor").style.display = "block";
                document.getElementById("IPANAMERICANA").style.display = "none";
                document.getElementById("American_Pale").style.display = "none";
                document.getElementById("Bitter").style.display = "none";
                document.getElementById("Strong").style.display = "none";
                document.getElementById("Weissbier").style.display = "none";
                document.getElementById("Belgian_Pale").style.display = "none";
                document.getElementById("Witbier").style.display = "none";
                document.getElementById("Saison").style.display = "none";
                document.getElementById("English_Porter").style.display = "none";
                document.getElementById("American_Porter").style.display = "none";
                document.getElementById("Oatmeal_Stout").style.display = "none";
                document.getElementById("Imperial_Stout").style.display = "none";
                document.getElementById("American_Stout").style.display = "none";
                document.getElementById("Irish_Stout").style.display = "none";
                document.getElementById("American Pilsner").style.display = "none";
                document.getElementById("German Pilsner").style.display = "none";
                document.getElementById("Bohemian Pilsner").style.display = "none";
                document.getElementById("Pale Lager").style.display = "none";
                document.getElementById("Dark Lager").style.display = "none";
                document.getElementById("Dunkel").style.display = "none";
                document.getElementById("Kölsch").style.display = "none";
                document.getElementById("Märzen").style.display = "none";
                document.getElementById("Bock").style.display = "none";
                document.getElementById("Doppelbock").style.display = "none";
            }


    }
    </script>
@endsection