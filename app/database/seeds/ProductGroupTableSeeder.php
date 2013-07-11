<?php
class ProductGroupTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products_groups')->delete();
        ProductGroup::insert(
            [
                ['name' => 'Женские', 'url' => 'for-woman', 'image'=>'slide1.jpg', 'is_enabled' =>true],
                ['name' => 'Мужские', 'url' => 'for-man','image'=>'slide2.jpg', 'is_enabled' =>true],
                ['name' => 'Детские', 'url' => 'for-children','image'=>'slide3.jpg', 'is_enabled' =>true]
            ]
        );
        
        $earringsId = ProductGroup::where('url','=','for-children')->get(['id'])->first()->id;
        ProductGroup::insert(
            [
                ['name' => 'Для девочек', 'url' => 'for-girls', 'parent_id' => $earringsId, 'is_enabled' =>true],
                ['name' => 'Для мальчиков', 'url' => 'for-boys', 'parent_id' => $earringsId, 'is_enabled' =>true],
            ]
        );
    }
}