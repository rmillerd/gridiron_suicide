<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['season_id','week_id', 'gameTime','hometeam_id','visitteam_id', 'bye', 'modifiedBy'];
    protected $dates = ['gameTime'];

    /**
     * Get the Season that owns the Matchup.
     */
    public function season()
    {
        return $this->belongsTo(Season::class);
    }
    /**
     * Get the Week that owns the Matchup.
     */
    public function week()
    {
        return $this->belongsTo(Week::class);
    }
       
    public function homeTeam()
    {
        return $this->hasOne(Team::class, 'id', 'hometeam_id');
    }
 
    public function visitTeam()
    {
        return $this->hasOne(Team::class, 'id', 'visitteam_id');
    }
}
