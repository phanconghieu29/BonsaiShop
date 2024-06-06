<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category')->insert([
            ['cat_name' => 'Cây cảnh để bàn', 'cat_slug' => 'cay-canh-de-ban'],
            ['cat_name' => 'Cây chậu treo', 'cat_slug' => 'cay-chau-treo'],
            ['cat_name' => 'Cây xương rồng', 'cat_slug' => 'cay-xuong-rong'],
            ['cat_name' => 'Cây thủy sinh', 'cat_slug' => 'cay-thuy-sinh'],
            ['cat_name' => 'Cây ăn trái', 'cat_slug' => 'cay-an-trai']
        ]);
    }
}
