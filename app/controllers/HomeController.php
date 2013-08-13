<?php

class HomeController extends BaseController
{

    public function getIndex()
    {
        /**
         * @var Illuminate\Pagination\Paginator $products
         */
        $products = Product::with(
            [
                'group' => function ($query) {
                    $query->select(['url','id']);
                }
            ]
        )->orderBy('rating', 'desc')->paginate(9,['name', 'url', 'image', 'image_alt', 'cost', 'group_id']);
        
        if(Request::ajax()){
            return View::make('home.page', ['products' => $products]);
        }

        $text = Cache::rememberForever('main-page', function(){
            return Page::where('name','=','main-page')->first(['text'])->text;
        });
        return $this->renderView('home.index', ['products' => $products, 'text'=>$text])
            ->with('title', 'Вышиванки для мужчин женщин и детей');
    }

}