@extends('_layouts.main')
@section('js')
@parent
<script>
    $(function(){
        effects.hover();
        pager.paginate('{{route('home')}}');
    })
</script>
@stop
@section('main')
@include('home.page')
<div class="menu-footer">
</div>
<div class="bottom-text">
    {{$text}}
</div>
@stop