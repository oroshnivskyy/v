@extends('_layouts.main')
@section('js')
@parent
<script>
    $(function(){
        effects.hover();
        pager.paginate('{{route('product_group', [$group->url])}}');
    })
</script>
@stop
@section('main')
@include('productGroup._show')
@stop