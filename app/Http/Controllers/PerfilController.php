<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Perfil;

class PerfilController extends Controller
{

	
    public $pathImg = 'img/avatar/';

     public function index()
    {
        $perfil=Perfil::where('user_id', Auth::user()->id)->first();
        return view('dash.perfil', ['perfil' => $perfil]); 
    } 

     public function update(Request $request)
	{
	//dd($request->file('img'));
	//dd(public_path());
	    if($request->file('img'))
	    {
	       
		            $file = $request->file('img');
	                $ext = $file->extension();
	                $NomImg = rand() . date('_d-m-Y_H_i_s') . '.' . $ext;
	                $ruta = $this->pathImg . $NomImg;	                
	                $file->move(public_path() . '/' . $this->pathImg, $ruta);
	                
	                     $perfil = Perfil::find($request->id);
	                $perfil->nombre = $request->nombre;
                    $perfil->fecha_nac = $request->fecha_nac;
                    $perfil->empresa = $request->empresa;
                    $perfil->num_iva = $request->num_iva;
                    $perfil->direccion = $request->direccion;
                    $perfil->dir_complemen = $request->dir_complemen;
                    $perfil->cp = $request->cp;
                    $perfil->ciudad = $request->ciudad;
                    $perfil->pais = $request->pais;
            	    $perfil->logo = $ruta;
                    $perfil->tel = $request->tel;
                    $perfil->id_fiscal = $request->id_fiscal;
	                    
	                    
	            
	            
	            $perfil->save();

	          

	            
	            }else{
	                  $perfil = Perfil::find($request->id);
	                $perfil->nombre = $request->nombre;
                    $perfil->fecha_nac = $request->fecha_nac;
                    $perfil->empresa = $request->empresa;
                    $perfil->num_iva = $request->num_iva;
                    $perfil->direccion = $request->direccion;
                    $perfil->dir_complemen = $request->dir_complemen;
                    $perfil->cp = $request->cp;
                    $perfil->ciudad = $request->ciudad;
                    $perfil->pais = $request->pais;
                    $perfil->tel = $request->tel;
                    $perfil->id_fiscal = $request->id_fiscal;
	                    
	                    
	            
	            
	            $perfil->save();


	                    
	            }
	       
	            
	            //dd($habitaciones->bano);
	            return redirect('/perfil');
	}
}
