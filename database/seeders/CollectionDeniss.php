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

The padded collar and tongue create a sleek, eye-catching silhouette, while the soft insole ensures extra comfort on the go. The artistic design, inspired by the mystique of the northern lights, brings a unique touch to your footwear collection. Customize your pair with your logo on the box, insole, and tongue—making sure your brand stands out in every stride.

	100% polyester canvas upper side.
	Ethylene-vinyl acetate (EVA) rubber outsole.
	Breathable lining.
	Padded collar and tongue.
	Removable insole.
	White laces.
	Blank product sourced from China.

Embrace the spirit of the North with NorthSQD.",
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

    100% certified organic cotton 3/1 twill
    Fabric weight: 8 oz/yd² (272 g/m²)
    Dimensions: 20″ × 14″ × 5″ (50.8 × 35.6 × 12.7 cm)
    Capacity: 6 gallons (23 l)
    Weight limit: 30 lbs (13.6 kg)
    1″ × 25″ (2.5 × 63.5 cm) long self-fabric dual straps
    Open main compartment, flat bottom
    The fabric of this product is certified by OCS (Organic Content Standard) and GOTS (Global Organic Textile Standard)
    The fabric of this product is OEKO-TEX Standard 100 certified and PETA-Approved Vegan
    Blank product sourced from China or India

Combine sustainability with style using the NorthSQD Organic Twill Tote Bag. Perfect for eco-conscious shoppers, this bag ensures your designs stand out while embracing the magical essence of the northern lights.",
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

    Made from 100% recycled polyester
    Unstructured
    6-panel, low-profile
    One size fits all
    Adjustable snapback closure
    Blank product sourced from China

Experience the perfect blend of sustainability and style with the NorthSQD x adidas Dad Hat. Add your unique touch and let the spirit of the northern lights shine through your everyday wear.",
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