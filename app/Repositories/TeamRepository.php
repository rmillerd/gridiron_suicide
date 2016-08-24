<?php

namespace App\Repositories;

use App\League;

class TeamRepository 
{
    /**
     * Get all of the Teams for a given League.
     *
     * @param  League $league
     * @return Collection
     */
    public function forLeague(League $league)
    {
        return $league->teams()
                    ->orderBy('name', 'asc')
                    ->get();
    }}
