<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GameController extends Controller
{
    public function index(){
        return "It works";
        
    }
    
    public function details(){
        return "This is the details of the Game";
    }
}
