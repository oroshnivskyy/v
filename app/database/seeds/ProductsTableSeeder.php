<?php

class ProductsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	 DB::table('products')->delete();

        $products = [];

        for($i=1;$i<=9;$i++){
            $group_id = ProductGroup::orderBy(DB::raw('RAND()'))->take(1)->get(['id'])->first()->id;
            $products[]=
                ['name'=>'name'.$i,'title'=>''.$i, 'url'=> ''.$i, 'description'=>''.$i, 'meta_keywords'=>''.$i, 'meta_description'=>''.$i,
                    'image'=>"$i.jpg", 'cost'=>350, 'count'=>$i, 'rating'=>$i, 'bottom_text'=>'bottom_text'.$i, 'image_alt'=>'alt'.$i, 'group_id'=>$group_id ];
        }
        // Uncomment the below to run the seeder
         DB::table('products')->insert($products);
    }

}