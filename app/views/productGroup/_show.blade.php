<div class="main-container col1-right-layout">
    <div class="container_24">
        @include('_layouts.pager',['pager'=>$products])
        </br>
        <div class="grid_24">
            <div class="main">
                <div class="breadcrumbs">
                    <ul>
                        <li class="home">
                            <a href="{{route('home')}}" title="Ити домой">Домой</a>
                            <span>></span>
                        </li>
                        <li class="category4">
                            <strong>{{{$group->name}}}</strong>
                        </li>
                    </ul>
                </div>
                <div class="col-main alpha grid_24 omega">
                    <div class="std">
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="std">
                    <div class="clear"></div>
                </div>
                <?php $i = 0; ?>
                @foreach ($products as $product)
                <?php ++$i;
                $i = ($i == 4) ? 1 : $i; ?>
                @if($i==1)
                <ul class="products-grid">
                    @endif
                    <li class="item @if($i==1)first@endif @if($i==3)last@endif ">
                        <a href="{{route('product',[$product->group->url,$product->url])}}"
                           title="{{{$product->title}}}" class="product-image"><img
                                src="{{ url($product->getImageUrl()) }}"
                                width="300" height="300" alt="{{{$product->image_alt}}}"/></a>

                        <div class="product-box-info">
                            <div class="product-box-bg">
                                <h3 class="product-name">
                                    <a href="{{route('product',[$product->group->url,$product->url])}}"
                                       title="{{{$product->title}}}">{{{$product->name}}}</a></h3>

                                <div class="price-box">
                            <span class="regular-price" id="product-price-50-new">
                            <span class="price">{{$product->cost}} грн</span> </span>
                                </div>
                            </div>
                        </div>
                    </li>
                    @if($i==3)
                </ul>
                @endif
                @endforeach
            </div>
            @include('_layouts.pager',['pager'=>$products])
            <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
