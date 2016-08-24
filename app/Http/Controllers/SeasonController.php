<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Repositories\SeasonRepository;
use App\League;
use App\Season;


class SeasonController extends Controller
{
     /**
     * The season repository instance.
     *
     * @var TaskRepository
     */
    protected $seasons;
    public function __construct(SeasonRepository $seasons)
    {
        $this->middleware('auth');
        $this->seasons = $seasons;
    }
    
    public function index(Request $request)
    {
        return view('seasons.index', [
            'seasons' => $this->seasons->forLeague(League::byName($request->league)),
        ]);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        // Create The Task...
        $request->league->seasons()->create([
            'name' => $request->name,
            'open' => $request->open,
            'startDate' => $request->startDate,
            'endDate' => $request->endDate,
            //'modifiedBy' => Auth::User();
        ]);
        return redirect('/seasons');
    }

    public function details(Request $request){
        $season = Season::find($request->season);
        $weeks = Season::find($request->season)->weeks;
        return view('seasons.details', [
                'season' => Season::find($request->season),
                'weeks' => Season::find($request->season)->weeks,
                ]);
    }
}
