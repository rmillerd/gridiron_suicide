<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Carbon\Carbon;
use Excel;
use App\League;
use App\Season;
use App\Week;
use App\Team;
use App\Game;

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
        $league = League::find($request->league);
        if($request->hasFile('file')){
            $path = $request->file('file')->getRealPath();
            $data = Excel::load($path, function($reader) {
            })->get();
            if(!empty($data) && $data->count()){
                foreach ($data as $key => $value) {
                    $season = Season::firstorCreate(['league_id' => $league->id, 'name' => $value->season]);
                    $week = Week::firstorCreate(['season_id' => $season->id, 'name' => $value->week]);
                    $week->games()->create([
                        'season_id' => $season->id,
                        'week_id' => $week->id,
                        'hometeam_id' => Team::byName($value->hometeam)->id,
                        'visitteam_id' => ($value->awayteam == 'bye' ? null : Team::byName($value->awayteam)->id),
                        'gameTime' => Carbon::createfromFormat("Y-m-d H:i:s", $value->date->toDateString() . ' ' . $value->time->toTimeString()),
                        'bye' => ($value->awayteam == 'bye' ? true : false),
                        'modifiedBy' => $request->user()->name,
                    ]);
                }
            }
        }
        
	return view('import.upload', [
            "leagues" => League::lists('name','id'),
        ]);
    }
}
