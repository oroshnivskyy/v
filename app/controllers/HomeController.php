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

        return $this->renderView('home.index', ['products' => $products])
            ->with('title', 'Вышиванки для мужчин женщин и детей');
    }

}