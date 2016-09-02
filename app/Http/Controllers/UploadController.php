<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UploadController extends Controller
{

    public function process(Request $request){
        return dump($request);
    }
}
