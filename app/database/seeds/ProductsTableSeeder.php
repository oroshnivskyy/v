<?php

class ProductsTableSeeder extends Seeder
{

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('products')->delete();

        $products = [];

        $k=0;
        for ($i = 1; $i <= 90; $i++) {
            $k++; $k=$k===10?1:$k;
            $group_id = ProductGroup::orderBy(DB::raw('RAND()'))->take(1)->get(['id'])->first()->id;
            $products[] =
                [
                    'name' => 'name' . $i,
                    'title' => 'title' . $i,
                    'url' => 'url' . $i,
                    'description' => 'description' . $i,
                    'meta_keywords' => 'keywords' . $i,
                    'meta_description' => 'meta_description' . $i,
                    'image' => "$k.jpg",
                    'cost' => 350,
                    'count' => $i,
                    'rating' => rand(0,100),
                    'bottom_text' => 'bottom_text' . $i,
                    'image_alt' => 'alt' . $i,
                    'group_id' => $group_id
                ];
        }
        // Uncomment the below to run the seeder
        DB::table('products')->insert($products);
    }

}