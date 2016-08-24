<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Get the League that owns the Season.
     */
    public function league()
    {
        return $this->belongsTo(League::class);
    }
    
    public function weeks()
    {
        return $this->hasMany(Week::class);
    }
}
