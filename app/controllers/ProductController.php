<?php
class ProductController extends BaseController{
    public function show( $groupUrl, $productUrl ){
        $product = Product::with( 'group' )->where( 'url', '=', $productUrl )->first();

        $relatedProducts = Product::with('group')
            ->where( 'group_id', '=', $product->group->id )
            ->where( 'id', '!=', $product->id )
            ->where( 'cost', '>', $product->cost -100 )
            ->where( 'cost', '<', $product->cost +100 )
            ->orderBy( DB::raw('RAND()'))
            ->take( 6 )->get();
        return $this->renderView( 'product.show', [ 'product' => $product, 'relatedProducts' => $relatedProducts ] )
            ->with( 'title', $product->title )
            ->with( 'selected_main_menu_item', $product->group_id )
            ->with( 'metaDescription', $product->meta_description )
            ->with( 'metaKeywords', $product->meta_keywords )
            ->with( 'bodyClass', ' catalog-product-view' );
    }
}
