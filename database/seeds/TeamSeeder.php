<?php

use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'Arizona Cardinals',
            'iconURL' => '/images/ArizonaCardinals.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'Atlanta Falcons',
            'iconURL' => '/images/AtlantaFalcons.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'BaltimoreRavens',
            'iconURL' => '/images/BaltimoreRavens.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'Buffalo Bills',
            'iconURL' => '/images/BuffaloBills.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'Carolina Panthers',
            'iconURL' => '/images/CarolinaPanthers.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'Chicago Bears',
            'iconURL' => '/images/ChicagoBears.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'Cincinnati Bengals',
            'iconURL' => '/images/CincinnatiBengals.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'Cleveland Browns',
            'iconURL' => '/images/ClevelandBrowns.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'Dallas Cowboys',
            'iconURL' => '/images/DallasCowboys.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'Denver Broncos',
            'iconURL' => '/images/DenverBroncos.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'Detroit Lions',
            'iconURL' => '/images/DetroitLions.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'GreenBay Packers',
            'iconURL' => '/images/GreenBayPackers.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'Houston Texans',
            'iconURL' => '/images/HoustonTexans.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'Indianapolis Colts',
            'iconURL' => '/images/IndianapolisColts.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'Jacksonville Jaguars',
            'iconURL' => '/images/JacksonvilleJaguars.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'Kansas City Chiefs',
            'iconURL' => '/images/KansasCityChiefs.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'Los Angeles Rams',
            'iconURL' => '/images/LosAngelesRams.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'Miami Dolphins',
            'iconURL' => '/images/MiamiDolphins.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'Minnesota Vikings',
            'iconURL' => '/images/MinnesotaVikings.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'New England Patriots',
            'iconURL' => '/images/NewEnglandPatriots.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'New Orleans Saints',
            'iconURL' => '/images/NewOrleansSaints.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'New York Giants',
            'iconURL' => '/images/NewYorkGiants.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'New York Jets',
            'iconURL' => '/images/NewYorkJets.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'Oakland Raiders',
            'iconURL' => '/images/OaklandRaiders.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'Philadelphia Eagles',
            'iconURL' => '/images/PhiladelphiaEagles.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'Pittsburgh Steelers',
            'iconURL' => '/images/PittsburghSteelers.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'San Diego Chargers',
            'iconURL' => '/images/SanDiegoChargers.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'SanFrancisco49ers',
            'iconURL' => '/images/SanFrancisco49ers.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'Seattle Seahawks',
            'iconURL' => '/images/SeattleSeahawks.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'Tampa Bay Buccaneers',
            'iconURL' => '/images/TampaBayBuccaneers.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'Tennessee Titans',
            'iconURL' => '/images/TennesseeTitans.jpg',
            'teamURL' => '',
        ]);
        DB::table('teams')->insert([
            'league_id' => 1,
            'name' => 'Washington Redskins',
            'iconURL' => '/images/WashingtonRedskins.jpg',
            'teamURL' => '',
        ]);
    }
}
