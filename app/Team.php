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
    public function user()
    {
        return $this->belongsTo(League::class);
    }
}
