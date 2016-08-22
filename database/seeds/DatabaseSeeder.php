<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         $this->call(ThemeSeeder::class);
         $this->call(UserSeeder::class);
         $this->call(LeagueSeeder::class);
         $this->call(SeasonSeeder::class);
         $this->call(TeamSeeder::class);
         $this->call(WeekSeeder::Class);
         $this->call(MatchupSeeder::class);
         
    }
}
