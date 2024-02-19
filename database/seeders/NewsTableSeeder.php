<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
                //Define Data
                $data = [
                    [
                        'title' => '研磨切斷片',
                        'slug' => 'img/1',
                        'author_id' => '1',
                        'content' => '如何輕易地從免疫細胞群中找出只占 5-10% 真正具有多功能性表現的單細胞，圖爾思與 BRUKER Cellular Analysis 為您解鎖單細胞奧義。BRUKER Cellular Analysis 致力',
                        'published_at' => '2023-01-17'
                    ],
                    [
                        'title' => '研磨切斷片',
                        'slug' => 'img/2',
                        'author_id' => '2',
                        'content' => '如何輕易地從免疫細胞群中找出只占 5-10% 真正具有多功能性表現的單細胞，圖爾思與 BRUKER Cellular Analysis 為您解鎖單細胞奧義。BRUKER Cellular Analysis 致力',
                        'published_at' => '2023-01-17'
                    ],
                    [
                        'title' => '研磨切斷片',
                        'slug' => 'img/3',
                        'author_id' => '3',
                        'content' => '如何輕易地從免疫細胞群中找出只占 5-10% 真正具有多功能性表現的單細胞，圖爾思與 BRUKER Cellular Analysis 為您解鎖單細胞奧義。BRUKER Cellular Analysis 致力',
                        'published_at' => '2023-01-17'
                    ],
                    [
                        'title' => '研磨切斷片',
                        'slug' => 'img/4',
                        'author_id' => '4',
                        'content' => '如何輕易地從免疫細胞群中找出只占 5-10% 真正具有多功能性表現的單細胞，圖爾思與 BRUKER Cellular Analysis 為您解鎖單細胞奧義。BRUKER Cellular Analysis 致力',
                        'published_at' => '2023-01-17'
                    ],
                    [
                        'title' => '研磨切斷片',
                        'slug' => 'img/5',
                        'author_id' => '5',
                        'content' => '如何輕易地從免疫細胞群中找出只占 5-10% 真正具有多功能性表現的單細胞，圖爾思與 BRUKER Cellular Analysis 為您解鎖單細胞奧義。BRUKER Cellular Analysis 致力',
                        'published_at' => '2023-01-17'
                    ],
                    [
                        'title' => '研磨切斷片',
                        'slug' => 'img/6',
                        'author_id' => '6',
                        'content' => '如何輕易地從免疫細胞群中找出只占 5-10% 真正具有多功能性表現的單細胞，圖爾思與 BRUKER Cellular Analysis 為您解鎖單細胞奧義。BRUKER Cellular Analysis 致力',
                        'published_at' => '2023-01-17'
                    ],
                    [
                        'title' => '研磨切斷片',
                        'slug' => 'img/7',
                        'author_id' => '7',
                        'content' => '如何輕易地從免疫細胞群中找出只占 5-10% 真正具有多功能性表現的單細胞，圖爾思與 BRUKER Cellular Analysis 為您解鎖單細胞奧義。BRUKER Cellular Analysis 致力',
                        'published_at' => '2023-01-17'
                    ],
                    [
                        'title' => '研磨切斷片',
                        'slug' => 'img/8',
                        'author_id' => '8',
                        'content' => '如何輕易地從免疫細胞群中找出只占 5-10% 真正具有多功能性表現的單細胞，圖爾思與 BRUKER Cellular Analysis 為您解鎖單細胞奧義。BRUKER Cellular Analysis 致力',
                        'published_at' => '2023-01-17'
                    ],
                    [
                        'title' => '研磨切斷片',
                        'slug' => 'img/9',
                        'author_id' => '9',
                        'content' => '如何輕易地從免疫細胞群中找出只占 5-10% 真正具有多功能性表現的單細胞，圖爾思與 BRUKER Cellular Analysis 為您解鎖單細胞奧義。BRUKER Cellular Analysis 致力',
                        'published_at' => '2023-01-17'
                    ],
             
                ];
                // Insert Data
                DB::table('news')->insert($data);
            
    }
}
