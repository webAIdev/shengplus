<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Define Data
        $data = [
            [
                'name' => '研磨切斷片',
                'slug' => 'img/grinding_machine'
            ],
            [
                'name' => '雷射焊接機',
                'slug' => 'img/welding_machine'
            ],
            [
                'name' => '手持打包機',
                'slug' => 'img/packaging_machine'
            ],
            [
                'name' => '特殊貴金屬',
                'slug' => 'img/special_metal'
            ]
        ];
        // Insert Data
        DB::table('categories')->insert($data);
    }
}