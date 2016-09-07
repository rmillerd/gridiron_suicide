<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use \Maatwebsite\Excel\Files\ExcelFile as Excel;
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
            'file' => 'required|mimes:csv,txt,xls,xlsx',
            ]);
        if($request->hasFile('file')){
			$path = $request->file('file')->getRealPath();
			$data = Excel::loadfile($path, function($reader) {
			})->get();
			if(!empty($data) && $data->count()){
				foreach ($data as $key => $value) {
					$insert[] = ['title' => $value->title, 'description' => $value->description];
				}
                                dd($insert);
				/*if(!empty($insert)){
					DB::table('items')->insert($insert);
					dd('Insert Record successfully.');
				}*/
			}
		}
		return back();
    }
}
