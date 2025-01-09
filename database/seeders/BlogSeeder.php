<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->insert([
            [
                'title' => 'Lorem Ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet',
                
            ],
            [
                'title' => 'Hello world skdfjlskdjflsdkjflsdkjflsdkfjlsdkfj',
                'description' => 'Hello world skdfjlskdjflsdkjflsdkjflsdkfjlsdkfj',
                
            ],
            [
                'title' => 'Lorem Ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet',
                
            ],
            [
                'title' => 'Lorem Ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet',
                
            ],
        ]);
    }
}
