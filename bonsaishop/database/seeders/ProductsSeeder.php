<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['pro_name' => 'Cây vạn lộc', 'price' => '200000', 'image' => 'https://vuoncayviet.com/data/items/949/cay-van-loc-vuoncayviet.jpg','describe' => 'Đây là mô tả','quantity' => '10','pro_slug' => 'cay-van-loc','category_id' => '1'],
            ['pro_name' => 'Cây xương rồng tháp', 'price' => '200000', 'image' => 'https://vuoncayviet.com/data/items/1136/xuong-rong-thap-1.jpg','describe' => 'Đây là mô tả','quantity' => '10','pro_slug' => 'cay-xuong-rong-thap','category_id' => '3'],
            ['pro_name' => 'Cây ổi', 'price' => '150000', 'image' => 'https://vuoncayviet.com/data/items/969/cay-oi-at001-1.jpg','describe' => 'Đây là mô tả','quantity' => '10','pro_slug' => 'cay-oi','category_id' => '5'],
            ['pro_name' => 'Cây lan tím', 'price' => '85000', 'image' => 'https://vuoncayviet.com/data/items/919/cay-lan-tim.jpg','describe' => 'Đây là mô tả','quantity' => '10','pro_slug' => 'cay-lan-tim','category_id' => '2'],
            ['pro_name' => 'Cây trường sinh', 'price' => '190000', 'image' => 'https://vuoncayviet.com/data/items/941/cay-truong-sinh-de-ban-vuoncayviet.com.jpg','describe' => 'Đây là mô tả','quantity' => '10','pro_slug' => 'cay-truong-sinh','category_id' => '1'],
            ['pro_name' => 'Cây hải đường', 'price' => '200000', 'image' => 'https://vuoncayviet.com/data/items/1218/cay-hoa-hai-duong.jpg','describe' => 'Đây là mô tả','quantity' => '10','pro_slug' => 'cay-hai-duong','category_id' => '2'],
            ['pro_name' => 'Cây thài lài sọc treo', 'price' => '200000', 'image' => 'https://vuoncayviet.com/data/items/1217/thai-lai-soc-treo.png','describe' => 'Đây là mô tả','quantity' => '10','pro_slug' => 'cay-thai-lai-soc-treo','category_id' => '2'],
            ['pro_name' => 'Cây trạng nguyên', 'price' => '300000', 'image' => 'https://vuoncayviet.com/data/items/1096/cay-trang-nguyen-1.png','describe' => 'Đây là mô tả','quantity' => '10','pro_slug' => 'cay-trang-nguyen','category_id' => '1'],
            ['pro_name' => 'Cây phú quý thủy sinh', 'price' => '200000', 'image' => 'https://vuoncayviet.com/data/items/899/cay-phu-quy-de-ban-phong-thuy.jpg','describe' => 'Đây là mô tả','quantity' => '10','pro_slug' => 'cay-phu-quy-thuy-sinh','category_id' => '4'],
            ['pro_name' => 'Cây phú quý', 'price' => '200000', 'image' => 'https://vuoncayviet.com/data/items/963/cay-phu-quy.jpg','describe' => 'Đây là mô tả','quantity' => '10','pro_slug' => 'cay-phu-quy','category_id' => '1'],
        ]);
    }
}
