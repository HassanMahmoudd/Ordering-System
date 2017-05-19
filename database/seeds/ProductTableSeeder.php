<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $product = new App\Product([
//            'title' => 'Shawerma',
//            'imagePath' => 'http://www.recipetineats.com/wp-content/uploads/2014/12/Chicken-Shawarma_4.jpg',
//            'description' => 'Tasty',
//            'price' => 10
//        ]);
//
//        $product->save();

//        $product = new App\Product([
//            'title' => 'Kofta',
//            'imagePath' => 'https://i1.wp.com/angsarap.net/wp-content/uploads/2012/12/beef-kofta.jpg',
//            'description' => 'Syrian Way',
//            'price' => 20
//        ]);
//
//        $product->save();

//        $product = new App\Product([
//            'title' => 'Pasta',
//            'imagePath' => 'http://www.neuromed.it/en/wp-content/uploads/2016/07/pasta.jpg',
//            'description' => 'Red Sauce',
//            'price' => 25
//        ]);
//
//        $product->save();
//
//        $product = new App\Product([
//            'title' => 'Kabab',
//            'imagePath' => 'https://i.ytimg.com/vi/NeQxq3UGhLc/maxresdefault.jpg',
//            'description' => 'Syrian Way',
//            'price' => 20
//        ]);

//        $product->save();

//        $product = new App\Product([
//            'title' => 'Burger',
//            'imagePath' => 'https://media.timeout.com/images/102943912/image.jpg',
//            'description' => 'Cheesy Burger',
//            'price' => 30
//        ]);
//
//        $product->save();
//
//        $product = new App\Product([
//            'title' => 'Fattah',
//            'imagePath' => 'https://kitchenani.files.wordpress.com/2015/06/img_0686.jpg',
//            'description' => 'Syrian Way',
//            'price' => 30
//        ]);
//
//        $product->save();
//
//        $product = new App\Product([
//            'title' => 'Pizza',
//            'imagePath' => 'https://eatpizzafresca.com/images/pepperoni_pizza.jpg?crc=4023861219',
//            'description' => 'Italian',
//            'price' => 35
//        ]);
//
//        $product->save();

        $product = new App\Product([
            'title' => 'Chicken Wings',
            'imagePath' => 'http://www.coca-colacompany.com/content/dam/journey/us/en/global/2012/11/chicken-wings-604mk112612-604-337-3f7d77f6.jpg',
            'description' => 'Buckets',
            'price' => 40
        ]);

        $product->save();
    }
}
