<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //TOOD: set email to str_random(10).'@example.com'
        DB::table('users')->insert([
           'name' => 'Site Admin',
           'email' => 'admin@example.com',
           'password' => bcrypt('password'),
           'SiteAdmin' => 1
            
        ]);
        
        DB::table('users')->insert([
           'name' => 'Site Admin',
           'email' => 'user@example.com',
           'password' => bcrypt('password'),
           'SiteAdmin' => 0
            
        ]);
    }
}
