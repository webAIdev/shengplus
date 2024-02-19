<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        $data = [

            [
                'name' => '研磨切斷片',
                'slug' => 'img/Grinding',
                'description' => '長期致力於砂輪 、研磨產業供應鏈並提供製造 、整合型 、顧問服務',
                'price' => '1000',
                'category_id' => '1'
            ],
            [
                'name' => '雷射焊接機',
                'slug' => 'img/welding',
                'description' => '顛覆了傳統的雷射焊接機的工作模式 ， 用手持的方式替代以前固定光路',
                'price' => '1000',
                'category_id' => '2'
            ],
            [
                'name' => '手持打包機',
                'slug' => 'img/packaging',
                'description' => '專業經營鋼帶打包機、塑帶打包機、緩衝包裝設備及相關耗材與附屬設備',
                'price' => '1000',
                'category_id' => '3'
            ],
            [
                'name' => '特殊貴金屬',
                'slug' => 'img/metal',
                'description' => '專業製造貴金屬產品，鎢、鉬 、鉺、鈮、鋯、鈦、鎳、銅、銥、鉑、鈹、鉿、司太立合金、鎢合金、鉬合金、濺鍍靶材等',
                'price' => '1000',
                'category_id' => '4'
            ]
        ];
        // insert data to table
        DB::table('products')->insert($data);

    }
}