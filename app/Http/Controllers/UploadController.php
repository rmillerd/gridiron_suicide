<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\League;

class UploadController extends Controller
{
    public function setup(){
        return view('import.upload', [
            "leagues" => League::lists('name','id'),
        ]);
        
    }
    public function process(Request $request){
        
        $this->validate($request, [
            'file' => 'required|mimes:application/vnd.ms-excel',
            ]);
        return $request->file->getClientMimeType();
    }
}
