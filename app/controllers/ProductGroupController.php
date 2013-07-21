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
        $group = ProductGroup::where('url','=',$groupUrl)->with('childGroups')->first();
        $products = Product::where('group_id','=',$group->id);
        if(count($group->childGroups)>0){
            $groupIds = array_map(function($group){ return $group['id'];}, $group->childGroups->toArray());
            $products->whereIn('group_id', $groupIds);
        }

        $products = $products->paginate(9);

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