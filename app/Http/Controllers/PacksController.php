<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Packs;
use App\Productos;
use App\Productos_packs;
use Auth;

class PacksController extends Controller
{

	public function index()
    {
        $packs = Packs::where('user_id', Auth::user()->id)->get();
        return view('dash.packs.index', ['packs' => $packs]); 
    }

    public function new()
    {
        $packs = Packs::where('user_id', Auth::user()->id)->get();
        return view('dash.packs.new_pack', ['packs' => $packs]); 
    } 

    public function new_product($id)
    {
        $packs = Packs::where('id', $id)->first();
        $productos = Productos::where('user_id', Auth::user()->id)->get();
        return view('dash.packs.new_producto_pack', ['packs' => $packs, 'productos' => $productos]); 
    } 

    public function store(Request $request)
        {
	      
          $packes = new Packs();

                $packes->nombre = $request->nombre;
                $packes->precio = $request->precio;                
                $packes->user_id = Auth::user()->id;
           $packes->save();

           $packs = Packs::where('user_id', Auth::user()->id)->get();

        return redirect()->route('packs');
        
      //return $request->all();   
    } 

    public function store_product(Request $request)
        {
	      
          $packes = new Productos_packs();

                $packes->id_pack = $request->id_pack;                
                $packes->id_producto = $request->id_producto;
           $packes->save();

           $packs = Packs::where('user_id', Auth::user()->id)->get();

       return redirect()->route('packs');
        
      //return $request->all();   
    } 

     public function single($id)
        {
	      
        $productos=Productos_packs::where('productos_packs.id_pack', $id)
             ->join('productos', 'productos_packs.id_producto', '=', 'productos.id')
             ->select("productos.id as id","productos.nombre as nombre","productos.cate_principal as cate_principal", "productos.marca as marca","productos.stock as stock","productos.precio as precio","productos.subcate as subcate", "productos_packs.id as idpack")
       ->get();

        return view('dash.packs.single_pack', ['productos' => $productos]); 
        
      //return $request->all();   
    } 
    public function destroy($id)
		{ 
		$packs = Packs::find($id);
		    $packs->delete();
		    return redirect('packs'); 

		}


	public function destroyproduct($id)
		{ 
		$producto = Productos_packs::find($id);
		    $producto->delete();
		     return redirect()->back(); 

		}



}
