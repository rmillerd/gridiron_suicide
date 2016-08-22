<?php

use Illuminate\Database\Seeder;

class LeagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leagues')->insert([
            'id' => 1,
            'name' => 'NFL',
            'URL' => 'https://www.nfl.com',
            'modifiedBy' => 'Site Admin',
        ]);
    }
}
