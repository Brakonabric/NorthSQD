<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CollectionLinass extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'name' => Str::random(10),
                'description' => Str::random(50),
                'price' => rand(100, 1000),
                'category' => 'Category 2',
                'collection' => 'Linass',
                'imagePath' => 'images\tshirt_white_women_1.jpg',
                'weight' => rand(1, 10),
                'discount' => rand(0, 20),
                'colors' => ['black', 'white'],
                'sizes' => ['M', 'L', 'XL']
            ]
        ];

        foreach ($items as $itemData) {
            // Seed Items Table
            $itemId = DB::table('items')->insertGetId([
                'name' => $itemData['name'],
                'description' => $itemData['description'],
                'price' => $itemData['price'],
                'category' => $itemData['category'],
                'imagePath' => $itemData['imagePath'],
                'weight' => $itemData['weight'],
                'discount' => $itemData['discount'],
                'collection' => $itemData['collection'],
            ]);

            foreach ($itemData['colors'] as $color) {
                // 1/5 chance for in_stock to be false (0)
                $inStockColor = rand(1, 5) === 1 ? 0 : 1;

                // Seed Item Colors Table
                $colorId = DB::table('item_colors')->insertGetId([
                    'in_stock' => $inStockColor,
                    'color' => $color,
                    'item_id' => $itemId,
                ]);

                foreach ($itemData['sizes'] as $size) {
                    // 1/5 chance for in_stock to be false (0)
                    $inStockSize = rand(1, 5) === 1 ? 0 : 1;

                    // Seed Item Sizes Table
                    DB::table('item_sizes')->insert([
                        'in_stock' => $inStockSize,
                        'size' => $size,
                        'color_id' => $colorId,
                    ]);
                }
            }
        }
    }
}