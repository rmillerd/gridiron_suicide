<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    public function seasons()
    {
        return $this->hasMany(Season::class);
    }
    
    public function teams()
    {
        return $this->hasMany(Teams::class);
    }
    
}
