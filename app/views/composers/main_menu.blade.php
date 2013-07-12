@section('js')
@parent
<script>
    $(function(){
        $('#nav').superfish();
    });
</script>
@stop
<div class="nav-container">
    <div class="container_24">
        <div class="grid_24">
            <div id="menu-icon">Categories</div>
            <ul id="nav" class="sf-menu">
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
        <div class="clear"></div>
    </div>
</div>