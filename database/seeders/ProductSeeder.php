<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name'=>'oreo',
            'code'=>'kmu1',
            'price'=>10000
        ]);
        Product::create([
            'name'=>'indomie',
            'code'=>'knc2',
            'price'=>3000
        ]);
        Product::create([
            'name'=>'sari roti',
            'code'=>'d4sh',
            'price'=>5000
        ]);
        Product::create([
            'name'=>'samyang',
            'code'=>'ha4w',
            'price'=>10000
        ]);
        Product::create([
            'name'=>'cimory squeeze',
            'code'=>'jh3j',
            'price'=>12500
        ]);
    }
}
