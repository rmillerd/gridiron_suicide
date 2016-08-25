<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\TeamRepository;
use App\Team;



class TeamController extends Controller
{
    protected $teams;
    public function __construct(TeamRepository $teams)
    {
        $this->middleware('auth');
        $this->teams = $teams;
    }

    public function index(){
        
    }
    
    public function details(Request $request){
        return view('teams.details', [
                'league' => Team::find($request->team)->league,
                'team' => Team::find($request->team),
                'homeGames' => Team::find($request->team)->homeGames,
                'awayGames' => Team::find($request->team)->awayGames,
                
                ]);
    }
}
