@extends('_layouts.main')
@section('js')
@parent
<script>
    $(function () {
        $('a#image_zoom').jqZoomIt();
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
                                <a href="{{route('home')}}" title="Переити на домашнюю страницу">Домой</a>
                                <span>></span>
                            </li>
                            <li>
                                <a href="{{route('product_group',[$product->group->url])}}"
                                   title="{{$product->group->title}}">{{$product->group->name}}</a>
                                <span>></span>
                            </li>
                            <li class="product">
                                <strong>{{$product->name}}</strong>
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
                                                    <a id="image_zoom" style="display: block;"
                                                       href="{{$product->getBigImageUrl()}}">
                                                        <img class="big" src="{{$product->getImageUrl()}}"
                                                             alt='' title="{{$product->image_alt}}"/>
                                                    </a>
                                                </p>
                                                {{--@include('product.more_views')--}}
                                            </div>
                                            <div class="product-shop">
                                                <div class="product-name">
                                                    <h1>{{$product->name}}</h1>
                                                </div>
                                                <div class="short-description">
                                                    <h2>Quick Overview</h2>

                                                    <div class="std">{{{$product->description}}}
                                                    </div>
                                                </div>
                                                <p class="availability in-stock">Availability: <span>In stock</span></p>

                                                <div class="price-box">
                                                    <span class="regular-price" id="product-price-43">
                                                    <span class="price">{{$product->cost}} грн.</span> </span>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="add-to-box">
                                                    <div class="add-to-cart">
                                                        <button type="button" title="Купить" class="button btn-cart">
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
                                                    {{{$product->bottom_text}}}
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