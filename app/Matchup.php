<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matchup extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['name'];

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
}
