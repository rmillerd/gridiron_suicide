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
        return Team::find($request->team);
    }
}
