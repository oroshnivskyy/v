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
    protected function rederView($view, $data = array(), $mergeData = array())
    {
        View::composer(
            'composers.main_menu',
            function ($view) {
                $view->with(
                    'main_menu_items',
                    array(
                        'Bracelets' => array('link' => 'bracelets'),
                        'Earrings' => array(
                            'link' => 'earrings',
                            'items' => array(
                                'Glass Earrings' => array('link' => 'glass-earrings'),
                                'Metal Earrings' => array('link' => 'metal-earrings'),
                                'Plastic Earrings' => array('link' => 'plastic-earrings')
                            )
                        ),
                        'Necklaces' => array('link'=>'necklaces'),
                        'Rings' => array('link'=>'rings'),
                        'Sets' => array('link'=>'sets'),
                    )
                );
            }
        );
        return View::make($view, $data, $mergeData)->with('title', Config::get('view')['title']);
    }

}