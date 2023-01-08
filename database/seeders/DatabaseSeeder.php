<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
         Product::factory()->create([
            
            'category'=>'Unnatural',
            'name'=>"LGBTQ",
            'price'=>'6969',
            'description'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, illum. Praesentium voluptatum et perferendis? Deserunt earum placeat rerum ex velit. Voluptates vero assumenda earum magnam, dolorum dicta et soluta nihil"  ,
            'gallery'=>'https://i.dailymail.co.uk/1s/2020/03/19/09/26156330-0-image-a-11_1584608745824.jpg',
           
           ]);
           Product::factory()->create([
            
            'category'=>'Clothes',
            'name'=>"T-rex",
            'price'=>'79',
            'description'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, illum. Praesentium voluptatum et perferendis? Deserunt earum placeat rerum ex velit. Voluptates vero assumenda earum magnam, dolorum dicta et soluta nihil"  ,
            'gallery'=>'https://cached.imagescaler.hbpl.co.uk/resize/scaleWidth/743/cached.offlinehbpl.hbpl.co.uk/news/OMC/dm-20181129095219639.jpg',
           
           ]);
           Product::factory()->create([
            
            'category'=>'Hats',
            'name'=>"Goremzo",
            'price'=>'100',
            'description'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, illum. Praesentium voluptatum et perferendis? Deserunt earum placeat rerum ex velit. Voluptates vero assumenda earum magnam, dolorum dicta et soluta nihil"  ,
            'gallery'=>'https://d1e00ek4ebabms.cloudfront.net/production/45107a0d-82ad-4abb-86dd-f27b90a314d0.jpg',
           
           ]);
     
    }
}
