@section('js')
@parent
<script>
    $(function(){
        $('#nav').superfish();
    });
</script>
@stop
<?php $selected_main_menu_item=isset($selected_main_menu_item)?$selected_main_menu_item:-5; ?>
<div class="nav-container">
    <div class="container_24">
        <div class="grid_24">
            <div id="menu-icon">Categories</div>
            <ul id="nav" class="sf-menu" style="margin-top: 10px;">
                @foreach($main_menu_items as $item)
                <li
                @if($selected_main_menu_item==$item['id']||isset($item->child_groups[$selected_main_menu_item]))
                class="active" @endif>
                <a href="{{route('product_group',[$item['url']])}}" class="level-top"><span>{{$item['name']}}</span></a>
                @if(!empty($item['child_groups']))
                <ul>
                    @foreach($item['child_groups'] as $child_group)
                    <li
                    @if($selected_main_menu_item==$child_group['id']) class="active" @endif>
                    <a href="{{route('product_group',[$child_group['url']])}}">
                        <span>{{$child_group['name']}}</span>
                    </a>
                    </li>
                    @endforeach
                </ul>
                @endif
                </li>
                @endforeach
            </ul>
        </div>
        <div class="menu-footer">
        <div class="clear"></div>
    </div>
</div>