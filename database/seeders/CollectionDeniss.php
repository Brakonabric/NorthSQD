<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionDeniss extends Seeder
{
    public function run(): void
    {
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
                'price' => 120.00,
                'category' => 'Shoes',
                'collection' => 'Deniss',
                'imagePath' => 'images/Deniss/Shoes_Deniss_white_1.png',
                'weight' => 2.5,
                'discount' => 20.01,
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
                'price' => 35.00,
                'category' => 'T-Shirt',
                'collection' => 'Deniss',
                'imagePath' => 'images/Deniss/T-Shirt_Deniss_gray_1.png',
                'weight' => 2.5,
                'discount' => 5.01,
                'colors' => ['white', 'black', 'gray'],
                'sizes' => ['S','M','L','XL'],
            ],
            //Accessories
            [
                'name' => "Large Eco Tote",
                'description' => "Introducing the NorthSQD Organic Twill Tote Bag by Econscious—where eco-friendliness meets the enchanting spirit of the northern lights. This spacious and sturdy tote bag is perfect for showcasing your designs, offering ample space for groceries, books, and other essentials. Its durable fabric, dual straps, and flat bottom ensure both style and functionality.

                <br>
                <br>Details:
                <ul class='db-list'>
                <li>100% certified organic cotton 3/1 twill</li>
                <li>Fabric weight: 8 oz/yd² (272 g/m²)</li>
                <li>Dimensions: 20″ × 14″ × 5″ (50.8 × 35.6 × 12.7 cm)</li>
                <li>Capacity: 6 gallons (23 l)</li>
                <li>Weight limit: 30 lbs (13.6 kg)</li>
                <li>1″ × 25″ (2.5 × 63.5 cm) long self-fabric dual straps</li>
                <li>Open main compartment, flat bottom</li>
                <li>The fabric of this product is certified by OCS (Organic Content Standard) and GOTS (Global Organic Textile Standard)</li>
                <li>The fabric of this product is OEKO-TEX Standard 100 certified and PETA-Approved Vegan</li>
                <li>Blank product sourced from China or India</li>
                </ul>
",
                'price' => 15,
                'category' => 'Accessories',
                'collection' => 'Deniss',
                'imagePath' => 'images/Deniss/Accessories_Deniss_oyster_3.png',
                'weight' => 4.3,
                'discount' => null,
                'colors' => ['oyster'],
                'sizes' => ['Large'],
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
                'category' => 'Sweatshirt',
                'collection' => 'Deniss',
                'imagePath' => 'images/Deniss/Sweatshirt_Deniss_orange_1.png',
                'weight' => 2.9,
                'discount' => null,
                'colors' => ['white'],
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
                'price' => 70.00,
                'category' => 'Hoodie',
                'collection' => 'Deniss',
                'imagePath' => 'images/Deniss/Hoodie_Deniss_black_2.png',
                'weight' => 3.2,
                'discount' => 20.01,
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
                'category' => 'Hoodie',
                'collection' => 'Deniss',
                'imagePath' => 'images/Deniss/Hat_Deniss_white_2.png',
                'weight' => 3.2,
                'discount' => 2.01,
                'colors' => ['white', 'black'],
                'sizes' => ['Medium'],
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