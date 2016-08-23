<?php

namespace App\Repositories;

use App\League;

class SeasonRepository 
{
    /**
     * Get all of the Seasons for a given League.
     *
     * @param  League $league
     * @return Collection
     */
    public function forLeague(League $league)
    {
        return $league->seasons()
                    ->orderBy('startDate', 'asc')
                    ->get();
    }}
