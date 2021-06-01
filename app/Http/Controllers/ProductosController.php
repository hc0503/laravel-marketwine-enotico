<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\Marcas;
use App\ImgProducto;
use App\Categorias;
use App\Subcate;
use Auth;
use DB;
use App\Cart;
use Session;

class ProductosController extends Controller
{
    public $pathImg = 'img/shop/products/';

    public function vinos()
    {
        
    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);
    $productose = $cart->items;

    	$productos=Productos::where('productos.aprobado', 1)
        ->where('productos.cate_principal', 1)
             ->join('img_productos', 'productos.id', '=', 'img_productos.producto_id')
             ->select("productos.id as id","productos.nombre as nombre","productos.ref_interna as ref_interna", "productos.marca as marca","productos.stock as stock","productos.precio as precio","productos.subcate as subcate","img_productos.ruta as ruta")
       ->paginate(12);
       $cate = 1;
       $subcates = Productos::select('subcate', DB::raw('count(*) as total'))
       ->where('cate_principal', $cate)
       ->where('subcate', "!=", "''")
       ->where('aprobado', 1)
       ->groupBy('subcate')
       ->get();
       $tipos = Productos::select('tipo', DB::raw('count(*) as totaltipo'))
       ->where('cate_principal', $cate)
       ->where('tipo', "!=", "''")
       ->where('aprobado', 1)
       ->groupBy('tipo')
       ->get();
       $dulzuras = Productos::select('dulzura', DB::raw('count(*) as totaldulzura'))
       ->where('cate_principal', $cate)
       ->where('aprobado', 1)
       ->groupBy('dulzura')
       ->get();
       $estilos = Productos::select('estilo', DB::raw('count(*) as totalestilo'))
       ->where('cate_principal', $cate)
       ->where('aprobado', 1)
       ->groupBy('estilo')
       ->get();
       $colores = Productos::select('color', DB::raw('count(*) as totalcolor'))
       ->where('cate_principal', 1)
       ->where('aprobado', 1)
       ->groupBy('color')
       ->get();
       $sabores = Productos::select('sabor', DB::raw('count(*) as totalsabor'))
       ->where('cate_principal', 1)
       ->where('aprobado', 1)
       ->groupBy('sabor')
       ->get();
       $uvas = Productos::select('uva', DB::raw('count(*) as totaluva'))
       ->where('cate_principal', $cate)
       ->where('aprobado', 1)
       ->groupBy('uva')
       ->get();
       $envejecimientos = Productos::select('envejecimiento', DB::raw('count(*) as totalenvejecimiento'))
       ->where('cate_principal', $cate)
       ->where('aprobado', 1)
       ->groupBy('envejecimiento')
       ->get();
       $regiones = Productos::select('region', DB::raw('count(*) as totalregion'))
       ->where('cate_principal', $cate)
       ->where('aprobado', 1)
       ->groupBy('region')
       ->get();
       $dos = Productos::select('do', DB::raw('count(*) as totaldo'))
       ->where('cate_principal', $cate)
       ->where('aprobado', 1)
       ->groupBy('do')
       ->get();
       $productores = Productos::select('productor', DB::raw('count(*) as totalproductor'))
       ->where('cate_principal', $cate)
       ->where('aprobado', 1)
       ->groupBy('productor')
       ->get();
       $marcas = Productos::select('marca', DB::raw('count(*) as totalmarca'))
       ->where('cate_principal', $cate)
       ->where('aprobado', 1)
       ->groupBy('marca')
       ->get();
       $formatos = Productos::select('formato', DB::raw('count(*) as totalformato'))
       ->where('cate_principal', $cate)
       ->where('aprobado', 1)
       ->groupBy('formato')
       ->get();

       $vinificaciones = Productos::select('vinificacion', DB::raw('count(*) as totalvinificacion'))
       ->where('cate_principal', 1)
       ->where('aprobado', 1)
       ->groupBy('vinificacion')
       ->get();
       $certificados = Productos::select('cert', DB::raw('count(*) as totalcert'))
       ->where('cate_principal', 1)
       ->where('aprobado', 1)
       ->groupBy('cert')
       ->get();
       $anadas = Productos::select('anada', DB::raw('count(*) as totalanada'))
       ->where('cate_principal', 1)
       ->where('aprobado', 1)
       ->groupBy('anada')
       ->get();
                
        return view('productos.list', ['productose' => $productose,'productos' => $productos, 'subcates' => $subcates, 'tipos' => $tipos, 'dulzuras' => $dulzuras, 'estilos' => $estilos, 'uvas' => $uvas, 'envejecimientos' => $envejecimientos, 'regiones' => $regiones, 'dos' => $dos, 'productores' => $productores, 'marcas' => $marcas, 'formatos' => $formatos, 'vinificaciones' => $vinificaciones, 'certificados' => $certificados, 'anadas' => $anadas, 'cate' => $cate, 'colores' => $colores, 'sabores' => $sabores]); 

                
        
    } 

    public function cerveza()
    {

      $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);
    $productose = $cart->items;

        $productos=Productos::where('productos.aprobado', 1)
        ->where('productos.cate_principal', 2)
             ->join('img_productos', 'productos.id', '=', 'img_productos.producto_id')
             ->select("productos.id as id","productos.nombre as nombre","productos.ref_interna as ref_interna", "productos.marca as marca","productos.stock as stock","productos.precio as precio","productos.subcate as subcate","img_productos.ruta as ruta")     
       ->paginate(12);
       $cate = 2;
       $subcates = Productos::select('subcate', DB::raw('count(*) as total'))
       ->where('cate_principal','=', 2)
       ->where('subcate', "!=", "''")
       ->where('aprobado', 1)
       ->groupBy('subcate')
       ->get();
       $tipos = Productos::select('tipo', DB::raw('count(*) as totaltipo'))
       ->where('cate_principal', 2)
       ->where('tipo', "!=", "''")
       ->where('aprobado', 1)
       ->groupBy('tipo')
       ->get();
       $dulzuras = Productos::select('dulzura', DB::raw('count(*) as totaldulzura'))
       ->where('cate_principal', 2)
       ->where('aprobado', 1)
       ->groupBy('dulzura')
       ->get();
       $estilos = Productos::select('estilo', DB::raw('count(*) as totalestilo'))
       ->where('cate_principal', 2)
       ->where('aprobado', 1)
       ->groupBy('estilo')
       ->get();
       $colores = Productos::select('color', DB::raw('count(*) as totalcolor'))
       ->where('cate_principal', 2)
       ->where('aprobado', 1)
       ->groupBy('color')
       ->get();
       $sabores = Productos::select('sabor', DB::raw('count(*) as totalsabor'))
       ->where('cate_principal', 2)
       ->where('aprobado', 1)
       ->groupBy('sabor')
       ->get();
       $uvas = Productos::select('uva', DB::raw('count(*) as totaluva'))
       ->where('cate_principal', 2)
       ->where('aprobado', 1)
       ->groupBy('uva')
       ->get();
       $envejecimientos = Productos::select('envejecimiento', DB::raw('count(*) as totalenvejecimiento'))
       ->where('cate_principal', 2)
       ->where('aprobado', 1)
       ->groupBy('envejecimiento')
       ->get();
       $regiones = Productos::select('region', DB::raw('count(*) as totalregion'))
       ->where('cate_principal', 2)
       ->where('aprobado', 1)
       ->groupBy('region')
       ->get();
       $dos = Productos::select('do', DB::raw('count(*) as totaldo'))
       ->where('cate_principal', 2)
       ->where('aprobado', 1)
       ->groupBy('do')
       ->get();
       $productores = Productos::select('productor', DB::raw('count(*) as totalproductor'))
       ->where('cate_principal', 2)
       ->where('aprobado', 1)
       ->groupBy('productor')
       ->get();
       $marcas = Productos::select('marca', DB::raw('count(*) as totalmarca'))
       ->where('cate_principal', 2)
       ->where('aprobado', 1)
       ->groupBy('marca')
       ->get();
       $formatos = Productos::select('formato', DB::raw('count(*) as totalformato'))
       ->where('cate_principal', 2)
       ->where('aprobado', 1)
       ->groupBy('formato')
       ->get();

       $vinificaciones = Productos::select('vinificacion', DB::raw('count(*) as totalvinificacion'))
       ->where('cate_principal', 2)
       ->where('aprobado', 1)
       ->groupBy('vinificacion')
       ->get();
       $certificados = Productos::select('cert', DB::raw('count(*) as totalcert'))
       ->where('cate_principal', 2)
       ->where('aprobado', 1)
       ->groupBy('cert')
       ->get();
       $anadas = Productos::select('anada', DB::raw('count(*) as totalanada'))
       ->where('cate_principal', 2)
       ->where('aprobado', 1)
       ->groupBy('anada')
       ->get();
                
        return view('productos.list', ['productose' => $productose,'productos' => $productos, 'subcates' => $subcates, 'tipos' => $tipos, 'dulzuras' => $dulzuras, 'estilos' => $estilos, 'uvas' => $uvas, 'envejecimientos' => $envejecimientos, 'regiones' => $regiones, 'dos' => $dos, 'productores' => $productores, 'marcas' => $marcas, 'formatos' => $formatos, 'vinificaciones' => $vinificaciones, 'certificados' => $certificados, 'anadas' => $anadas, 'cate' => $cate, 'colores' => $colores, 'sabores' => $sabores]); 
    } 


    public function destilados()
    {
        $productos=Productos::where('productos.aprobado', 1)
        ->where('productos.cate_principal', 3)
             ->join('img_productos', 'productos.id', '=', 'img_productos.producto_id')
             ->select("productos.id as id","productos.nombre as nombre","productos.ref_interna as ref_interna", "productos.marca as marca","productos.stock as stock","productos.precio as precio","productos.subcate as subcate","img_productos.ruta as ruta")     
       ->paginate(12);
       $cate = 3;
       $subcates = Productos::select('subcate', DB::raw('count(*) as total'))
       ->where('cate_principal','=', 3)
       ->where('subcate', "!=", "''")
       ->where('aprobado', 1)
       ->groupBy('subcate')
       ->get();
       $tipos = Productos::select('tipo', DB::raw('count(*) as totaltipo'))
       ->where('cate_principal', 3)
       ->where('tipo', "!=", "''")
       ->where('aprobado', 1)
       ->groupBy('tipo')
       ->get();
       $dulzuras = Productos::select('dulzura', DB::raw('count(*) as totaldulzura'))
       ->where('cate_principal', 3)
       ->where('aprobado', 1)
       ->groupBy('dulzura')
       ->get();
       $estilos = Productos::select('estilo', DB::raw('count(*) as totalestilo'))
       ->where('cate_principal', 3)
       ->where('aprobado', 1)
       ->groupBy('estilo')
       ->get();
       $colores = Productos::select('color', DB::raw('count(*) as totalcolor'))
       ->where('cate_principal', 3)
       ->where('aprobado', 1)
       ->groupBy('color')
       ->get();
       $sabores = Productos::select('sabor', DB::raw('count(*) as totalsabor'))
       ->where('cate_principal', 3)
       ->where('aprobado', 1)
       ->groupBy('sabor')
       ->get();
       $uvas = Productos::select('uva', DB::raw('count(*) as totaluva'))
       ->where('cate_principal', 3)
       ->where('aprobado', 1)
       ->groupBy('uva')
       ->get();
       $envejecimientos = Productos::select('envejecimiento', DB::raw('count(*) as totalenvejecimiento'))
       ->where('cate_principal', 3)
       ->where('aprobado', 1)
       ->groupBy('envejecimiento')
       ->get();
       $regiones = Productos::select('region', DB::raw('count(*) as totalregion'))
       ->where('cate_principal', 3)
       ->where('aprobado', 1)
       ->groupBy('region')
       ->get();
       $dos = Productos::select('do', DB::raw('count(*) as totaldo'))
       ->where('cate_principal', 3)
       ->where('aprobado', 1)
       ->groupBy('do')
       ->get();
       $productores = Productos::select('productor', DB::raw('count(*) as totalproductor'))
       ->where('cate_principal', 3)
       ->where('aprobado', 1)
       ->groupBy('productor')
       ->get();
       $marcas = Productos::select('marca', DB::raw('count(*) as totalmarca'))
       ->where('cate_principal', 3)
       ->where('aprobado', 1)
       ->groupBy('marca')
       ->get();
       $formatos = Productos::select('formato', DB::raw('count(*) as totalformato'))
       ->where('cate_principal', 3)
       ->where('aprobado', 1)
       ->groupBy('formato')
       ->get();

       $vinificaciones = Productos::select('vinificacion', DB::raw('count(*) as totalvinificacion'))
       ->where('cate_principal', 3)
       ->where('aprobado', 1)
       ->groupBy('vinificacion')
       ->get();
       $certificados = Productos::select('cert', DB::raw('count(*) as totalcert'))
       ->where('cate_principal', 3)
       ->where('aprobado', 1)
       ->groupBy('cert')
       ->get();
       $anadas = Productos::select('anada', DB::raw('count(*) as totalanada'))
       ->where('cate_principal', 3)
       ->where('aprobado', 1)
       ->groupBy('anada')
       ->get();
                
        return view('productos.list', ['productos' => $productos, 'subcates' => $subcates, 'tipos' => $tipos, 'dulzuras' => $dulzuras, 'estilos' => $estilos, 'uvas' => $uvas, 'envejecimientos' => $envejecimientos, 'regiones' => $regiones, 'dos' => $dos, 'productores' => $productores, 'marcas' => $marcas, 'formatos' => $formatos, 'vinificaciones' => $vinificaciones, 'certificados' => $certificados, 'anadas' => $anadas, 'cate' => $cate, 'colores' => $colores, 'sabores' => $sabores]); 
    } 

    public function atipicos()
    {
        
    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);
    $productose = $cart->items;

      $productos=Productos::where('productos.aprobado', 1)
        ->where('productos.cate_principal', 4)
             ->join('img_productos', 'productos.id', '=', 'img_productos.producto_id')
             ->select("productos.id as id","productos.nombre as nombre","productos.ref_interna as ref_interna", "productos.marca as marca","productos.stock as stock","productos.precio as precio","productos.subcate as subcate","img_productos.ruta as ruta","productos.aprobado as aprobado")
      ->where('productos.aprobado', 1)
       ->paginate(12);
       $cate = 4;
       $subcates = Productos::select('subcate', DB::raw('count(*) as total'))
       ->where('cate_principal', $cate)
       ->where('subcate', "!=", "''")
       ->where('aprobado', 1)
       ->groupBy('subcate')
       ->get();
       $tipos = Productos::select('tipo', DB::raw('count(*) as totaltipo'))
       ->where('cate_principal', $cate)
       ->where('tipo', "!=", "''")
       ->where('aprobado', 1)
       ->groupBy('tipo')
       ->get();
       $dulzuras = Productos::select('dulzura', DB::raw('count(*) as totaldulzura'))
       ->where('cate_principal', $cate)
       ->where('aprobado', 1)
       ->groupBy('dulzura')
       ->get();
       $estilos = Productos::select('estilo', DB::raw('count(*) as totalestilo'))
       ->where('cate_principal', $cate)
       ->where('aprobado', 1)
       ->groupBy('estilo')
       ->get();
       $colores = Productos::select('color', DB::raw('count(*) as totalcolor'))
       ->where('cate_principal', 4)
       ->where('aprobado', 1)
       ->groupBy('color')
       ->get();
       $sabores = Productos::select('sabor', DB::raw('count(*) as totalsabor'))
       ->where('cate_principal', 4)
       ->where('aprobado', 1)
       ->groupBy('sabor')
       ->get();
       $uvas = Productos::select('uva', DB::raw('count(*) as totaluva'))
       ->where('cate_principal', $cate)
       ->where('aprobado', 1)
       ->groupBy('uva')
       ->get();
       $envejecimientos = Productos::select('envejecimiento', DB::raw('count(*) as totalenvejecimiento'))
       ->where('cate_principal', $cate)
       ->where('aprobado', 1)
       ->groupBy('envejecimiento')
       ->get();
       $regiones = Productos::select('region', DB::raw('count(*) as totalregion'))
       ->where('cate_principal', $cate)
       ->where('aprobado', 1)
       ->groupBy('region')
       ->get();
       $dos = Productos::select('do', DB::raw('count(*) as totaldo'))
       ->where('cate_principal', $cate)
       ->where('aprobado', 1)
       ->groupBy('do')
       ->get();
       $productores = Productos::select('productor', DB::raw('count(*) as totalproductor'))
       ->where('cate_principal', $cate)
       ->where('aprobado', 1)
       ->groupBy('productor')
       ->get();
       $marcas = Productos::select('marca', DB::raw('count(*) as totalmarca'))
       ->where('cate_principal', $cate)
       ->where('aprobado', 1)
       ->groupBy('marca')
       ->get();
       $formatos = Productos::select('formato', DB::raw('count(*) as totalformato'))
       ->where('cate_principal', $cate)
       ->where('aprobado', 1)
       ->groupBy('formato')
       ->get();

       $vinificaciones = Productos::select('vinificacion', DB::raw('count(*) as totalvinificacion'))
       ->where('cate_principal', 4)
       ->where('aprobado', 1)
       ->groupBy('vinificacion')
       ->get();
       $certificados = Productos::select('cert', DB::raw('count(*) as totalcert'))
       ->where('cate_principal', 4)
       ->where('aprobado', 1)
       ->groupBy('cert')
       ->get();
       $anadas = Productos::select('anada', DB::raw('count(*) as totalanada'))
       ->where('cate_principal', 4)
       ->where('aprobado', 1)
       ->groupBy('anada')
       ->get();
                
        return view('productos.list', ['productose' => $productose,'productos' => $productos, 'subcates' => $subcates, 'tipos' => $tipos, 'dulzuras' => $dulzuras, 'estilos' => $estilos, 'uvas' => $uvas, 'envejecimientos' => $envejecimientos, 'regiones' => $regiones, 'dos' => $dos, 'productores' => $productores, 'marcas' => $marcas, 'formatos' => $formatos, 'vinificaciones' => $vinificaciones, 'certificados' => $certificados, 'anadas' => $anadas, 'cate' => $cate, 'colores' => $colores, 'sabores' => $sabores]); 

                
        
    } 

    public function single($id)
    {
    	$oldCart = Session::get('cart');
    $cart = new Cart($oldCart);
    $productose = $cart->items;

        $productos=Productos::where('productos.id', $id)
        ->join('img_productos', 'productos.id', '=', 'img_productos.producto_id')
             ->select("productos.id as id","productos.nombre as nombre","productos.uva as uva","productos.vinificacion as vinificacion","productos.cert as cert","productos.envejecimiento as envejecimiento","productos.formato as formato","productos.anada as anada","productos.graduacion as graduacion","productos.ref_interna as ref_interna", "productos.marca as marca","productos.stock as stock","productos.precio as precio","productos.subcate as subcate","img_productos.ruta as ruta")
        ->first();
        $imagenes = ImgProducto::where('img_productos.producto_id', $id)
        ->join('productos', 'img_productos.producto_id', '=', 'productos.id')
        ->select("img_productos.id as id","img_productos.ruta as ruta")->get();
        //dd($imagenes);
        return view('productos.single', ['productose' => $productose,'productos' => $productos, 'imagenes' => $imagenes]); 
    }

    public function getAddToCart(Request $request){ 
    
    $producto = Productos::where('productos.id', $request->id)
    ->join('img_productos', 'productos.id', '=', 'img_productos.producto_id')
             ->select("productos.id as id","productos.nombre as nombre","productos.precio as precio","img_productos.ruta as img")
             ->first();
    $cantidad = $request->cantidad;
    $oldCart = Session::has('cart') ? Session::get('cart') : null;
    $cart = new Cart($oldCart);
    $cart->add($producto, $producto->id, $cantidad); 
    
    
    $request->session()->put('cart', $cart);
    return redirect()->back()->with('success', 'El producto ha sido guardado en su lista de compras!');
    
    
    }

    public function getCart(){
        
        if(!Session::has('cart')){
            return view('cart.index');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $productose = $cart->items;
            return view('cart.index', ['productose' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }



   public function getRemoveItem($id){
    $oldCart = Session::has('cart') ? Session::get('cart') : null;
    $cart = new Cart($oldCart);
    $cart->removeItem($id);
    
    Session::put('cart', $cart);
    return redirect()->back();
}

public function filtros(Request $request){
    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);
    $productose = $cart->items;

    $subcate = $request->subcate;
    $tipo = $request->tipo;
    $dulzura = $request->dulzura;
    $estilo = $request->estilo;
    $max = $request->resultmax;
    $min = $request->resultmin;
    $cate = $request->categoria;

    $productos=Productos::join('img_productos', 'productos.id', '=', 'img_productos.producto_id')
             ->select("*","productos.id as id","productos.nombre as nombre","productos.ref_interna as ref_interna", "productos.marca as marca","productos.stock as stock","productos.precio as precio","productos.subcate as subcate","productos.aprobado as aprobado","img_productos.ruta as ruta")
             ->where('productos.precio', '>', $min)
             ->where('productos.precio', '<', $max)
             ->where('productos.aprobado', 1)
             ;

             if (!empty($subcate)) {
             $productos->where('productos.subcate', '=', $subcate);

                }
            if (!empty($tipo)) {
              $productos->Where('productos.tipo', '=', $tipo);
            }
            if (!empty($dulzura)) {
             $productos->where('productos.dulzura', '=', $dulzura);
                }
            if (!empty($estilo)) {
             $productos->where('productos.estilo', '=', $estilo);
         }
             
       

      

       $subcates = Productos::select('subcate', DB::raw('count(*) as total'))
       ->where('cate_principal', $cate)
       ->where('subcate', "!=", "''")
       ->where('aprobado', 1)
       ->groupBy('subcate')
       ->get();
       $tipos = Productos::select('tipo', DB::raw('count(*) as totaltipo'))
       ->where('cate_principal', $cate)
       ->where('tipo', "!=", "''")
       ->where('aprobado', 1)
       ->groupBy('tipo')
       ->get();
       $dulzuras = Productos::select('dulzura', DB::raw('count(*) as totaldulzura'))
       ->where('cate_principal', $cate)
       ->where('aprobado', 1)
       ->groupBy('dulzura')
       ->get();
       $estilos = Productos::select('estilo', DB::raw('count(*) as totalestilo'))
       ->where('cate_principal', $cate)
       ->where('aprobado', 1)
       ->groupBy('estilo')
       ->get();
       $colores = Productos::select('color', DB::raw('count(*) as totalcolor'))
       ->where('cate_principal', 2)
       ->where('aprobado', 1)
       ->groupBy('color')
       ->get();
       $sabores = Productos::select('sabor', DB::raw('count(*) as totalsabor'))
       ->where('cate_principal', 2)
       ->where('aprobado', 1)
       ->groupBy('sabor')
       ->get();
       $uvas = Productos::select('uva', DB::raw('count(*) as totaluva'))
       ->where('cate_principal', $cate)
       ->where('aprobado', 1)
       ->groupBy('uva')
       ->get();
       $envejecimientos = Productos::select('envejecimiento', DB::raw('count(*) as totalenvejecimiento'))
       ->where('cate_principal', $cate)
       ->where('aprobado', 1)
       ->groupBy('envejecimiento')
       ->get();
       $regiones = Productos::select('region', DB::raw('count(*) as totalregion'))
       ->where('cate_principal', $cate)
       ->where('aprobado', 1)
       ->groupBy('region')
       ->get();
       $dos = Productos::select('do', DB::raw('count(*) as totaldo'))
       ->where('cate_principal', 1)
       ->where('aprobado', 1)
       ->groupBy('do')
       ->get();
       $productores = Productos::select('productor', DB::raw('count(*) as totalproductor'))
       ->where('cate_principal', $cate)
       ->where('aprobado', 1)
       ->groupBy('productor')
       ->get();
       $marcas = Productos::select('marca', DB::raw('count(*) as totalmarca'))
       ->where('cate_principal', $cate)
       ->where('aprobado', 1)
       ->groupBy('marca')
       ->get();
       $formatos = Productos::select('formato', DB::raw('count(*) as totalformato'))
       ->where('cate_principal', $cate)
       ->where('aprobado', 1)
       ->groupBy('formato')
       ->get();

       $vinificaciones = Productos::select('vinificacion', DB::raw('count(*) as totalvinificacion'))
       ->where('cate_principal', $cate)
       ->where('aprobado', 1)
       ->groupBy('vinificacion')
       ->get();
       $certificados = Productos::select('cert', DB::raw('count(*) as totalcert'))
       ->where('cate_principal', 1)
       ->where('aprobado', 1)
       ->groupBy('cert')
       ->get();
       $anadas = Productos::select('anada', DB::raw('count(*) as totalanada'))
       ->where('cate_principal', $cate)
       ->where('aprobado', 1)
       ->groupBy('anada')
       ->get();
   
        return view('productos.list', ['productose' => $productose,'productos' => $productos->paginate(12), 'subcates' => $subcates, 'tipos' => $tipos, 'dulzuras' => $dulzuras, 'estilos' => $estilos, 'uvas' => $uvas, 'envejecimientos' => $envejecimientos, 'regiones' => $regiones, 'dos' => $dos, 'productores' => $productores, 'marcas' => $marcas, 'formatos' => $formatos, 'vinificaciones' => $vinificaciones, 'certificados' => $certificados, 'anadas' => $anadas, 'cate' => $cate, 'colores' => $colores, 'sabores' => $sabores]); 
    }


    public function checkout(){
        
        if(!Session::has('cart')){
            return view('cart.index');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $productose = $cart->items;
        $recientes = Productos::join('img_productos', 'productos.id', '=', 'img_productos.producto_id')
             ->select("*","productos.id as id","productos.nombre as nombre","productos.ref_interna as ref_interna", "productos.marca as marca","productos.stock as stock","productos.precio as precio","productos.subcate as subcate","img_productos.ruta as ruta","productos.created_at as created", "img_productos.created_at as img_created")
        ->take(4)
        ->get();
            return view('cart.checkout', ['recientes' => $recientes,'productose' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    } 

    public function shipping(){
        
        if(!Session::has('cart')){
            return view('cart.index');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $productose = $cart->items;
        $productos = $cart->items;
        $recientes = Productos::join('img_productos', 'productos.id', '=', 'img_productos.producto_id')
             ->select("*","productos.id as id","productos.nombre as nombre","productos.ref_interna as ref_interna", "productos.marca as marca","productos.stock as stock","productos.precio as precio","productos.subcate as subcate","img_productos.ruta as ruta","productos.created_at as created", "img_productos.created_at as img_created")
        ->take(4)
        ->get();


            return view('cart.shipping', ['recientes' => $recientes,'productos' => $productos,'productose' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function pagos(){
        
        if(!Session::has('cart')){
            return view('cart.index');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $productose = $cart->items;
            return view('cart.pagos', ['productose' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }


    public function dash_list()
    {
        
         $productos=Productos::where('productos.user_id', Auth::user()->id)
             ->join('img_productos', 'productos.id', '=', 'img_productos.producto_id')
             ->select("productos.id as id","productos.nombre as nombre","productos.ref_interna as ref_interna", "productos.marca as marca","productos.stock as stock","productos.precio as precio","productos.created_at as created","productos.subcate as subcate","img_productos.ruta as ruta")
       ->get();
        return view('dash.tables.datatables', ['productos' => $productos]); 
    } 

    public function admin_list()
    {
        
         $productos=Productos::where('productos.id', '>' , 0)
             ->join('img_productos', 'productos.id', '=', 'img_productos.producto_id')
             ->select("productos.id as id","productos.nombre as nombre","productos.ref_interna as ref_interna", "productos.marca as marca","productos.stock as stock","productos.precio as precio","productos.created_at as created","productos.subcate as subcate","productos.aprobado as aprobado","img_productos.ruta as ruta")
       ->get();
        return view('dash.admin.datatables', ['productos' => $productos]); 
    } 

    public function autorizar_prod($id)
    {
        
         $productos=Productos::find($id)
         ->first();
                    $productos->aprobado = 1;
            $productos->save();

        return redirect()->back(); 
    }



    public function dash_new_product()
    {
        
        $categorias=Categorias::where('id',">",0)
        ->get();
        return view('dash.productos.cate_new_producto', ['categorias' => $categorias]); 
    } 

    public function dash_new_product_cate($id)
    {
        
        $categorias=Categorias::where('id',$id)
        ->first();        
        $subcate=Subcate::where('cate_id',$id)
        ->get()
        ;
        if($id==1){
        return view('dash.forms.step4', ['categorias' => $categorias, 'subcate' => $subcate]); 
    }else if($id==2){
        return view('dash.forms.step4c', ['categorias' => $categorias, 'subcate' => $subcate]);
    }

    if($id==3){
        return view('dash.forms.step4d', ['categorias' => $categorias, 'subcate' => $subcate]); 

    }
    if($id==4){
        return view('dash.forms.step4a', ['categorias' => $categorias, 'subcate' => $subcate]); 

    } 

}

    public function store(Request $request)
        {
          
          $producto = new Productos();

                $producto->subcate = $request->subcate;                
                $producto->tipo = $request->tipo;
                $producto->vinificacion = $request->vinificacion;
                $producto->cate_principal = $request->cate_principal;
                if($request->cert){
                $producto->cert = implode(',', $request->cert);
                }
                if($request->uva){
                $producto->uva = implode(',', $request->uva);
                }
                $producto->dulzura = $request->dulzura; 
                $producto->envejecimiento = $request->envejecimiento;
                $producto->graduacion = $request->graduacion;
                $producto->anada = $request->anada;
                $producto->formato = $request->formato;
                $producto->estilo = $request->estilo;
                $producto->user_id = Auth::user()->id;
                $producto->color = $request->color;
                $producto->sabor = $request->sabor;
                 if($request->extra){
                $producto->extra = implode(',',$request->extra);
                }
                $producto->envase = $request->envase;
                $producto->multiplo = $request->multiplo; 

                        
           $producto->save();

        $productos=Productos::where('id', $producto->id)
        ->first();
        $marcas=Marcas::where('user_id', Auth::user()->id)->get();

        return view('dash.forms.advanced', ['productos' => $productos, 'marcas' => $marcas]); 
        
      //return $request->all();   
    } 

    public function imgstore(Request $request)
    {
       
        $file = $request->file('file');
        $ext = $file->extension();
        $NomImg = rand() . date('_d-m-Y_H_i_s') . '.' . $ext;
                    $ruta = $this->pathImg . $NomImg;                   
                    $file->move(public_path() . '/' . $this->pathImg, $ruta);

         $producto = new ImgProducto;

        $producto->create([
                        'ruta' => $ruta,                
                        'producto_id' => $request->producto_id,                                
                        ]);


      
       
    } 

    public function storestep3(Request $request)
    {
        
        $productos=Productos::where('id', $request->producto_id)
        ->first();
        return view('dash.forms.step3',['productos' => $productos]);

    } 

    public function storestep4(Request $request) 
{
   
                 $productos = Productos::find($request->id);
                    $productos->stock = $request->stock;
                    $productos->precio = $request->precio;
                    $productos->minimo = $request->minimo;
                    $productos->precio_imp = $request->precio_imp;
                    $productos->tasa = $request->tasa;
                    
            
            $productos->save();


             $productos=Productos::where('productos.user_id', Auth::user()->id)
             ->join('img_productos', 'productos.id', '=', 'img_productos.producto_id')
             ->select("productos.id as id","productos.nombre as nombre","productos.ref_interna as ref_interna", "productos.marca as marca","productos.stock as stock","productos.precio as precio","productos.subcate as subcate","img_productos.ruta as ruta")
       ->get();

       
            return view('dash.tables.datatables',['productos' => $productos]);
            //dd($habitaciones->bano);
            //return redirect('/perfil');
}

public function caracteristicas(Request $request)
{
   
                 $productos = Productos::find($request->id);
                    $productos->nombre = $request->nombre;
                    $productos->ref_interna = $request->ref_interna;
                    $productos->descripcion = $request->descripcion;
                    $productos->pais = $request->pais;
                    $productos->region = $request->region;
                    $productos->do = $request->do;
                    $productos->marca = $request->marca;
                    
            
            $productos->save();

            if ($request->nuevamarca!="") {
                 $marca = new Marcas;

                        $marca->create([
                        'nombre' => $request->nuevamarca,                
                        'user_id' => Auth::user()->id,                                
                        ]);

                $productos = Productos::find($request->id);
                    $productos->nombre = $request->nombre;
                    $productos->ref_interna = $request->ref_interna;
                    $productos->descripcion = $request->descripcion;
                    $productos->pais = $request->pais;
                    $productos->region = $request->region;
                    $productos->do = $request->do;
                    $productos->marca = $request->nuevamarca;
                    
            
            $productos->save();

            }else{
                $productos = Productos::find($request->id);
                    $productos->nombre = $request->nombre;
                    $productos->ref_interna = $request->ref_interna;
                    $productos->descripcion = $request->descripcion;
                    $productos->pais = $request->pais;
                    $productos->region = $request->region;
                    $productos->do = $request->do;
                    $productos->marca = $request->marca;
                    
            
            $productos->save();

            }


             $productos=Productos::where('id', $request->id)
        ->first();       
       
            return view('dash.forms.step2',['productos' => $productos]);
            //dd($habitaciones->bano);
            //return redirect('/perfil');
}







}
