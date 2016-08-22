<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MatchupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matchups')->insert([
            'idSeason' => '1',
            'idWeek' => 1,
            'idTeamHome' => 10,
            'idTeamVisitor' => 5,
            'gameTime' => Carbon::create(2017,1,1,17,30,0,'PST'),
        ]);
    }
}
