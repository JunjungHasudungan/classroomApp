<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'id'    => 1,
                'name'  => 'Product 1',
                'price'  => 212
            ],
            [
                'id'    => 2,
                'name'  => 'Product 2',
                'price'  => 213
            ],
        ];

        Product::insert($products);
    }
}
