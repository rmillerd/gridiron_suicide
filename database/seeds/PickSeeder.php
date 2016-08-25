<?php

use Illuminate\Database\Seeder;
use App\Pick;
class PickSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pick::create([            
            'season_id' => 1,
            'week_id' => 1,
            'user_id' => 2,
            'team_id' => 3,
            'modifiedBy' => 'Site Admin'
        ]);
    }
}
