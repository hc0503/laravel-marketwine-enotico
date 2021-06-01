 @extends('layouts.app')

@section('content')

<!-- Off-Canvas Wrapper-->
    <div class="offcanvas-wrapper">
      <!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Selección de Vinos</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="{{url('/')}}">Inicio</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>Selección de Vinos</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Content-->
      <div class="container padding-bottom-3x mb-1">
        <div class="row">
          <!-- Products-->
          <div class="col-xl-9 col-lg-8 order-lg-2">
            <!-- Shop Toolbar-->
           
            <!-- Products Grid-->
            <div class="isotope-grid cols-3 mb-2">
              <div class="gutter-sizer"></div>
              <div class="grid-sizer"></div>
              @foreach($productos as $product)
              <!-- Product-->
              <div class="grid-item">
                <div class="product-card">
                  <a class="product-thumb" href="{{url('/single')}}/{{$product->id}}"><img src="{{$product->ruta}}" style="width: 236px; height: 305px" width="236" height="305" alt="Product"></a>
                  <h3 class="product-title"><a href="#">{{$product->nombre}}</a></h3>
                  <h4 class="product-price">
                    € {{$product->precio}}
                  </h4>
                  <div class="product-buttons">
                     {!! Form::open(['route'=>'producto.AddToCart','method'=>'post','files'=>true]) !!}

<input type="text" name="id" value="{{$product->id}}" style="visibility: hidden;">
                <div class="form-group">
                  <label for="quantity">Cantidad</label>
                  @if($product->minimo != null)
                 <input type="number" name="cantidad" value="{{$product->minimo}}"  min="{{$product->minimo}}" max="{{$product->stock}}" step="{{$product->multiplo}}">
                 @else
                  <input type="number" name="cantidad" value="1"  min="1" max="{{$product->stock}}" step="{{$product->multiplo}}">
                  @endif
                </div>
              
                
                   
                    <button type="submit" class="btn btn-outline-primary btn-sm">Comprar</a>
                     
              {!! Form::close() !!}
                  </div>
                </div>
              </div>
              
             @endforeach
            </div>
            <!-- Pagination-->
           <center>{{ $productos->links() }}</center>
          </div>
          <!-- Sidebar          -->
          @include('productos.filtros')
        </div>
      </div>



@endsection


@section('script')
<script type="text/javascript">
$(document).ready(function(){

 var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
 removeItemButton: false,
 maxItemCount:5,
 searchResultLimit:5,
 renderChoiceLimit:5
 });

 var multipleCancelButton1 = new Choices('#choices-multiple-remove-button1', {
 removeItemButton: false,
 maxItemCount:5,
 searchResultLimit:5,
 renderChoiceLimit:5
 });

 var multipleCancelButton2 = new Choices('#choices-multiple-remove-button2', {
 removeItemButton: false,
 maxItemCount:5,
 searchResultLimit:5,
 renderChoiceLimit:5
 });
 var multipleCancelButton3 = new Choices('#choices-multiple-remove-button3', {
 removeItemButton: false,
 maxItemCount:5,
 searchResultLimit:5,
 renderChoiceLimit:5
 });
 var multipleCancelButton4 = new Choices('#choices-multiple-remove-button4', {
 removeItemButton: false,
 maxItemCount:5,
 searchResultLimit:5,
 renderChoiceLimit:5
 });
 var multipleCancelButton5 = new Choices('#choices-multiple-remove-button5', {
 removeItemButton: false,
 maxItemCount:5,
 searchResultLimit:5,
 renderChoiceLimit:5
 });
 var multipleCancelButton6 = new Choices('#choices-multiple-remove-button6', {
 removeItemButton: false,
 maxItemCount:5,
 searchResultLimit:5,
 renderChoiceLimit:5
 });
 var multipleCancelButton7 = new Choices('#choices-multiple-remove-button7', {
 removeItemButton: false,
 maxItemCount:5,
 searchResultLimit:5,
 renderChoiceLimit:5
 });
 var multipleCancelButton8 = new Choices('#choices-multiple-remove-button8', {
 removeItemButton: false,
 maxItemCount:5,
 searchResultLimit:5,
 renderChoiceLimit:5
 });
 var multipleCancelButton9 = new Choices('#choices-multiple-remove-button9', {
 removeItemButton: false,
 maxItemCount:5,
 searchResultLimit:5,
 renderChoiceLimit:5
 });
 var multipleCancelButton10 = new Choices('#choices-multiple-remove-button10', {
 removeItemButton: false,
 maxItemCount:5,
 searchResultLimit:5,
 renderChoiceLimit:5
 });
 var multipleCancelButton11 = new Choices('#choices-multiple-remove-button11', {
 removeItemButton: false,
 maxItemCount:5,
 searchResultLimit:5,
 renderChoiceLimit:5
 });
 var multipleCancelButton12 = new Choices('#choices-multiple-remove-button12', {
 removeItemButton: false,
 maxItemCount:5,
 searchResultLimit:5,
 renderChoiceLimit:5
 });
 var multipleCancelButton13 = new Choices('#choices-multiple-remove-button13', {
 removeItemButton: false,
 maxItemCount:5,
 searchResultLimit:5,
 renderChoiceLimit:5
 });
 var multipleCancelButton14 = new Choices('#choices-multiple-remove-button14', {
 removeItemButton: false,
 maxItemCount:5,
 searchResultLimit:5,
 renderChoiceLimit:5
 });
 var multipleCancelButton15 = new Choices('#choices-multiple-remove-button15', {
 removeItemButton: false,
 maxItemCount:5,
 searchResultLimit:5,
 renderChoiceLimit:5
 });

  var subcate = $('#choices-multiple-remove-button').val();
  $('#subcate').val(subcate);
 var tipo = $('#choices-multiple-remove-button1').val();
  $('#tipo').val(tipo);
var dulzura = $('#choices-multiple-remove-button2').val();
  $('#dulzura').val(dulzura);
var estilo = $('#choices-multiple-remove-button3').val();
  $('#estilo').val(estilo);
var uva = $('#choices-multiple-remove-button4').val();
  $('#uva').val(uva);
var envejecimiento = $('#choices-multiple-remove-button5').val();
  $('#envejecimiento').val(envejecimiento);
var region = $('#choices-multiple-remove-button6').val();
  $('#region').val(region);
var don = $('#choices-multiple-remove-button7').val();
  $('#don').val(don);
var vinificacion = $('#choices-multiple-remove-button11').val();
$('#vinificacion').val(vinificacion);
var certificados = $('#choices-multiple-remove-button12').val();
$('#certificados').val(certificados);
var productor = $('#choices-multiple-remove-button8').val();
  $('#productor').val(productor);
var marca = $('#choices-multiple-remove-button9').val();
  $('#marca').val(marca);
var anada = $('#choices-multiple-remove-button13').val();
  $('#anada').val(anada);
var formato = $('#choices-multiple-remove-button10').val();
  $('#formato').val(formato);
var color = $('#choices-multiple-remove-button14').val();
  $('#color').val(color);
var sabor = $('#choices-multiple-remove-button15').val();
  $('#sabor').val(sabor);
 });



</script>
<script type="text/javascript">
  $('#choices-multiple-remove-button').change(function(){
    var subcate = $('#choices-multiple-remove-button').val();
  $('#subcate').val(subcate);
  if (subcate=='Vino especial & generoso') {
    document.getElementById('tiposec').style.display = "none";
    document.getElementById('dulzurasec').style.display = "block";
    document.getElementById('uvasec').style.display = "block";
    document.getElementById('envejecimientosec').style.display = "block";
    document.getElementById('regionsec').style.display = "block";
    document.getElementById('dosec').style.display = "block";
    document.getElementById('productorsec').style.display = "block";
    document.getElementById('marcasec').style.display = "block";
    document.getElementById('formatosec').style.display = "block";
    document.getElementById('vinificacionsec').style.display = "none";
    document.getElementById('certificadossec').style.display = "none";
    document.getElementById('anadasec').style.display = "none";  

    document.getElementById('estilosec').style.display = "none";
    document.getElementById('colorsec').style.display = "none";
    document.getElementById('saborsec').style.display = "none";     
  }
  if (subcate=='Espumoso') {
    document.getElementById('tiposec').style.display = "block";
    document.getElementById('dulzurasec').style.display = "block";
    document.getElementById('uvasec').style.display = "block";
    document.getElementById('envejecimientosec').style.display = "block";
    document.getElementById('regionsec').style.display = "block";
    document.getElementById('dosec').style.display = "block";
    document.getElementById('productorsec').style.display = "block";
    document.getElementById('marcasec').style.display = "block";
    document.getElementById('formatosec').style.display = "block";
    document.getElementById('vinificacionsec').style.display = "block";
    document.getElementById('certificadossec').style.display = "block";
    document.getElementById('anadasec').style.display = "block";

    document.getElementById('estilosec').style.display = "none";
    document.getElementById('colorsec').style.display = "none";
    document.getElementById('saborsec').style.display = "none";       
  }
  if (subcate=='Vino tranquilo') {
    document.getElementById('tiposec').style.display = "block";
    document.getElementById('dulzurasec').style.display = "block";
    document.getElementById('uvasec').style.display = "block";
    document.getElementById('envejecimientosec').style.display = "block";
    document.getElementById('regionsec').style.display = "block";
    document.getElementById('dosec').style.display = "block";
    document.getElementById('productorsec').style.display = "block";
    document.getElementById('marcasec').style.display = "block";
    document.getElementById('formatosec').style.display = "block";
    document.getElementById('vinificacionsec').style.display = "block";
    document.getElementById('certificadossec').style.display = "block";
    document.getElementById('anadasec').style.display = "block"; 

    document.getElementById('estilosec').style.display = "none";
    document.getElementById('colorsec').style.display = "none";
    document.getElementById('saborsec').style.display = "none";   
  }
  if (subcate=='Ale') {
    document.getElementById('tiposec').style.display = "block";
    document.getElementById('dulzurasec').style.display = "none";
    document.getElementById('uvasec').style.display = "none";
    document.getElementById('envejecimientosec').style.display = "none";
    document.getElementById('regionsec').style.display = "none";
    document.getElementById('dosec').style.display = "none";
    document.getElementById('productorsec').style.display = "block";
    document.getElementById('marcasec').style.display = "block";
    document.getElementById('formatosec').style.display = "block";
    document.getElementById('vinificacionsec').style.display = "none";
    document.getElementById('certificadossec').style.display = "none";
    document.getElementById('anadasec').style.display = "none"; 

    //cerveza
    document.getElementById('estilosec').style.display = "block";
    document.getElementById('colorsec').style.display = "block";
    document.getElementById('saborsec').style.display = "block";

  }

  if (subcate=='Lager') {
    document.getElementById('tiposec').style.display = "block";
    document.getElementById('dulzurasec').style.display = "none";
    document.getElementById('uvasec').style.display = "none";
    document.getElementById('envejecimientosec').style.display = "none";
    document.getElementById('regionsec').style.display = "none";
    document.getElementById('dosec').style.display = "none";
    document.getElementById('productorsec').style.display = "block";
    document.getElementById('marcasec').style.display = "block";
    document.getElementById('formatosec').style.display = "block";
    document.getElementById('vinificacionsec').style.display = "none";
    document.getElementById('certificadossec').style.display = "none";
    document.getElementById('anadasec').style.display = "none"; 

    //cerveza
    document.getElementById('estilosec').style.display = "block";
    document.getElementById('colorsec').style.display = "block";
    document.getElementById('saborsec').style.display = "block";

  }

   if (subcate=='Hidromiel') {
    document.getElementById('tiposec').style.display = "none";
    document.getElementById('dulzurasec').style.display = "block";
    document.getElementById('uvasec').style.display = "none";
    document.getElementById('envejecimientosec').style.display = "none";
    document.getElementById('regionsec').style.display = "block";
    document.getElementById('dosec').style.display = "none";
    document.getElementById('productorsec').style.display = "block";
    document.getElementById('marcasec').style.display = "block";
    document.getElementById('formatosec').style.display = "block";
    document.getElementById('vinificacionsec').style.display = "none";
    document.getElementById('certificadossec').style.display = "none";
    document.getElementById('anadasec').style.display = "none"; 

    //cerveza
    document.getElementById('estilosec').style.display = "block";
    document.getElementById('colorsec').style.display = "none";
    document.getElementById('saborsec').style.display = "none";

  }

  if (subcate=='Sidras & otros vinos de fruta') {
    document.getElementById('tiposec').style.display = "none";
    document.getElementById('dulzurasec').style.display = "block";
    document.getElementById('uvasec').style.display = "none";
    document.getElementById('envejecimientosec').style.display = "none";
    document.getElementById('regionsec').style.display = "block";
    document.getElementById('dosec').style.display = "none";
    document.getElementById('productorsec').style.display = "block";
    document.getElementById('marcasec').style.display = "block";
    document.getElementById('formatosec').style.display = "block";
    document.getElementById('vinificacionsec').style.display = "none";
    document.getElementById('certificadossec').style.display = "none";
    document.getElementById('anadasec').style.display = "none"; 

    //cerveza
    document.getElementById('estilosec').style.display = "block";
    document.getElementById('colorsec').style.display = "none";
    document.getElementById('saborsec').style.display = "none";

  }


});

  $('#choices-multiple-remove-button1').change(function(){
    var tipo = $('#choices-multiple-remove-button1').val();
  $('#tipo').val(tipo);
});
  $('#choices-multiple-remove-button2').change(function(){
    var dulzura = $('#choices-multiple-remove-button2').val();
  $('#dulzura').val(dulzura);
});
  $('#choices-multiple-remove-button3').change(function(){
    var estilo = $('#choices-multiple-remove-button3').val();
  $('#estilo').val(estilo);
});
  $('#choices-multiple-remove-button4').change(function(){
    var uva = $('#choices-multiple-remove-button4').val();
  $('#uva').val(uva);
});
  $('#choices-multiple-remove-button5').change(function(){
    var envejecimiento = $('#choices-multiple-remove-button5').val();
  $('#envejecimiento').val(envejecimiento);
});
  $('#choices-multiple-remove-button6').change(function(){
    var region = $('#choices-multiple-remove-button6').val();
  $('#region').val(region);
});
  $('#choices-multiple-remove-button7').change(function(){
    var don = $('#choices-multiple-remove-button7').val();
  $('#don').val(don);
});
  $('#choices-multiple-remove-button8').change(function(){
    var productor = $('#choices-multiple-remove-button8').val();
  $('#productor').val(productor);
});
  $('#choices-multiple-remove-button9').change(function(){
    var marca = $('#choices-multiple-remove-button9').val();
  $('#marca').val(marca);
});
  $('#choices-multiple-remove-button10').change(function(){
    var formato = $('#choices-multiple-remove-button10').val();
  $('#formato').val(formato);
});
  $('#choices-multiple-remove-button11').change(function(){
    var vinificacion = $('#choices-multiple-remove-button11').val();
  $('#vinificacion').val(vinificacion);
});
  $('#choices-multiple-remove-button12').change(function(){
    var certificado = $('#choices-multiple-remove-button12').val();
  $('#certificado').val(certificado);
});
  $('#choices-multiple-remove-button13').change(function(){
    var anada = $('#choices-multiple-remove-button13').val();
  $('#anada').val(anada);
});
  $('#choices-multiple-remove-button14').change(function(){
    var color = $('#choices-multiple-remove-button14').val();
  $('#color').val(color);
});
  $('#choices-multiple-remove-button15').change(function(){
    var sabor = $('#choices-multiple-remove-button15').val();
  $('#sabor').val(sabor);
});
</script>
<script type="text/javascript">
  $('#min').change(function(){
    var min = $('#min').val();
  $('#resultmin').val(min);
});
  $('#max').change(function(){
    var max = $('#max').val();
  $('#resultmax').val(max);
});
</script>
@endsection
