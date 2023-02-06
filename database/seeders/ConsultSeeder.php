<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('consults')->insert([
                [
                    'title' => 'Земельный спор1',
                    'desсription' => 'описание проблемы',
                    'photo' => null,
                    'status' => 'in work',
                    'author_id' => 1,
                    'jurist_id' => 5,
                    'category_id' => 1,                    
                    'created_at' => '2020-02-03 11:32:06',
                    'updated_at' => '2020-02-03 11:32:06',                    
                ],
                [
                    'title' => 'Семейный спор1',
                    'desсription' => 'описание проблемы',
                    'photo' => null,
                    'status' => 'in work',                    
                    'author_id' => 2,
                    'jurist_id' => 6,
                    'category_id' => 2,    
                    'created_at' => '2020-03-03 11:32:06',
                    'updated_at' => '2020-03-03 11:32:06',                    
                ],
                [
                    'title' => 'Трудовой спор1',
                    'desсription' => 'описание проблемы',
                    'photo' => null,
                    'status' => 'in work',                    
                    'author_id' => 3,
                    'jurist_id' => 5,
                    'category_id' => 3,                    
                    'created_at' => '2020-04-03 11:32:06',
                    'updated_at' => '2020-04-03 11:32:06',                    
                ],
                [
                    'title' => 'спор с ГИБДД1',
                    'desсription' => 'тут не описание а просто глупости',
                    'photo' => null,
                    'status' => 'open',                    
                    'author_id' => 4,
                    'jurist_id' => null,
                    'category_id' => 4,     
                    'created_at' => '2020-05-03 11:32:06',
                    'updated_at' => '2020-05-03 11:32:06',                    
                ],
                [
                    'title' => 'Земельный спор2',
                    'desсription' => 'описание',
                    'photo' => null,
                    'status' => 'open',                    
                    'author_id' => 1,
                    'jurist_id' => null,
                    'category_id' => 1,                    
                    'created_at' => '2020-06-03 11:32:06',
                    'updated_at' => '2020-06-03 11:32:06',                    
                ],                
                [
                    'title' => 'Трудовой спор2',
                    'desсription' => 'описание',
                    'photo' => null,
                    'status' => 'close',                    
                    'author_id' => 2,
                    'jurist_id' => 6,
                    'category_id' => 3,     
                    'created_at' => '2020-07-03 11:32:06',
                    'updated_at' => '2020-07-03 11:32:06',                    
                ],             
                [
                    'title' => 'Спор с ГИБДД2',
                    'desсription' => 'описание',
                    'photo' => null,
                    'status' => 'close',                    
                    'author_id' => 3,
                    'jurist_id' => 5,
                    'category_id' => 4,     
                    'created_at' => '2020-08-03 11:32:06',
                    'updated_at' => '2020-08-03 11:32:06',                    
                ],                      
        ]);
    }
}
