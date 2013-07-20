<?php $currentPage=$pager->getCurrentPage() ?>
@if($pager->getLastPage()>1)
<div class="pager">
    <p class="amount">
        Товары с {{$pager->getFrom()}} до {{$pager->getTo()}} всех: {{$pager->getTotal()}}</p>

    <div class="pages">
        <strong>Страница:</strong>
        <ol>
            @if($currentPage>1)
            <li>
                <a title="Предыдущие" href=""
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
                <a title="Следующие" href="" 
                   class="next i-next" data-page="{{$currentPage+1}}">
                    >>
                </a>
            </li>
            @endif
        </ol>
    </div>
</div>
@endif