<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class WeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weeks')->insert([
            'name' => 'Week 1',
            'season_id' => 1,
            'startDate' => Carbon::create(2016,9,8,20,30,0,'EST'),
            'endDate' => Carbon::create(2016,9,13,0,0,0,'EST')
        ]);
        DB::table('weeks')->insert([
            'name' => 'Week 2',
            'season_id' => 1,
            'startDate' => Carbon::create(2016,9,15,20,30,0,'EST'),
            'endDate' => Carbon::create(2016,9,20,0,0,0,'EST')
        ]);
        DB::table('weeks')->insert([
            'name' => 'Week 3',
            'season_id' => 1,
            'startDate' => Carbon::create(2016,9,22,20,30,0,'EST'),
            'endDate' => Carbon::create(2016,9,27,0,0,0,'EST')
        ]);
        DB::table('weeks')->insert([
            'name' => 'Week 4',
            'season_id' => 1,
            'startDate' => Carbon::create(2016,9,29,20,30,0,'EST'),
            'endDate' => Carbon::create(2016,10,4,0,0,0,'EST')
        ]);
        DB::table('weeks')->insert([
            'name' => 'Week 5',
            'season_id' => 1,
            'startDate' => Carbon::create(2016,10,6,20,30,0,'EST'),
            'endDate' => Carbon::create(2016,10,11,0,0,0,'EST')
        ]);
        DB::table('weeks')->insert([
            'name' => 'Week 6',
            'season_id' => 1,
            'startDate' => Carbon::create(2016,10,13,20,30,0,'EST'),
            'endDate' => Carbon::create(2016,10,18,0,0,0,'EST')
        ]);
        DB::table('weeks')->insert([
            'name' => 'Week 7',
            'season_id' => 1,
            'startDate' => Carbon::create(2016,10,20,20,30,0,'EST'),
            'endDate' => Carbon::create(2016,10,25,0,0,0,'EST')
        ]);
        DB::table('weeks')->insert([
            'name' => 'Week 8',
            'season_id' => 1,
            'startDate' => Carbon::create(2016,10,27,20,30,0,'EST'),
            'endDate' => Carbon::create(2016,11,1,0,0,0,'EST')
        ]); 
        DB::table('weeks')->insert([
            'name' => 'Week 9',
            'season_id' => 1,
            'startDate' => Carbon::create(2016,11,3,20,30,0,'EST'),
            'endDate' => Carbon::create(2016,11,8,0,0,0,'EST')
        ]);
        DB::table('weeks')->insert([
            'name' => 'Week 10',
            'season_id' => 1,
            'startDate' => Carbon::create(2016,11,10,20,30,0,'EST'),
            'endDate' => Carbon::create(2016,11,15,0,0,0,'EST')
        ]); 
        DB::table('weeks')->insert([
            'name' => 'Week 11',
            'season_id' => 1,
            'startDate' => Carbon::create(2016,11,17,20,30,0,'EST'),
            'endDate' => Carbon::create(2016,11,22,0,0,0,'EST')
        ]);
        DB::table('weeks')->insert([
            'name' => 'Week 12',
            'season_id' => 1,
            'startDate' => Carbon::create(2016,11,24,20,30,0,'EST'),
            'endDate' => Carbon::create(2016,11,29,0,0,0,'EST')
        ]);
        DB::table('weeks')->insert([
            'name' => 'Week 13',
            'season_id' => 1,
            'startDate' => Carbon::create(2016,12,1,20,30,0,'EST'),
            'endDate' => Carbon::create(2016,12,6,0,0,0,'EST')
        ]);
        DB::table('weeks')->insert([
            'name' => 'Week 14',
            'season_id' => 1,
            'startDate' => Carbon::create(2016,12,8,20,30,0,'EST'),
            'endDate' => Carbon::create(2016,12,13,0,0,0,'EST')
        ]);
        DB::table('weeks')->insert([
            'name' => 'Week 15',
            'season_id' => 1,
            'startDate' => Carbon::create(2016,12,15,20,30,0,'EST'),
            'endDate' => Carbon::create(2016,12,20,0,0,0,'EST')
        ]);
        DB::table('weeks')->insert([
            'name' => 'Week 16',
            'season_id' => 1,
            'startDate' => Carbon::create(2016,12,22,20,30,0,'EST'),
            'endDate' => Carbon::create(2016,12,27,0,0,0,'EST')
        ]);
        DB::table('weeks')->insert([
            'name' => 'Week 17',
            'season_id' => 1,
            'startDate' => Carbon::create(2017,1,1,13,0,0,'EST'),
            'endDate' => Carbon::create(2017,1,2,0,0,0,'EST')
        ]);
    }
}
