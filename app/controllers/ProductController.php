<?php
class ProductController extends BaseController
{
    public function show($groupUrl, $productUrl)
    {
        $product = Product::with('group')->where('url', '=', $productUrl)->first();

        return $this->renderView('product.show', ['product' => $product])
            ->with('title', $product->title)
            ->with('selected_main_menu_item',$product->group_id)
            ->with('metaDescription',$product->meta_description)
            ->with('metaKeywords',$product->meta_keywords)
            ->with('bodyClass', ' catalog-product-view');
    }
}
