<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Kategori')->insert([
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
