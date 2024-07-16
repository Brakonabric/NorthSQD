<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionKaterina extends Seeder
{
    public function run(): void
    {
        // -------------------------------------------------------------------------
        $items = [
            //Shoes
            [
                'name' => "Unisex Canvas Shoes",
                'description' => "Elevate your style with the Unisex Lace-Up Canvas Shoes by NorthSQD, where fashion meets the enchantment of the northern lights. Crafted for those who seek both comfort and flair, these shoes are designed to make a statement.

                <br>
                <br>Details:
                <ul class='db-list'>
                <li>100% polyester canvas upper side</li>
                <li>Ethylene-vinyl acetate (EVA) rubber outsole</li>
                <li>Breathable lining</li>
                <li>Padded collar and tongue</li>
                <li>Removable insole</li>
                <li>White laces</li>
                <li>Blank product sourced from China</li>
                </ul>

",
                'price' => 45.00,
                'category' => 'Shoes',
                'collection' => 'Katerina',
                'imagePath' => 'images\Katerina\Shoes_Katerina_white_1.png',
                'weight' => 3.5,
                'discount' => null,
                'colors' => ['white'],
                'sizes' => ['EU 36','EU 38','EU 39','EU 42']
            ],
            //T-Shirt
            [
                'name' => "Unisex Cotton T-Shirt",
                'description' => "Introducing the Organic Cotton T-Shirt by NorthSQD—where sustainability meets the enchanting beauty of the northern lights. This high-quality T-shirt is crafted from 100% organic ring-spun cotton, making it the perfect choice for eco-conscious shoppers. With its exceptional comfort, don't be surprised if it quickly becomes your favorite wardrobe staple.

                <br>
                <br>Details:
                <ul class='db-list'>
                <li>100% organic ring-spun cotton</li>
                <li>Fabric weight: 5.3 oz./yd.² (180 g/m²)</li>
                <li>Single jersey</li>
                <li>Regular fit</li>
                <li>Set-in sleeves</li>
                <li>1 × 1 rib at collar</li>
                <li>Wide double-needle topstitch on the sleeves and bottom hems</li>
                <li>Self-fabric neck tape (inside, back of the neck)</li>
                <li>The fabric of this product is certified by GRS (Global Recycled Standard), OCS (Organic Content Standard), and GOTS (Global Organic Textile Standard)</li>
                <li>The fabric of this product is OEKO-TEX Standard 100 certified and PETA-Approved Vegan</li>
                <li>Blank product sourced from Bangladesh</li>
                </ul>

",
                'price' => 20.00,
                'category' => 'T-Shirts',
                'collection' => 'Katerina',
                'imagePath' => 'images\Katerina\T-Shirt_Katerina_white_5.png',
                'weight' => 1.2,
                'discount' => 3.01,
                'colors' => ['white', 'black', 'khaki'],
                'sizes' => ['S','M','L','XL'],
            ],
            //Accessories
            [
                'name' => "Snap Case for iPhone",
                'description' => "Introducing the NorthSQD Tough Case for iPhone®—where durability meets the enchanting spirit of the northern lights. Designed with a dual-layer for extra protection, this case ensures your phone stays safe with an impact-resistant outer shell and an impact-absorbing inner liner. Customize it with your designs to offer customers a stylish yet robust protective case.

                <br>
                <br>Details:
                <ul class='db-list'>
                <li>Polycarbonate outer shell</li>
                <li>Thermoplastic Polyurethane (TPU) inner liner</li>
                <li>Dual-layer protection</li>
                <li>Precisely aligned port openings</li>
                <li>Induction charging compatible</li>
                <li>Designable edges (3D wrap)</li>
                <li>Matte or gloss finish</li>
                <li>Blank product sourced from Korea</li>
                </ul>

",
                'price' => 32.00,
                'category' => 'Accessories',
                'collection' => 'Katerina',
                'imagePath' => 'images\Katerina\Accessories_Katerina_white_1.png',
                'weight' => 4.3,
                'discount' => null,
                'colors' => ['white'],
                'sizes' => ['iPhone14','iPhone14 Plus','iPhone14 Pro','iPhone14 Pro Max', 'iPhone15','iPhone15 Plus','iPhone15 Pro','iPhone15 Pro Max'],
            ],
            //Sweatshirt
            [
                'name' => "Unisex Sweatshirt",
                'description' => "Discover unparalleled comfort and style with the NorthSQD Unisex Organic Raglan Sweatshirt, inspired by the mesmerizing northern lights. Designed for everyday wear, this sweatshirt promises to be a favorite in your wardrobe. The soft fleece inside offers a cozy feel, while the smooth 100% organic cotton exterior maintains a clean, polished look. Its premium materials ensure that your prints remain flawless and embroidery designs stay neat and durable.

                <br>
                <br>Details:
                <ul class='db-list'>
                <li>100% organic cotton exterior</li>
                <li>Charcoal Melange’s exterior: 60% organic cotton, 40% recycled polyester</li>
                <li>80% organic cotton, 20% recycled polyester interior</li>
                <li>97% organic cotton, 3% elastane ribs</li>
                <li>Fabric weight: 8.3 oz/yd² (280 g/m²)</li>
                <li>Fabric weight for Charcoal Melange: 10.3 oz/yd² (348 g/m²)</li>
                <li>Side-seamed</li>
                <li>Raglan sleeves</li>
                <li>Neck tape</li>
                <li>Brushed fleece lining</li>
                <li>2 × 2 ribbed cuffs, collar, and hem</li>
                <li>The fabric of this product is certified by GRS (Global Recycled Standard), OCS (Organic Content Standard), and GOTS (Global Organic Textile Standard)</li>
                <li>The fabric of this product is OEKO-TEX Standard 100 certified and PETA-Approved Vegan</li>
                <li>Blank product sourced from Pakistan</li>
                </ul>
                
",
                'price' => 30.00,
                'category' => 'Sweatshirts',
                'collection' => 'Katerina',
                'imagePath' => 'images\Katerina\Sweatshirt_Katerina_white_1.png',
                'weight' => 2.9,
                'discount' => null,
                'colors' => ['white', 'black'],
                'sizes' => ['S','M','L','XL'],
            ],
            //Hoodie
            [
                'name' => "Premium Eco Hoodie",
                'description' => "Elevate your wardrobe with the NorthSQD Premium Eco Hoodie, where sustainability meets the enchanting charm of the northern lights. Exclusively available at Printful, this hoodie is crafted from high-quality organic and recycled materials, offering a luxurious, brushed inside for ultimate comfort. Designed with adjustable drawcords, ribbed cuffs, and a kangaroo pouch pocket, this eco-friendly hoodie seamlessly blends style and functionality.

                <br>
                <br>Details:
                <ul class='db-list'>
                <li>85% organic cotton, 15% recycled polyester</li>
                <li>Ribbing: 97% organic cotton, 3% elastane</li>
                <li>Brushed fleece fabric inside</li>
                <li>Comfortable unisex fit</li>
                <li>Double-layered hood</li>
                <li>Flat drawcords with metal aglets</li>
                <li>Kangaroo pocket</li>
                <li>Inside and outside label patch for branding</li>
                <li>Tear away care label</li>
                <li>Fabric weight: 8.55 oz/yd² (290 g/m²)</li>
                <li>Fabric weight for the black hoodie: 8.85 oz/yd² (300 g/m²)</li>
                <li>The fabric of this product is certified by GOTS (Global Organic Textile Standard)</li>
                <li>Blank product sourced from Latvia and Mexico</li>
                </ul>
                
",
                'price' => 45.00,
                'category' => 'Hoodie',
                'collection' => 'Katerina',
                'imagePath' => 'images\Katerina\Hoodie_Katerina_white_2.png',
                'weight' => 3.2,
                'discount' => null,
                'colors' => ['white', 'black'],
                'sizes' => ['S','M','L','XL'],
            ],
            //Hat
            [
                'name' => "Abibas Dad Hat",
                'description' => "Introducing the NorthSQD x abibas Dad Hat—where versatility meets the enchanting allure of the northern lights. This stylish hat is made of 100% recycled polyester, offering a lightweight and adjustable fit perfect for any occasion. Enhance its appeal with custom embroidery designs on the front, back, and left side to create a standout accessory.

                <br>
                <br>Details:
                <ul class='db-list'>
                <li>Made from 100% recycled polyester</li>
                <li>Unstructured</li>
                <li>6-panel, low-profile</li>
                <li>One size fits all</li>
                <li>Adjustable snapback closure</li>
                <li>Blank product sourced from China</li>
                </ul>
                

",
                'price' => 15.00,
                'category' => 'Hat',
                'collection' => 'Katerina',
                'imagePath' => 'images\Katerina\Hat_Katerina_white_3.png',
                'weight' => 3.2,
                'discount' => null,
                'colors' => ['white', 'black'],
                'sizes' => ['Medium size'],
            ]
        ];
// ------------------------------------------------------------------------------------------------
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