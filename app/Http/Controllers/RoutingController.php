<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutingController extends Controller
{


    // public function __construct()
    // {
    //     $this->middleware('auth')->except('index');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Display a view based on first route param
     *
     * @return \Illuminate\Http\Response
     */
    public function root($first)
    {
        if ($first != 'assets')
            return view('dash.'.$first);
        return view('index');
    }

    /**
     * second level route
     */
    public function secondLevel($first, $second)
    {        
        if ($first != 'assets')
            return view('dash.'.$first.'.'.$second);
        return view('index');
    }

    /**
     * third level route
     */
    public function thirdLevel($first, $second, $third)
    {
        if ($first != 'assets')
            return view($first.'.'.$second.'.'.$third);
        return view('index');
    }
}
