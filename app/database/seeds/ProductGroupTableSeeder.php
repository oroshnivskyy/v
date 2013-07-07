<?php
class ProductGroupTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products_groups')->delete();
        ProductGroup::insert(
            [
                ['name' => 'Женские', 'id' => 'for-woman', 'image'=>'slide1.jpg', 'is_enabled' =>true],
                ['name' => 'Мужские', 'id' => 'for-man','image'=>'slide2.jpg', 'is_enabled' =>true],
                ['name' => 'Детские', 'id' => 'for-children','image'=>'slide3.jpg', 'is_enabled' =>true]
            ]
        );
        
        $earringsId = ProductGroup::find('for-children')->id;
        ProductGroup::insert(
            [
                ['name' => 'Для девочек', 'id' => 'for-girls', 'parent_id' => $earringsId, 'is_enabled' =>true],
                ['name' => 'Для мальчиков', 'id' => 'for-boys', 'parent_id' => $earringsId, 'is_enabled' =>true],
            ]
        );
    }
}