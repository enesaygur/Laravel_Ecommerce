<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("products")->insert([
            [
            "name"=>"Oppo Mobile",
            "price"=>"300",
            "description"=>"Smartphone with 8gb ram ...",
            "category"=>"Mobile",
            "gallery"=>"https://cdn.akakce.com/z/oppo/oppo-a16-64-gb-siyah.jpg"
            ],
            [
            "name"=>"Vestel TV",
            "price"=>"400",
            "description"=>"Smart TV with much more colors ...",
            "category"=>"Tv",
            "gallery"=>"https://statics.vestel.com.tr/productimages/20276106_r3_540_358.jpg"
            ],
            [
            "name"=>"Xiaomi TV",
            "price"=>"500",
            "description"=>"Smart TV with much more colors ...",
            "category"=>"Tv",
            "gallery"=>"https://cdn.cimri.io/image/1200x1200/xiaomitelevizyonlarfiyatlar_676093156.jpg"
            ],
            [
            "name"=>"LG Fridge",
            "price"=>"600",
            "description"=>"A fridge with more features ...",
            "category"=>"Fridge",
            "gallery"=>"https://www.lg.com/in/images/refrigerators/md06236076/gallery/N01_GL-S292RPZY-Refrigerators-Front-View-D-01.jpg"
             ],
        ]);
    }
}
