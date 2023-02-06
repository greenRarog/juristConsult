<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
                [
                    'text_comment' => 'полезная информация',
                    'user_id' => 6,
                    'consult_id' => 6,                    
                    'created_at' => '2020-07-05 11:32:06',
                    'updated_at' => '2020-07-05 11:32:06',                    
                ],
                [
                    'text_comment' => 'отзыв',
                    'user_id' => 2,
                    'consult_id' => 6,
                    'created_at' => '2020-07-09 11:32:06',
                    'updated_at' => '2020-07-09 11:32:06',                    
                ],            
                [
                    'text_comment' => 'полезная информация',
                    'user_id' => 5,
                    'consult_id' => 7,                    
                    'created_at' => '2020-08-06 11:32:06',
                    'updated_at' => '2020-08-06 11:32:06',                    
                ],
                [
                    'text_comment' => null,
                    'user_id' => 3,
                    'consult_id' => 7,                    
                    'created_at' => '2020-08-13 11:32:06',
                    'updated_at' => '2020-08-13 11:32:06',                    
                ],            
    ]);
    }
}
