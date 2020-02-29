<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'A1000',
            'description' => '26"x21" MTB Orange',
            'price' => '12000',
            'qty' => '22'
        ]);
        Product::create([
            'name' => 'A1100',
            'description' => '26"x19" MTB Silver',
            'price' => '12300',
            'qty' => '21'
        ]);
        Product::create([
            'name' => 'A1200',
            'description' => '26"x17" MTB Black',
            'price' => '13000',
            'qty' => '5'
        ]);
        Product::create([
            'name' => 'A1300',
            'description' => '26"x22" MTB Red',
            'price' => '12300',
            'qty' => '8'
        ]);
        Product::create([
            'name' => 'A1400',
            'description' => '26"x23" MTB Blue/White',
            'price' => '13200',
            'qty' => '6'
        ]);
    }
}
