<?php

namespace App\Repositories;

use App\League;

class SeasonRepository 
{
    /**
     * Get all of the Seasons for a given League.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forLeague(League $league)
    {
        return $league->seasons()
                    ->orderBy('created_at', 'asc')
                    ->get();
    }}
