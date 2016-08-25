<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pick extends Model
{
    //
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
