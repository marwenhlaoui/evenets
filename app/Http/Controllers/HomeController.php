<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Event;

class HomeController extends Controller
{
    
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $data = Event::simplePaginate(1);
        return view('home',compact('data'));
    }

}
