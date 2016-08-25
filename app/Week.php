<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Get the user that owns the task.
     */
    public function season()
    {
        return $this->belongsTo(Season::class);
    }
    
    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
