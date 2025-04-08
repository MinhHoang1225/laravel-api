<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Trà sữa truyền thống',
                'description' => 'Ngon, béo, vị trà rõ, topping đầy đủ.',
                'price' => 39000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Trà đào cam sả',
                'description' => 'Mát lạnh, thơm sả, vị đào tươi mát.',
                'price' => 45000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Cafe sữa đá',
                'description' => 'Cafe đậm đà, pha phin truyền thống.',
                'price' => 29000,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
