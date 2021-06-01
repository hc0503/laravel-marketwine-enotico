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
                         
        {!! Form::model($productos,['route' => ['productos.caracteristicas',$productos->id], 'method' => 'put', 'novalidate','files'=>true]) !!}
                        <div class="row">
                             <div class="col-lg-6">
                            <div class="form-group mb-3">
                                        <label for="example-palaceholder">Nombre del producto <span class="text-danger">*</span></label>
                                        {!! Form::text('nombre', null, ['class' => 'form-control' , 'placeholder' => 'Nombre del producto', 'required' => 'required']) !!}
                            </div>

                            </div>
                            
                            <!-- end col -->
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                        <label for="example-palaceholder">Referencia interna</label>
                                        {!! Form::text('ref_interna', null, ['class' => 'form-control' , 'placeholder' => 'Referencia Interna']) !!}
                                    </div>
                                
                            </div>
                        </div>

                         <div class="row">
                               
                               
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Descripción<span class="text-danger">*</span></h4>
                                        

                                        <!-- basic summernote-->
                                        
                                        <div class="form-group">
                            <textarea class="form-control" name="descripcion" id="summernote-basic"></textarea>
                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->                                
                            </div><!-- end col -->
                        </div>

                        <div class="row">
                              


                        
                            <div class="col-lg-6">
                                 <div class="form-group">
                                    <label>Pais</label>
                                    <select name="pais" class="form-control" required="required">
                                        
<option value="España" id="ES" selected="selected">España</option>

                                    </select>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="form-group">
                                    <label>Region</label>
                                    <select id="selectize-maximum" name="region" required="required">
                                        <option value="">Selecciona una opción...</option>
                                        <option value="AL">Andalucía</option>
                                        <option value="AK">Aragón</option>
                                        <option value="AZ">Asturias</option>
                                        <option value="AR">Cantabria</option>
                                        <option value="CA">Castilla - La Mancha</option>
                                        <option value="CO">Castilla y León</option>
                                        <option value="CT">Cataluña</option>
                                        <option value="DE">Galicia</option>
                                        <option value="DC">Canarias</option>
                                        <option value="FL">Islas Baleares</option>
                                        <option value="GA">Extremadura</option>
                                        <option value="HI">La Rioja</option>
                                        <option value="ID">Madrid</option>
                                        <option value="IL">Murcia</option>
                                        <option value="IN">Navarro</option>
                                        <option value="IA">País Vasco</option>
                                        <option value="KS">Comunidad Valenciana</option>
                                        <option value="KY">Sin DO / IGP</option>
                                        <option value="LA">Condado de Huelva DO</option>
                                        <option value="ME">Granada VC</option>
                                        <option value="MD">Jerez-Xérès-Sherry DO</option>
                                        <option value="MA">Lebrija VC</option>
                                        <option value="MI">Málaga DO</option>
                                        <option value="MN">Manzanilla Sanlúcar de Barrameda DO</option>
                                        <option value="MS">Montilla-Moriles DO</option>
                                        <option value="MO">Sierras de Málaga DO</option>
                                        <option value="MT">Altiplano de Sierra Nevada VT</option>
                                        <option value="NE">Bailén VT</option>
                                        <option value="NV">Cádiz VT</option>
                                        <option value="NH">Córdoba VT</option>
                                        <option value="NJ">Cumbres del Guadalfeo VT</option>
                                        <option value="NM">Desierto de Almería VT</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="OH">Ohio</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="OR">Oregon</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="TX">Texas</option>
                                        <option value="UT">Utah</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WA">Washington</option>
                                        <option value="WV">West Virginia</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="WY">Wyoming</option>
                                    </select>
                                    <div class="clearfix"></div>
                                </div>


                               

                                <div class="form-group">
                                    <label>Denominación de origen</label>
                                    <select name="do" class="form-control" required="required">
                                        <option value="">Selecciona una opción...</option>
                                        <option value="AL">Andalucía</option>
                                        <option value="AK">Aragón</option>
                                        <option value="AZ">Asturias</option>
                                        <option value="AR">Cantabria</option>
                                        <option value="CA">Castilla - La Mancha</option>
                                        <option value="CO">Castilla y León</option>
                                        <option value="CT">Cataluña</option>
                                        <option value="DE">Galicia</option>
                                        <option value="DC">Canarias</option>
                                        <option value="FL">Islas Baleares</option>
                                        <option value="GA">Extremadura</option>
                                        <option value="HI">La Rioja</option>
                                        <option value="ID">Madrid</option>
                                        <option value="IL">Murcia</option>
                                        <option value="IN">Navarro</option>
                                        <option value="IA">País Vasco</option>
                                        <option value="KS">Comunidad Valenciana</option>
                                        <option value="KY">Sin DO / IGP</option>
                                        <option value="LA">Condado de Huelva DO</option>
                                        <option value="ME">Granada VC</option>
                                        <option value="MD">Jerez-Xérès-Sherry DO</option>
                                        <option value="MA">Lebrija VC</option>
                                        <option value="MI">Málaga DO</option>
                                        <option value="MN">Manzanilla Sanlúcar de Barrameda DO</option>
                                        <option value="MS">Montilla-Moriles DO</option>
                                        <option value="MO">Sierras de Málaga DO</option>
                                        <option value="MT">Altiplano de Sierra Nevada VT</option>
                                        <option value="NE">Bailén VT</option>
                                        <option value="NV">Cádiz VT</option>
                                        <option value="NH">Córdoba VT</option>
                                        <option value="NJ">Cumbres del Guadalfeo VT</option>
                                        <option value="NM">Desierto de Almería VT</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="OH">Ohio</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="OR">Oregon</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="TX">Texas</option>
                                        <option value="UT">Utah</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WA">Washington</option>
                                        <option value="WV">West Virginia</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="WY">Wyoming</option>
                                    </select>
                                    <div class="clearfix"></div>
                                </div>


                            </div>
                        </div>
                            <div class="row">
                            

                            <div class="col-md-6">
                                <label class="mb-1 mt-3 mt-md-0 font-weight-bold text-muted">Marca</label>
                                <select name="marca" class="form-control">
                                    @foreach($marcas as $marca)
                                    <option value="{{$marca->nombre}}">{{$marca->nombre}}</option>
                                    @endforeach
                                </select>
                               
                               
                                
                                 <div class="clearfix"></div>
                            </div> <!-- end col -->
                            <div class="col-md-6" style="margin-top: 25px">
                                <a href="#" class="btn btn-success" onclick="nuevamarca()">+</a>

                            </div>
                            <div class="clearfix"></div>
                            </div> <!-- end row -->
                            <br>
                            <div class="row" id="nuevamarca" style="display: none;">
                                <div class="col-md-6">
                                    <label class="mb-1 mt-3 mt-md-0 font-weight-bold text-muted">Nueva Marca</label>
                                    <input type="text" class="form-control" name="nuevamarca" placeholder="ingrese una nueva marca">
                                </div>

                            </div>

                           <br><br>
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
    <script type="text/javascript">
        function nuevamarca() {
            document.getElementById("nuevamarca").style.display = "block";
        }
    </script>
@endsection