<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'name' => 'Laravel 10', 
            'year' => '2023', 
            'publication_place' => 'Poznan', 
            'pages' => '700', 
            'price' => '103.50'
        ]);

        DB::table('books')->insert([
            'name' => 'Laravel 11', 
            'year' => '2024', 
            'publication_place' => 'Krakow', 
            'pages' => '780', 
            'price' => '158.99'
        ]);
    }
}
