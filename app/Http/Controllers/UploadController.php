<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\League;

class UploadController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }
    public function setup(){
        return view('import.upload', [
            "leagues" => League::lists('name','id'),
        ]);
        
    }
    public function process(Request $request){
        
        $this->validate($request, [
            'file' => 'mimes:csv,txt,xls,xlsx',
            ]);
        return dump($request->file);
    }
}
