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
    protected $fillable = ['name', 'URL'];

    public function seasons()
    {
        return $this->hasMany(Season::class);
    }
    
    public function teams()
    {
        return $this->hasMany(Team::class);
    }
    
    public static function byName($name)
    {
        return League::where('name' , $name)->first();
    }
}
