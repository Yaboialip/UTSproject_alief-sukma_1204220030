<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'code' => 'FOOD',
                'name' => 'Food',
                'description' => 'Makanan'
            ],
            [
                'code' => 'BEV',
                'name' => 'Beverages',
                'description' => 'Minuman'
            ],
        ]);
    }
}
