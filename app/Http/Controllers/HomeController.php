<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Perfil;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         if(Auth::user()->primer_inicio==0){
             $perfil= Perfil::create([
            'user_id' => Auth::user()->id,  
             

        ]);
             
           $user = User::find(Auth::user()->id);
            $user->primer_inicio = 1;     
            $user->save();                       
            
        
    }
    if(Auth::user()->admin==0){
    return view('dash.dashboard'); 
}else{
    return view('dash.admin.admin');
}
}
}
