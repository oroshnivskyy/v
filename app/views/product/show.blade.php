@extends('_layouts.main')
@section('js')
@parent
<script>
    $(function () {
        $('a#image_zoom').jqZoomIt();
            var previews 	= jQuery('.product-image a'),
                thumbnails 	= jQuery('div.product-images-thumbnails img');
            $('a#image_zoom').jqZoomIt({
                init : function(){
                    $( this ).addClass('zoomIt_loaded');
                }
            });
        $(thumbnails).click(function(e){
                e.preventDefault();
            $(thumbnails).css('border-color','#6A6969');
            $(this ).css('border-color','black');
            $(previews).removeClass('product-image-visible').addClass('product-image-hidden');
                var key = $.inArray( this, thumbnails );
            $(previews[key]).removeClass('a.product-image-hidden').addClass('product-image-visible')
                if( !$(previews[key]).hasClass('zoomIt_loaded') ){
                    $(previews[key]).jqZoomIt();
                    $(previews[key]).addClass('zoomIt_loaded');
                }
            })

    });
</script>
@stop
@section('main')
<div class="main-container col2-right-layout">
    <div class="container_24">
        <div class="wrapper">
            <div class="grid_24">
                <div class="main">
                    <div class="breadcrumbs" style="margin-top: 30px;">
                        <ul>
                            <li class="home">
                                <a href="{{route('home')}}" title="Переити на домашнюю страницу">На главную</a>
                                <span>></span>
                            </li>
                            <li>
                                <a href="{{route('product_group',[$product->group->url])}}"
                                   title="{{{$product->group->title}}}">{{{$product->group->name}}}</a>
                                <span>></span>
                            </li>
                            <li class="product">
                                <strong>{{{$product->name}}}</strong>
                            </li>
                        </ul>
                    </div>
                    <div class="wrapper">
                        <div class="col-main alpha grid_18">
                            <div class="padding-r">
                                <div id="messages_product_view"></div>
                                <div class="product-view">
                                    <div class="product-essential">
                                        <form action="" method="post" id="product_addtocart_form">
                                            <div class="no-display">
                                                <input type="hidden" name="product_id" value="43"/>
                                            </div>
                                            <div class="product-img-box">
                                                <p class="product-image">
                                                    <a id="image_zoom" class="product-image-visible" target="_blank"
                                                       href="{{$product->getBigImageUrl()}}">
                                                        <img class="big" src="{{$product->getImageUrl()}}"
                                                             alt='{{{$product->image_alt}}}' title="{{{$product->image_alt}}}"/>
                                                    </a>
                                                <?php for($i=1;$i<=4;$i++): ?>
                                                    <?php
                                                    $imageName = 'image'.$i;
                                                    if(empty($product->$imageName)) break;
                                                    ?>
                                                    <a class="product-image-hidden" target="_blank"
                                                       href="{{$product->getBigImageUrl('image'.$i)}}">
                                                        <img class="big" src="{{$product->getImageUrl($imageName)}}"
                                                             title="{{{$product->image_alt}}}"/>
                                                    </a>
                                                <?php endfor; ?>
                                                
                                                    <div class="product-images-thumbnails">
                                                        <img style="border-color: black;"
                                                            class="small" src="{{$product->getImageUrl()}}"
                                                            title="{{{$product->image_alt}}}"/>
                                                    <?php for($i=1;$i<=4;$i++): ?>
                                                        <?php 
                                                            $imageName = 'image'.$i;
                                                            if(empty($product->$imageName)) break;
                                                        ?>
                                                        <img
                                                             class="small" src="{{$product->getImageUrl($imageName)}}"
                                                             title="{{{$product->image_alt}}}"/>
                                                    <?php endfor; ?>
                                                    </div>
                                                </p>
                                                {{--@include('product.more_views')--}}
                                            </div>
                                            <div class="product-shop">
                                                <div class="product-name">
                                                    <h1>{{{$product->name}}}</h1>
                                                </div>
                                                <div class="short-description">
                                                    <h2>Quick Overview</h2>

                                                    <div class="std">{{$product->description}}
                                                    </div>
                                                </div>
                                                <p class="availability in-stock">Доступность: <span>На складе</span></p>
                                                @if(isset($product->size))
                                                <p class="availability in-stock">Размер: <span>{{{$product->size}}}</span></p>
                                                @endif
                                                <div class="price-box">
                                                    <span class="regular-price" id="product-price-43">
                                                    <span class="price">{{$product->cost}} грн.</span> </span>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="add-to-box">
                                                    <div class="add-to-cart">
                                                        <button type="button" title="Купить" 
                                                                class="button btn-cart do_buy"
                                                                data-id="{{$product->id}}"
                                                                data-name="{{$product->name}}"
                                                                data-cost="{{$product->cost}}"
                                                                data-size="{{$product->size}}"
                                                            >
                                                            <span><span>Купить</span></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="product-collateral">
                                        <div class="box-collateral box-description">
                                            <h2>Детали</h2>

                                            <div class="box-collateral-content">
                                                <div class="std">
                                                    {{$product->bottom_text}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- @include('product.interested_in') --}}
                            </div>
                        </div>
                        {{-- @include('product.related') --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('purchase')
@include('_layouts.purchase')
@stop