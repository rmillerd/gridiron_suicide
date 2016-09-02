<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Team;
use App\Game;
class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Game::create([
            'season_id' => '1',
            'week_id' => 1,
            'hometeam_id' => 10,
            'visitteam_id' => 5,
            'bye' => false,
            'gameTime' => Carbon::parse('Thu Sep 8, 2016 8:30 PM'),
            'modifiedBy' => 'Site Admin',
        ]);
    }
}
