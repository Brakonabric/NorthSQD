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
                'category' => 'T-Shirt',
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
                'description' => "Looking for a premium phone case to keep your device safe? We got you covered! NorthSQD Snap Case for iPhone® is slim and lightweight for a classy and minimalistic look.

  
    Made of polycarbonate (PC) material
    Wireless charging compatible
    Precisely aligned port openings
    Matte and gloss finish options
    Blank product sourced from the Republic of Korea


Go stylish with our NorthSQD Snap Case for iPhone®.",
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

    100% organic cotton exterior
    Charcoal Melange’s exterior: 60% organic cotton, 40% recycled polyester
    80% organic cotton, 20% recycled polyester interior
    97% organic cotton, 3% elastane ribs
    Fabric weight: 8.3 oz/yd² (280 g/m²)
    Fabric weight for Charcoal Melange: 10.3 oz/yd² (348 g/m²)
    Side-seamed
    Raglan sleeves
    Neck tape
    Brushed fleece lining
    2 × 2 ribbed cuffs, collar, and hem
    The fabric of this product is certified by GRS (Global Recycled Standard), OCS (Organic Content Standard), and GOTS (Global Organic Textile Standard)
    The fabric of this product is OEKO-TEX Standard 100 certified and PETA-Approved Vegan
    Blank product sourced from Pakistan

Experience the perfect blend of comfort and sustainability with the NorthSQD Unisex Organic Raglan Sweatshirt. Let the spirit of the northern lights brighten your everyday style.",
                'price' => 30.00,
                'category' => 'Sweatshirt',
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

    85% organic cotton, 15% recycled polyester
    Ribbing: 97% organic cotton, 3% elastane
    Brushed fleece fabric inside
    Comfortable unisex fit
    Double-layered hood
    Flat drawcords with metal aglets
    Kangaroo pocket
    Inside and outside label patch for branding
    Tear away care label
    Fabric weight: 8.55 oz/yd² (290 g/m²)
    Fabric weight for the black hoodie: 8.85 oz/yd² (300 g/m²)
    The fabric of this product is certified by GOTS (Global Organic Textile Standard)
    Blank product sourced from Latvia and Mexico

Perfect as a canvas for your designs, the NorthSQD Premium Eco Hoodie will keep your prints and embroidery looking fresh, even after multiple washes. Add your unique touch or simply showcase your branded logo on this premium, eco-friendly piece. Embrace the spirit of the northern lights with NorthSQD.",
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

    Made from 100% recycled polyester
    Unstructured
    6-panel, low-profile
    One size fits all
    Adjustable snapback closure
    Blank product sourced from China

Experience the perfect blend of sustainability and style with the NorthSQD x adidas Dad Hat. Add your unique touch and let the spirit of the northern lights shine through your everyday wear.",
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