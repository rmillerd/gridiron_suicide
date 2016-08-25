<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Week;

class WeekController extends Controller
{
    public function index(Request $request){
        
    }
    
    public function details(Request $request){
        return view('weeks.details', [
                'week' => Week::find($request->week),
                'league' => Week::find($request->week)->season->league,
                'season' => Week::find($request->week)->season,
                'games' => Week::find($request->week)->games,
                ]);
        
    }
}
