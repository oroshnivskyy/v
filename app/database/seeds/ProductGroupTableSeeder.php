<?php
class ProductGroupTableSeeder extends Seeder
{
    public function run()
    {
        ProductGroup::insert(
            [
                ['name' => 'Браслеты', 'id' => 'bracelets', 'image'=>'slide1.jpg', 'is_enabled' =>true],
                ['name' => 'Серёжки', 'id' => 'earrings','image'=>'slide2.jpg', 'is_enabled' =>true],
                ['name' => 'Ожерелья', 'id' => 'necklaces','image'=>'slide3.jpg', 'is_enabled' =>true],
                ['name' => 'Кольца', 'id' => 'rings','image'=>'slide4.jpg', 'is_enabled' =>true],
                ['name' => 'Наборы', 'id' => 'sets','image'=>'slide5.jpg', 'is_enabled' =>true],
            ]
        );
        
        $earringsId = ProductGroup::find('earrings')->id;
        ProductGroup::insert(
            [
                ['name' => 'Стеклянные серёжки', 'id' => 'glass-earrings', 'parent_id' => $earringsId, 'is_enabled' =>true],
                ['name' => 'Металлические сережки', 'id' => 'metal-earrings', 'parent_id' => $earringsId, 'is_enabled' =>true],
                ['name' => 'Пластиковые сережки', 'id' => 'plastic-earrings', 'parent_id' => $earringsId, 'is_enabled' =>true],
            ]
        );
    }
}