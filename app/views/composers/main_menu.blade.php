<div class="nav-container">
    <div class="container_24">
        <div class="grid_24">
            <div id="menu-icon">Categories</div>
            <ul id="nav" class="sf-menu">
                @foreach($main_menu_items as $name=>$data)
                <li @if($selected_main_menu_item==$name||isset($data['items'][$selected_main_menu_item])) class="active" @endif>
                    <a href="{{$data['link']}}" class="level-top"><span>{{$name}}</span></a>
                @if(isset($data['items']))
                    <ul>
                        @foreach($data['items'] as $sub_name=>$sub_data)
                        <li @if($selected_main_menu_item==$sub_name) class="active" @endif>
                            <a href="{{$sub_data['link']}}">
                                <span>{{$sub_name}}</span>
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