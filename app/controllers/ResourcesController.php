<?php
class ResourcesController extends BaseController{

    public function delivery(){
        return $this->renderView('resources.delivery')
            ->with('title', 'Доставка и оплата украинских вышиванок для мужчин женщин и детей')
            ->with('metaDescription',"Доставка и оплата вышиванок для мужчин женщин и детей")
            ->with('metaKeywords', "доставка, оплата, вышиванки, киев, вышиванки для детей, вышиванки для женщин, вышиванки для мужчин, вышиванки с доставкой, вышиванки по украине");
    }
}
