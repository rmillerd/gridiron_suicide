<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PickController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    
    public function index(Request $request){
        
    }
    
    public function details(Request $request){
        
        
    }
}
