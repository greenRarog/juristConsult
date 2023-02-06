<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
                [
                    'title' => 'Земельные споры',
                    'description' => null,
                    'created_at' => '2020-02-03 11:32:06',
                    'updated_at' => '2020-02-03 11:32:06',
                ],
                [
                    'title' => 'Семейные споры',
                    'description' => null,
                    'created_at' => '2020-02-03 11:32:06',
                    'updated_at' => '2020-02-03 11:32:06',                    
                ],
                [
                    'title' => 'Трудовые споры',
                    'description' => null,
                    'created_at' => '2020-02-03 11:32:06',
                    'updated_at' => '2020-02-03 11:32:06',                    
                ],
                [
                    'title' => 'Споры с ГИБДД',
                    'description' => null,
                    'created_at' => '2020-02-03 11:32:06',
                    'updated_at' => '2020-02-03 11:32:06',                    
                ],             
                ]);
    }
}
