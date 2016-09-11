<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Pick;
use App\User;
use App\Team;

class PickController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function create(Request $request){
        return view('picks.create',[
            'league' => $request->league_name,
            'season' => $request->season,
            'week' => $request->week,
            'users' => User::get()->lists('full_name', 'id'),
            'teams' => Team::get()->lists('name', 'id'),
            ]);
        
    }
    public function store(Request $request){
        $this->validate($request, [
            'user' => 'required',
            'team' => 'required',
        ]);
        
        //dd(User::find($request->user));
        Pick::create([
            'season_id' => $request->season,
            'week_id' => $request->week,
            'user_id' => $request->user,
            'team_id' => $request->team,
            'modifiedBy' => $request->user()->name,
        ]);
        return redirect()->back();
    }
    
    public function index(Request $request){
        return "Index";
    }
    
    public function details(Request $request){
        return "details";
        
    }
}
