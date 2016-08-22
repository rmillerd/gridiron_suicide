<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Repositories\LeagueRepository;

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
        return view('leagues.index');
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
}
