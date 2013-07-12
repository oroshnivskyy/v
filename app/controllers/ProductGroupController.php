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
        $group = ProductGroup::where('url','=',$groupUrl)->with('products')->get()->toArray();
        return $group;
    }
}