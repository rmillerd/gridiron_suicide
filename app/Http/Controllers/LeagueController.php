<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Repositories\LeagueRepository;
use App\League;

class LeagueController extends Controller
{
    protected $leagues;
    /*
     * Setup everything for the League
     */
    public function __construct(LeagueRepository $leagues)
    {
        $this->middleware('auth');
        $this->leagues = $leagues;
    }
    /*
     * Show a list of Leagues
     */
    public function index(Request $request)
    {
        return view('leagues.index', [
            'leagues' => League::All(),
        ]);
    }
    
    /*
     * Create a new League
     */
    
    public function store(Request $request)
    {
        $this->validate($request, [
           'name' => 'required|max:255', 
        ]);
        
        //Create the League
        $request->league->create([
           'name' => $request->name,
            'URL' => $request->URL,
            //'modifiedBy' => Auth::getUser()
        ]);
    }
    
    public function edit(Request $request){
        
    }
    
    public function details(Request $request){
        return view('leagues.details', [
            'league' => League::byName($request->league),
            'seasons' => League::byName($request->league)->seasons,
            'teams' => League::byName($request->league)->teams,
        ]);
    }
}
