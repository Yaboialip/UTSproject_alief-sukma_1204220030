<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ItemSeeder extends Seeder
{
 /**
 * Run the database seeds.
 */
 public function run(): void
 {
 DB::table('items')->insert([
 [
 'firstname' => 'Neopolitan Pizza',
 'Itemdescription' => ' Thin crust, wood-fired, simple toppings like San Marzano tomatoes, buffalo mozzarella, basil, olive oil.',
 'price' => 20,
 'kategori_id' => 1
 ],
 [
 'firstname' => 'Lemon water',
 'Itemdescription' => 'Water infused with freshly squeezed lemon juice',
 'price' => 25,
 'kategori_id' => 2
 ],
 ]);

 }}