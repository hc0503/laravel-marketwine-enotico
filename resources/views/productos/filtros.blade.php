
<div class="col-xl-3 col-lg-4 order-lg-1">
            <button class="sidebar-toggle position-left" data-toggle="modal" data-target="#modalShopFilters"><i class="icon-layout"></i></button>
            <aside class="sidebar sidebar-offcanvas">


              <!-- Widget Price Range-->
              <section class="widget widget-categories">
                <h3 class="widget-title">Rango de precio</h3> 
                <form action="{{url('/filtros')}}" class="price-range-slider" method="get" data-start-min="0" data-start-max="650" data-min="0" data-max="1000" data-step="1" >

                  {{ csrf_field() }}

                  <div class="ui-range-slider"></div>
                  <footer class="ui-range-slider-footer">
                    
                    <div class="column">
                      <div class="ui-range-values">
                        <div class="ui-range-value-min" id="min">€<span></span>
                          <input type="hidden" id="resultmin" name="resultmin">
                        </div>&nbsp;-&nbsp;
                        <div class="ui-range-value-max" id="max">€<span></span>
                          <input type="hidden" id="resultmax" name="resultmax">
                        </div>
                      </div>
                    </div>
                  </footer>
               
              </section>
              <!-- Widget Brand Filter-->
              <!-- Widget Categories-->

              <section class="widget widget-categories">
                <h3 class="widget-title">Clasificación</h3>
                <select name="select_subcate" id="choices-multiple-remove-button" placeholder="Selecciona la clasificación">
                  <option value="" selected="">Todas</option>
                  @foreach($subcates as $key => $subcate)
            <option value="{{$subcate->subcate}}">{{$subcate->subcate}}</option>
             @endforeach
                </select>
                  <input type="hidden" name="categoria" value="{{$cate}}">
                 <input type="hidden" name="subcate" id="subcate">
              </section>
              
              <section class="widget" id="tiposec">
                <h3 class="widget-title">Tipo</h3>
                <select id="choices-multiple-remove-button1" placeholder="Selecciona el tipo">
                  <option value="" selected="">Todos</option>
                  @foreach($tipos as $key => $tipo)
            <option value="{{$tipo->tipo}}">{{$tipo->tipo}}&nbsp;</option>
             @endforeach
                </select>
                <input type="hidden" name="tipo" id="tipo">
               
              </section>
              <!-- Widget Size Filter-->
              <section class="widget" id="dulzurasec">
                <h3 class="widget-title">Dulzura</h3>
                <select id="choices-multiple-remove-button2" placeholder="Selecciona la dulzura">
                  @foreach($dulzuras as $key => $dulzura)
            <option value="{{$dulzura->dulzura}}">{{$dulzura->dulzura}}&nbsp;</option>
             @endforeach
                </select>

                <input type="hidden" name="dulzura" id="dulzura">
                
              </section>
              <section class="widget" id="estilosec">
                <h3 class="widget-title">Estilo</h3>
                 <select id="choices-multiple-remove-button3" placeholder="Selecciona el estilo">
                  @foreach($estilos as $key => $estilo)
            <option value="{{$estilo->estilo}}">{{$estilo->estilo}}&nbsp;</option>
             @endforeach
                </select>
                <input type="hidden" name="estilo" id="estilo">
                
              </section>

              <section class="widget" id="colorsec">
                <h3 class="widget-title">Color</h3>
                 <select id="choices-multiple-remove-button14" placeholder="Selecciona el color">
                  @foreach($colores as $key => $color)
            <option value="{{$color->color}}">{{$color->color}}&nbsp;</option>
             @endforeach
                </select>
                <input type="hidden" name="color" id="color">
                
              </section>

              <section class="widget" id="saorsec">
                <h3 class="widget-title">Sabor</h3>
                 <select id="choices-multiple-remove-button15" placeholder="Selecciona el sabor">
                  @foreach($sabores as $key => $sabor)
            <option value="{{$sabor->sabor}}">{{$sabor->sabor}}&nbsp;</option>
             @endforeach
                </select>
                <input type="hidden" name="sabor" id="sabor">
                
              </section>

                <section class="widget" id="uvasec">
                <h3 class="widget-title">Variedad de Uva</h3>
                 <select id="choices-multiple-remove-button4" placeholder="Selecciona la variedad de uva">
                 
            <option value="">Todas&nbsp;</option>
              @foreach($uvas as $key => $uva)
            <option value="{{$uva->uva}}">{{$uva->uva}}&nbsp;</option>
             @endforeach
                </select>
                <input type="hidden" name="uva" id="uva">
              </section>
              <section class="widget" id="envejecimientosec">
                <h3 class="widget-title">Envejecimiento</h3>
                 <select id="choices-multiple-remove-button5" placeholder="Selecciona">
                 
            <option value="">Todos&nbsp;</option>
              @foreach($envejecimientos as $key => $envejecimiento)
            <option value="{{$envejecimiento->envejecimiento}}">{{$envejecimiento->envejecimiento}}&nbsp;</option>
             @endforeach
                </select>
                <input type="hidden" name="envejecimiento" id="envejecimiento">
              </section>
              <section class="widget" id="regionsec">
                <h3 class="widget-title">Región</h3>
                 <select id="choices-multiple-remove-button6" placeholder="Selecciona">
                 
            <option value="">Todas&nbsp;</option>
              @foreach($regiones as $key => $region)
            <option value="{{$region->region}}">{{$region->region}}&nbsp;</option>
             @endforeach
                </select>
                <input type="hidden" name="region" id="region">
              </section>
              <section class="widget" id="dosec">
                <h3 class="widget-title">Denominación de origen</h3>
                 <select id="choices-multiple-remove-button7" placeholder="Selecciona">
                 
            <option value="">Todas&nbsp;</option>
              @foreach($dos as $key => $do)
            <option value="{{$do->do}}">{{$do->do}}&nbsp;</option>
             @endforeach
                </select>
                <input type="hidden" name="do" id="don">
              </section>

              <section class="widget" id="vinificacionsec">
                <h3 class="widget-title">Vinificación</h3>
                 <select id="choices-multiple-remove-button11" placeholder="Selecciona">
                 
            <option value="">Todas&nbsp;</option>
              @foreach($vinificaciones as $key => $vinificacion)
            <option value="{{$vinificacion->vinificacion}}">{{$vinificacion->vinificacion}}&nbsp;</option>
             @endforeach
                </select>
                <input type="hidden" name="vinificacion" id="vinificacion">
              </section>

              <section class="widget" id="certificadossec">
                <h3 class="widget-title">Certificados</h3>
                 <select id="choices-multiple-remove-button12" placeholder="Selecciona">
                 
            <option value="">Todos&nbsp;</option>
              @foreach($certificados as $key => $certificado)
            <option value="{{$certificado->certificado}}">{{$certificado->certificado}}&nbsp;</option>
             @endforeach
                </select>
                <input type="hidden" name="certificado" id="certificado">
              </section>
              <section class="widget" id="productorsec">
                <h3 class="widget-title">Productor</h3>
                 <select id="choices-multiple-remove-button8" placeholder="Selecciona">
                 
            <option value="">Todos&nbsp;</option>
              @foreach($productores as $key => $productor)
            <option value="{{$productor->productor}}">{{$productor->productor}}&nbsp;</option>
             @endforeach
                </select>
                <input type="hidden" name="productor" id="productor">
              </section>
              <section class="widget" id="marcasec">
                <h3 class="widget-title">Marca</h3>
                 <select id="choices-multiple-remove-button9" placeholder="Selecciona">
                 
            <option value="">Todas&nbsp;</option>
              @foreach($marcas as $key => $marca)
            <option value="{{$marca->marca}}">{{$marca->marca}}&nbsp;</option>
             @endforeach
                </select>
                <input type="hidden" name="marca" id="marca">
              </section>
              <section class="widget" id="anadasec">
                <h3 class="widget-title">Añada</h3>
                 <select id="choices-multiple-remove-button13" placeholder="Selecciona">
                 
            <option value="">Todas&nbsp;</option>
              @foreach($anadas as $key => $anada)
            <option value="{{$anada->anada}}">{{$anada->anada}}&nbsp;</option>
             @endforeach
                </select>
                <input type="hidden" name="anada" id="anada">
              </section>
              <section class="widget" id="formatosec">
                <h3 class="widget-title">Formato</h3>
                 <select id="choices-multiple-remove-button10" placeholder="Selecciona">
                 
            <option value="">Todos&nbsp;</option>
              @foreach($formatos as $key => $formato)
            <option value="{{$formato->formato}}">{{$formato->formato}}&nbsp;</option>
             @endforeach
                </select>
                <input type="hidden" name="formato" id="formato">
              </section>
              <div class="column">
                      <button class="btn btn-outline-primary btn-sm" type="submit">Filtrar</button>
                    </div>
              </form>
            </aside>
          </div>
         