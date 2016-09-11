<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Get the League that owns the Team.
     */
    public function league()
    {
        return $this->belongsTo(League::class);
    }
    
    public function homeGames()
    {
        return $this->hasMany(Game::class, 'homeTeam_id', 'id');
    }
    
    public function awayGames()
    {
        return $this->hasMany(Game::class, 'visitTeam_id', 'id');
    }
    public static function byName($name)
    {
        return Team::where('name', $name)->first();
    }
}
