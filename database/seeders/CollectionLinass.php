<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionLinass extends Seeder
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
                'price' => 45.00,
                'category' => 'Shoes',
                'collection' => 'Linass',
                'imagePreview' => 'images\Linass\Shoes_Linass_white_1.png',
                'weight' => 3.5,
                'discount' => 5.01,
                'colors' => ['white'],
                'sizes' => ['EU 36', 'EU 38', 'EU 39', 'EU 42'],
                'imageCount' => 3
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
                'collection' => 'Linass',
                'imagePreview' => 'images\Linass\T-Shirts_Linass_white_1.png',
                'weight' => 1.2,
                'discount' => 3.01,
                'colors' => ['white', 'black', 'pink'],
                'sizes' => ['S', 'M', 'L', 'XL'],
                'imageCount' => 3
            ],
            //Accessories
            [
                'name' => "Minimalist Backpack",
                'description' => "Introducing the NorthSQD All-Over Print Minimalist Backpack—perfect for those who are always on the move, inspired by the ethereal beauty of the northern lights. This spacious backpack is crafted from water-resistant material and offers a stylish yet functional design. With ample storage, including a large inside pocket for a laptop and a hidden pocket for valuables, this backpack is ideal for travelers and daily commuters alike.

                <br>
                <br>Details:
                <ul class='db-list'>
                <li>Made from 100% polyester</li>
                <li>Fabric weight: 9.56 oz./yd.² (325 g/m²), weight may vary by 5%</li>
                <li>Dimensions: 16.1″ (41 cm) in height, 12.2″ (31 cm) in width, and 5.5″ (14 cm) in diameter</li>
                <li>Capacity: 5.3 gallons (20 l)</li>
                <li>Max weight: 44 lbs (20 kg)</li>
                <li>Water-resistant material</li>
                <li>A large inside pocket with a separate pocket that fits a 15″ laptop</li>
                <li>A hidden pocket with zipper on the back of the bag</li>
                <li>Top zipper has 2 sliders with zipper pulls</li>
                <li>Silky lining, piped inside hems, and a soft mesh back</li>
                <li>Padded ergonomic bag straps made from polyester</li>
                <li>Printed, cut, and hand-sewn by our expert in-house team</li>
                <li>Download CPSIA compliance certificates</li>
                <li>Download the fabric safety test certificate</li>
                <li>Blank product components sourced from China</li>
                </ul>

",
                'price' => 50.00,
                'category' => 'Accessories',
                'collection' => 'Linass',
                'imagePreview' => 'images\Linass\Accessories_Linass_white_2.png',
                'weight' => 4.3,
                'discount' => 5.01,
                'colors' => ['white'],
                'sizes' => ['Medium'],
                'imageCount' => 4
            ],
            //Sweatshirt
            [
                'name' => "Unisex Sweatshirt",
                'description' => "Discover unparalleled comfort and style with the NorthSQD Unisex Organic Raglan Sweatshirt, inspired by the mesmerizing northern lights. Designed for everyday wear, this sweatshirt promises to be a favorite in your wardrobe. The soft fleece inside offers a cozy feel, while the smooth 100% organic cotton exterior maintains a clean, polished look. Its premium materials ensure that your prints remain flawless and embroidery designs stay neat and durable.

                <br>
                <br>Details:
                <ul class='db-list'>
                <li>100% organic cotton exterior</li>
                <li>Charcoal Mélange’s exterior: 60% organic cotton, 40% recycled polyester</li>
                <li>80% organic cotton, 20% recycled polyester interior</li>
                <li>97% organic cotton, 3% elastane ribs</li>
                <li>Fabric weight: 8.3 oz/yd² (280 g/m²)</li>
                <li>Fabric weight for Charcoal Mélange: 10.3 oz/yd² (348 g/m²)</li>
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
                'collection' => 'Linass',
                'imagePreview' => 'images\Linass\Sweatshirts_Linass_white_1.png',
                'weight' => 2.9,
                'discount' => null,
                'colors' => ['white', 'orange', 'black'],
                'sizes' => ['S', 'M', 'L', 'XL'],
                'imageCount' => 2
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
                <li>ADouble-layered hood</li>
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
                'collection' => 'Linass',
                'imagePreview' => 'images\Linass\Hoodie_Linass_white_1.png',
                'weight' => 3.2,
                'discount' => null,
                'colors' => ['white', 'black'],
                'sizes' => ['S', 'M', 'L', 'XL'],
                'imageCount' => 3
            ],
            //Hat
            [
                'name' => "Abibas Dad Hat",
                'description' => "Introducing the NorthSQD x abibas Dad Hat—where versatility meets the enchanting allure of the northern lights. This stylish hat is made of 100% recycled polyester, offering a lightweight and adjustable fit perfect for any occasion. Enhance its appeal with custom embroidery designs on the front, back, and left side to create a standout accessory.<br>
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
                'collection' => 'Linass',
                'imagePreview' => 'images\Linass\Hat_Linass_white_1.png',
                'weight' => 3.2,
                'discount' => 2.01,
                'colors' => ['white', 'black'],
                'sizes' => ['Medium'],
                'imageCount' => 3
            ],
            [
                'name' => "Unisex Canvas Shoes",
                'description' => "Elevate your style with the Unisex Lace-Up Canvas Shoes by NorthSQD, where fashion meets the enchantment of the northern lights. Crafted for those who seek both comfort and flair, these shoes are designed to make a statement.

The padded collar and tongue create a sleek, eye-catching silhouette, while the soft insole ensures extra comfort on the go. The artistic design, inspired by the mystique of the northern lights, brings a unique touch to your footwear collection. Customize your pair with your logo on the box, insole, and tongue—making sure your brand stands out in every stride.
<br>
    <br>Details:
    <ul class='db-list'>
	<li>100% polyester canvas upper side.</li>
	<li>Ethylene-vinyl acetate (EVA) rubber outsole.</li>
	<li>Breathable lining.</li>
	<li>Padded collar and tongue.</li>
	<li>Removable insole.</li>
	<li>White laces.</li>
	<li>Blank product sourced from China.</li>
</ul>
",
                'price' => 45.00,
                'category' => 'Shoes',
                'collection' => 'Rodions',
                'imagePreview' => 'images\Rodions\Shoes_Rodions_white_1.png',
                'weight' => 3.5,
                'discount' => 5.01,
                'colors' => ['white'],
                'sizes' => ['EU 36', 'EU 38', 'EU 39', 'EU 42'],
                'imageCount' => 3
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
                'collection' => 'Rodions',
                'imagePreview' => 'images\Rodions\T-Shirts_Rodions_white_1.png',
                'weight' => 1.2,
                'discount' => 3.01,
                'colors' => ['white', 'black', 'lavender'],
                'sizes' => ['S', 'M', 'L', 'XL'],
                'imageCount' => 3
            ],
            //Accessories
            [
                'name' => "Snap Case for iPhone",
                'description' => "Introducing the NorthSQD All-Over Print Minimalist Backpack—perfect for those who are always on the move, inspired by the ethereal beauty of the northern lights. This spacious backpack is crafted from water-resistant material and offers a stylish yet functional design. With ample storage, including a large inside pocket for a laptop and a hidden pocket for valuables, this backpack is ideal for travelers and daily commuters alike.

Introducing the NorthSQD Tough Case for iPhone®—where durability meets the enchanting spirit of the northern lights. Designed with a dual-layer for extra protection, this case ensures your phone stays safe with an impact-resistant outer shell and an impact-absorbing inner liner. Customize it with your designs to offer customers a stylish yet robust protective case.
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
<br>
",
                'price' => 50.00,
                'category' => 'Accessories',
                'collection' => 'Rodions',
                'imagePreview' => 'images\Rodions\Accessories_Rodions_purple_1.png',
                'weight' => 4.3,
                'discount' => 5.01,
                'colors' => ['purple'],
                'sizes' => ['Iphone 11', 'Iphone 12', 'Iphone 13'],
                'imageCount' => 2
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
                'imagePreview' => 'images\Rodions\Sweatshirts_Rodions_white_1.png',
                'weight' => 2.9,
                'discount' => null,
                'colors' => ['black', 'green', 'white'],
                'sizes' => ['S', 'M', 'L', 'XL'],
                'imageCount' => 2
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
                'imagePreview' => 'images\Rodions\Hoodie_Rodions_white_1.png',
                'weight' => 3.2,
                'discount' => null,
                'colors' => ['white', 'black'],
                'sizes' => ['S', 'M', 'L', 'XL'],
                'imageCount' => 3
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
                'imagePreview' => 'images\Rodions\Hat_Rodions_white_1.png',
                'weight' => 3.2,
                'discount' => 2.01,
                'colors' => ['white', 'black'],
                'sizes' => ['Medium'],
                'imageCount' => 2
            ],
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
                'imagePreview' => 'images/Deniss/Shoes_Deniss_white_1.png',
                'weight' => 2.5,
                'discount' => 20.01,
                'colors' => ['white'],
                'sizes' => ['EU 36','EU 38','EU 39','EU 42'],
                'imageCount' => 3
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
                'category' => 'T-Shirts',
                'collection' => 'Deniss',
                'imagePreview' => 'images/Deniss/T-Shirts_Deniss_gray_1.png',
                'weight' => 2.5,
                'discount' => 5.01,
                'colors' => ['white', 'black', 'gray'],
                'sizes' => ['S','M','L','XL'],
                'imageCount' => 3
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
                'imagePreview' => 'images/Deniss/Accessories_Deniss_oyster_3.png',
                'weight' => 4.3,
                'discount' => null,
                'colors' => ['oyster'],
                'sizes' => ['Large'],
                'imageCount' => 3
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
                'collection' => 'Deniss',
                'imagePreview' => 'images/Deniss/Sweatshirts_Deniss_orange_1.png',
                'weight' => 2.9,
                'discount' => null,
                'colors' => ['white', 'orange', 'black'],
                'sizes' => ['S','M','L','XL'],
                'imageCount' => 2
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
                'imagePreview' => 'images/Deniss/Hoodie_Deniss_black_2.png',
                'weight' => 3.2,
                'discount' => 20.01,
                'colors' => ['white', 'black'],
                'sizes' => ['S','M','L','XL'],
                'imageCount' => 3
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
                'collection' => 'Deniss',
                'imagePreview' => 'images/Deniss/Hat_Deniss_white_2.png',
                'weight' => 3.2,
                'discount' => 2.01,
                'colors' => ['white', 'black'],
                'sizes' => ['Medium'],
                'imageCount' => 3
            ],
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
                'imagePreview' => 'images\Katerina\Shoes_Katerina_white_1.png',
                'weight' => 3.5,
                'discount' => null,
                'colors' => ['white'],
                'sizes' => ['EU 36','EU 38','EU 39','EU 42'],
                'imageCount' => 3
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
                'imagePreview' => 'images\Katerina\T-Shirts_Katerina_white_5.png',
                'weight' => 1.2,
                'discount' => 3.01,
                'colors' => ['white', 'black', 'khaki'],
                'sizes' => ['S','M','L','XL'],
                'imageCount' => 4
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
                'imagePreview' => 'images\Katerina\Accessories_Katerina_white_1.png',
                'weight' => 4.3,
                'discount' => null,
                'colors' => ['white'],
                'sizes' => ['iPhone14','iPhone14 Pro', 'iPhone15','iPhone15 Plus',],
                'imageCount' => 3
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
                'imagePreview' => 'images\Katerina\Sweatshirts_Katerina_white_1.png',
                'weight' => 2.9,
                'discount' => null,
                'colors' => ['white', 'black'],
                'sizes' => ['S','M','L','XL'],
                'imageCount' => 4
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
                'imagePreview' => 'images\Katerina\Hoodie_Katerina_white_2.png',
                'weight' => 3.2,
                'discount' => null,
                'colors' => ['white', 'black'],
                'sizes' => ['S','M','L','XL'],
                'imageCount' => 3
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
                'imagePreview' => 'images\Katerina\Hat_Katerina_white_3.png',
                'weight' => 3.2,
                'discount' => null,
                'colors' => ['white', 'black'],
                'sizes' => ['Medium size'],
                'imageCount' => 4
            ],                    
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
                'collection' => 'Matiss',
                'imagePreview' => 'images\Matiss\T-Shirts_Matiss_white_2.png',
                'weight' => 1.2,
                'discount' => 3.01,
                'colors' => ['white', 'black'],
                'sizes' => ['S', 'M', 'L', 'XL'],
                'imageCount' => 2
            ],
            //Accessories
            [
                'name' => "Insulated Tumbler with a Straw",
                'description' => "Tired of mundane drinkware? Say hello to a North SQD Insulated Tumbler.

                <br>
                <br>Details:
                <ul class='db-list'>
                <li>High-grade stainless steel tumbler</li>
                <li>20 oz. (600 ml)</li>
                <li>Tumbler size: 4″ × 7.2″ (10.1 cm × 18.2 cm)</li>
                <li>Includes straw and lid</li>
                <li>Blank product sourced from China and printed in the US</li>
                </ul>

",
                'price' => 30.00,
                'category' => 'Accessories',
                'collection' => 'Matiss',
                'imagePreview' => 'images\Matiss\Accessories_Matiss_white_1',
                'weight' => 20,
                'discount' => 5.01,
                'colors' => ['white', 'black'],
                'sizes' => ['20 oz'],
                'imageCount' => 2
            ],
            //Sweatshirt
            [
                'name' => "Unisex Sweatshirt",
                'description' => "Discover unparalleled comfort and style with the NorthSQD Unisex Organic Raglan Sweatshirt, inspired by the mesmerizing northern lights. Designed for everyday wear, this sweatshirt promises to be a favorite in your wardrobe. The soft fleece inside offers a cozy feel, while the smooth 100% organic cotton exterior maintains a clean, polished look. Its premium materials ensure that your prints remain flawless and embroidery designs stay neat and durable.

                <br>
                <br>Details:
                <ul class='db-list'>
                <li>100% organic cotton exterior</li>
                <li>Charcoal Mélange’s exterior: 60% organic cotton, 40% recycled polyester</li>
                <li>80% organic cotton, 20% recycled polyester interior</li>
                <li>97% organic cotton, 3% elastane ribs</li>
                <li>Fabric weight: 8.3 oz/yd² (280 g/m²)</li>
                <li>Fabric weight for Charcoal Mélange: 10.3 oz/yd² (348 g/m²)</li>
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
                'collection' => 'Matiss',
                'imagePreview' => 'images\Matiss\Sweatshirts_Matiss_white_1.png',
                'weight' => 2.9,
                'discount' => null,
                'colors' => ['white', 'black'],
                'sizes' => ['S', 'M', 'L', 'XL'],
                'imageCount' => 2
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
                <li>ADouble-layered hood</li>
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
                'collection' => 'Matiss',
                'imagePreview' => 'images\Matiss\Hoodie_Matiss_black_1.png',
                'weight' => 3.2,
                'discount' => null,
                'colors' => ['white', 'black'],
                'sizes' => ['S', 'M', 'L', 'XL'],
                'imageCount' => 2
            ],
            //Hat
            [
                'name' => "Oh Deer Beanie",
                'description' => "Introducing the NorthSQD x Oh Deer Beanie — where versatility meets the enchanting allure of the northern lights. This stylish hat is offering a lightweight and adjustable fit perfect for any occasion. Enhance its appeal with custom embroidery designs on the front, back, and left side to create a standout accessory.<br>
        <br>Details:
        <ul class='db-list'>
        <li>95% polyester, 5% spandex (fabric composition may vary by up to 1%)</li>
        <li>Fabric weight: 6.19 oz./yd.² (210 g/m²)</li>
        <li>Double-layered</li>
        <li>Regular fit  (order a size up for a slouchy fit)</li>
        <li>Customizable inside layer (the hat can’t be worn inside-out because of visible stitching)</li>
        <li>Wash at 86°F (30°C)</li>
        <li>Fabric is OEKO-TEX 100 standard certified</li>
        <li>Components sourced from Lithuania</li>
        </ul>
",
                'price' => 21.00,
                'category' => 'Hat',
                'collection' => 'Matiss',
                'imagePreview' => 'images\Matiss\Hat_Matiss_white_1.png',
                'weight' => 6.19,
                'discount' => 2.01,
                'colors' => ['white'],
                'sizes' => ['Medium'],
                'imageCount' => 4
            ]
        ];

        foreach ($items as $itemData) {
            // Seed Items Table
            $itemId = DB::table('items')->insertGetId([
                'name' => $itemData['name'],
                'description' => $itemData['description'],
                'price' => $itemData['price'],
                'category' => $itemData['category'],
                'imagePreview' => $itemData['imagePreview'],
                'weight' => $itemData['weight'],
                'discount' => $itemData['discount'],
                'collection' => $itemData['collection'],
                'imageCount' => $itemData['imageCount'] // Initialize with 0, will update later
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

                // Collect images for this color
                $images = [];
                for ($i = 1; $i <= $itemData['imageCount']; $i++) {
                    $imagePath = "images/{$itemData['collection']}/{$itemData['category']}_{$itemData['collection']}_{$color}_$i.png";
                    $images[] = $imagePath;
                }

                // Seed Item Images Table
                DB::table('item_images')->insert([
                    'image1' => $images[0] ?? null,
                    'image2' => $images[1] ?? null,
                    'image3' => $images[2] ?? null,
                    'image4' => $images[3] ?? null,
                    'image5' => $images[4] ?? null,
                    'color_id' => $colorId,
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