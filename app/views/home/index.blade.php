@extends('_layouts.main')
@section('js')
@parent
<script>
    $(function(){
        $('.cms-home .products-grid li.item').hover(function () {
            $(this).find('.product-box-info').stop().animate({bottom: '0'}, 200)
        }, function () {
            $(this).find('.product-box-info').stop().animate({bottom: '-200px'}, 200)
        });
    });
</script>
@stop
@section('main')
@include('home.page')
@stop