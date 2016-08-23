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
            'season_id' => '1',
            'week_id' => 1,
            'hometeam_id' => 10,
            'visitteam_id' => 5,
            'gameTime' => Carbon::create(2017,1,1,17,30,0,'PST'),
        ]);
    }
}
