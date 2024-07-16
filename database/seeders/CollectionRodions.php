<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionRodions extends Seeder
{
    public function run(): void
    {
        $items = [
            //Shoes
            [
                'name' => "Unisex Canvas Shoes",
                'description' => "Elevate your style with the Unisex Lace-Up Canvas Shoes by NorthSQD, where fashion meets the enchantment of the northern lights. Crafted for those who seek both comfort and flair, these shoes are designed to make a statement.

The padded collar and tongue create a sleek, eye-catching silhouette, while the soft insole ensures extra comfort on the go. The artistic design, inspired by the mystique of the northern lights, brings a unique touch to your footwear collection. Customize your pair with your logo on the box, insole, and tongue—making sure your brand stands out in every stride.

	100% polyester canvas upper side.
	Ethylene-vinyl acetate (EVA) rubber outsole.
	Breathable lining.
	Padded collar and tongue.
	Removable insole.
	White laces.
	Blank product sourced from China.

Embrace the spirit of the North with NorthSQD.",
                'price' => 45.00,
                'category' => 'Shoes',
                'collection' => 'Rodions',
                'imagePath' => 'images\Rodions\Shoes_Rodions_white_1.png',
                'weight' => 3.5,
                'discount' => 5.01,
                'colors' => ['white'],
                'sizes' => ['EU 36','EU 38','EU 39','EU 42']
            ],
            //T-Shirt
            [
                'name' => "Unisex Cotton T-Shirt",
                'description' => "Introducing the Organic Cotton T-Shirt by NorthSQD—where sustainability meets the enchanting beauty of the northern lights. This high-quality T-shirt is crafted from 100% organic ring-spun cotton, making it the perfect choice for eco-conscious shoppers. With its exceptional comfort, don't be surprised if it quickly becomes your favorite wardrobe staple.

    100% organic ring-spun cotton
    Fabric weight: 5.3 oz./yd.² (180 g/m²)
    Single jersey
    Regular fit
    Set-in sleeves
    1 × 1 rib at collar
    Wide double-needle topstitch on the sleeves and bottom hems
    Self-fabric neck tape (inside, back of the neck)
    The fabric of this product is certified by GRS (Global Recycled Standard), OCS (Organic Content Standard), and GOTS (Global Organic Textile Standard)
    The fabric of this product is OEKO-TEX Standard 100 certified and PETA-Approved Vegan
    Blank product sourced from Bangladesh

Embrace sustainable fashion with the Organic Cotton T-Shirt by NorthSQD, and let the spirit of the northern lights illuminate your style.",
                'price' => 20.00,
                'category' => 'T-Shirts',
                'collection' => 'Rodions',
                'imagePath' => 'images\Rodions\T-Shirt_Rodions_white_1.png',
                'weight' => 1.2,
                'discount' => 3.01,
                'colors' => ['white', 'black', 'lavender'],
                'sizes' => ['S','M','L','XL'],
            ],
            //Accessories
            [
                'name' => "Snap Case for iPhone",
                'description' => "Introducing the NorthSQD All-Over Print Minimalist Backpack—perfect for those who are always on the move, inspired by the ethereal beauty of the northern lights. This spacious backpack is crafted from water-resistant material and offers a stylish yet functional design. With ample storage, including a large inside pocket for a laptop and a hidden pocket for valuables, this backpack is ideal for travelers and daily commuters alike.

Introducing the NorthSQD Tough Case for iPhone®—where durability meets the enchanting spirit of the northern lights. Designed with a dual-layer for extra protection, this case ensures your phone stays safe with an impact-resistant outer shell and an impact-absorbing inner liner. Customize it with your designs to offer customers a stylish yet robust protective case.

    Polycarbonate outer shell
    Thermoplastic Polyurethane (TPU) inner liner
    Dual-layer protection
    Precisely aligned port openings
    Induction charging compatible
    Designable edges (3D wrap)
    Matte or gloss finish
    Blank product sourced from Korea

Elevate phone protection with the NorthSQD Tough Case for iPhone®. Combining practicality with the mystical charm of the northern lights, this case is perfect for those who want to protect their device in style.",
                'price' => 50.00,
                'category' => 'Accessories',
                'collection' => 'Rodions',
                'imagePath' => 'images\Rodions\Accessories_Rodions_white_1.png',
                'weight' => 4.3,
                'discount' => 5.01,
                'colors' => ['colorfull'],
                'sizes' => ['Iphone 20 Xl Pro Max Ultra'],
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
                'collection' => 'Rodions',
                'imagePath' => 'images\Rodions\Sweatshirt_Rodions_white_1.png',
                'weight' => 2.9,
                'discount' => null,
                'colors' => ['black','green','white'],
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
                'collection' => 'Rodions',
                'imagePath' => 'images\Rodions\Hoodie_Rodions_white_1.png',
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
                <li>100% polyester</li>
                <li>Fabric weight: 8.1 oz/yd² (275 g/m²)</li>
                <li>Moisture-wicking and breathable fabric</li>
                <li>Linen feel material</li>
                <li>Reversible</li>
                <li>Tear-away care label</li>
                <li>Available in 3 sizes: XS, S/M, and L/XL</li>
                <li>Printed, cut, and hand-sewn by our in-house team</li>
                <li>Fabric is OEKO-TEX 100 standard certified</li>
                <li>Blank product components sourced from China</li>
                </ul>
                
",
                'price' => 15.00,
                'category' => 'Hat',
                'collection' => 'Rodions',
                'imagePath' => 'images\Rodions\Hat_Rodions_white_1.png',
                'weight' => 3.2,
                'discount' => 2.01,
                'colors' => ['white', 'black'],
                'sizes' => ['Medium size'],
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