<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                [
                    'name' => 'client1',
                    'email' => 'client1@cli.com',
                    'email_verified_at' => null,
                    'password' => '$2y$10$5cXFXqsdVCT7vfp.GHkLa.ZULhps/S6y5Z5T7NJzph1E6OaL8orYq',
                    'remember_token' => null,              
                    'role' => 'client',               
                    'created_at' => '2020-02-03 11:32:06',
                    'updated_at' => '2020-02-03 11:32:06',                    
                ],
                [
                    'name' => 'client2',
                    'email' => 'client2@cli.com',
                    'email_verified_at' => null,
                    'password' => '$2y$10$5cXFXqsdVCT7vfp.GHkLa.ZULhps/S6y5Z5T7NJzph1E6OaL8orYq',
                    'remember_token' => null,              
                    'role' => 'client',                   
                    'created_at' => '2020-02-03 11:32:06',
                    'updated_at' => '2020-02-03 11:32:06',                    
                ],
                [
                    'name' => 'client3',
                    'email' => 'client3@cli.com',
                    'email_verified_at' => null,
                    'password' => '$2y$10$5cXFXqsdVCT7vfp.GHkLa.ZULhps/S6y5Z5T7NJzph1E6OaL8orYq',
                    'remember_token' => null,                    
                    'role' => 'client',                   
                    'created_at' => '2020-02-03 11:32:06',
                    'updated_at' => '2020-02-03 11:32:06',                    
                ],                
                [
                    'name' => 'client4',
                    'email' => 'client4@cli.com',
                    'email_verified_at' => null,
                    'password' => '$2y$10$5cXFXqsdVCT7vfp.GHkLa.ZULhps/S6y5Z5T7NJzph1E6OaL8orYq',
                    'remember_token' => null,                    
                    'role' => 'client',                   
                    'created_at' => '2020-02-03 11:32:06',
                    'updated_at' => '2020-02-03 11:32:06',                    
                ],
                
                [
                    'name' => 'jurist1',
                    'email' => 'jurist1@jur.com',
                    'email_verified_at' => null,
                    'password' => '$2y$10$5cXFXqsdVCT7vfp.GHkLa.ZULhps/S6y5Z5T7NJzph1E6OaL8orYq',
                    'remember_token' => null,                    
                    'role' => 'jurist',                   
                    'created_at' => '2020-02-03 11:32:06',
                    'updated_at' => '2020-02-03 11:32:06',                    
                ],
                [
                    'name' => 'jurist2',
                    'email' => 'jurist2@jur.com',
                    'email_verified_at' => null,
                    'password' => '$2y$10$5cXFXqsdVCT7vfp.GHkLa.ZULhps/S6y5Z5T7NJzph1E6OaL8orYq',
                    'remember_token' => null,                    
                    'role' => 'jurist',
                    'created_at' => '2020-02-03 11:32:06',
                    'updated_at' => '2020-02-03 11:32:06',                    
                ],                
                ]);
    }
}
