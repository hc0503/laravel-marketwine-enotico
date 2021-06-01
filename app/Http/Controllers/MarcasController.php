<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marcas;
use App\ImgProducto;
use App\Categorias;
use App\Subcate;
use Auth;

class MarcasController extends Controller
{
 
    public $pathImg = 'img/shop/products/';
   

    public function list()
    {
        
         $marcas=Marcas::where('user_id', Auth::user()->id)             
       ->get();
        return view('dash.tables.marcas', ['marcas' => $marcas]); 
    } 

    public function new()
    {
        
        
        return view('dash.forms.marcas_new'); 
    } 

    

    public function store(Request $request)
        {
	        $file = $request->file('img');
	        $ext = $file->extension();
	        $NomImg = rand() . date('_d-m-Y_H_i_s') . '.' . $ext;
	        $ruta = $this->pathImg . $NomImg;                   
	        $file->move(public_path() . '/' . $this->pathImg, $ruta);

          $mismarcas = new Marcas();

                $mismarcas->nombre = $request->nombre;                
                $mismarcas->img = $ruta;
                $mismarcas->user_id = Auth::user()->id;
           $mismarcas->save();

         $marcas= Marcas::where('user_id', Auth::user()->id)->get();

        return view('dash.tables.marcas', ['marcas' => $marcas]); 
        
      //return $request->all();   
    } 

  

}
