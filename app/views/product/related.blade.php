<div class="col-right sidebar grid_6 omega">
<div class="block block-related">
    <div class="block-title">
        <strong><span>Похожие вышиванки</span></strong>
    </div>
    <div class="block-content">
        <ol class="mini-products-list" id="block-related">
            @foreach($relatedProducts as $product)
            <li class="item">
                <div class="product">
                    <a href="{{route('product',[$product->group->url,$product->url])}}" title="{{{$product->title}}}"
                       class="product-image">
                        <img src="{{ url($product->getImageUrl()) }}"
                            width="70" height="70" alt="{{{$product->image_alt}}}"/></a>

                    <p class="product-name">
                        <a href="{{route('product',[$product->group->url,$product->url])}}">{{{$product->name}}}</a>
                    </p>

                    <div class="clear"></div>
                    <div class="product-details">
                        <div class="price-box">
                            <span class="regular-price" >
                                <span class="price">{{$product->cost}} грн</span>
                            </span>
                            <button type="button" title="Купить"
                                    class="button btn-cart do_buy"
                                    data-id="{{$product->id}}"
                                    data-name="{{$product->name}}"
                                    data-cost="{{$product->cost}}"
                                    data-size="{{$product->size}}"
                                    style="float:right;"
                                >
                                <span><span>Купить</span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ol>
    </div>
</div>
    {{-- @include('product.cart') --}}
    @include('product.community_poll')
</div>