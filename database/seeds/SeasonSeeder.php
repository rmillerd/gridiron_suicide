<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seasons')->insert([
            'id' => 1,
            'name' => '2016 NFL season',
            'open' => 1,
            'league_id' => 1,
            'startDate' => Carbon::create(2016,9,8),
            'endDate' => Carbon::create(2017,1,1),
            'modifiedBy' => 'Site Admin'
        ]);
    }
}
