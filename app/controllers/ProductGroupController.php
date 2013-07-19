<?php

class ProductGroupController extends BaseController {

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($groupUrl)
    {
        $group = ProductGroup::where('url','=',$groupUrl)->first();
        $products = Product::where('group_id','=',$group->id)->paginate(9);

        if(Request::ajax()){
            return View::make('productGroup._show', ['group'=>$group,'products' => $products]);
        }
        
        return $this->renderView('productGroup.show', ['group'=>$group, 'products'=>$products])
//            ->with('bodyClass',' catalog-category-view')
            ->with('selected_main_menu_item', $group->id)
            ->with('title', $group->title)
            ->with('metaDescription',$group->meta_description)
            ->with('metaKeywords',$group->meta_keywords);
    }
}