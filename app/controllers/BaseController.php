<?php

class BaseController extends Controller
{

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if (!is_null($this->layout)) {
            $this->layout = View::make($this->layout);
        }
    }

    /**
     * Get a evaluated view contents for the given view.
     *
     * @param string $view
     * @param array $data
     * @param array $mergeData
     * @return \Illuminate\View\View
     * @static
     */
    protected function renderView($view, $data = array(), $mergeData = array())
    {
        View::composer(
            'composers.main_menu',
            function ($view) {
                $activeGroups  = Cache::rememberForever('active_groups',function(){
                        return ProductGroup::getActive()->get()->toArray();
                    });
                $view->with(
                    'main_menu_items',
                    $activeGroups
                );
            }
        );
        View::composer(
            'composers.cart',
            function ($view){
                $view->with('cart_items', []);
            }
        );
        return View::make($view, $data, $mergeData)->with('title', Config::get('view')['title']);
    }

}