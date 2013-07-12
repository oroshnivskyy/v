<?php $currentPage=$pager->getCurrentPage() ?>
<script>
    $(function(){
        $('ol').find('a').click(function(){
            var page =$(this).data('page');
            $.get('{{route('home')}}', {page: page}, function(data){
                $('#main').html(data);
            })
            return false;
        });
    });
</script>
<div class="pager">
    <p class="amount">
        Items {{$pager->getFrom()}} to {{$pager->getTo()}} of {{$pager->getTotal()}} total </p>

    <div class="pages">
        <strong>Page:</strong>
        <ol>
            @if($currentPage>1)
            <li>
                <a title="Previous" href=""
                   class="previous i-previous" data-page="{{$currentPage-1}}">
                    <<
                </a>
            </li>
            @endif
            @for($page=1;$page<=$pager->getLastPage();$page++)
            @if($page==$currentPage)
            <li class="current">
                <span>{{$page}}</span>
            </li>
            @else
            <li>
                <a href="" data-page="{{$page}}">{{$page}}</a>
            </li>
            @endif
            @endfor
            @if($currentPage<$pager->getLastPage())
            <li>
                <a title="Next" href="" 
                   class="next i-next" data-page="{{$currentPage+1}}">
                    >>
                </a>
            </li>
            @endif
        </ol>
    </div>
</div>