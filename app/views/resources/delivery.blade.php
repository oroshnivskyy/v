@extends('_layouts.main')
@section('main')
<div class="main-container col1-layout">
    <div class="container_24">
        <div class="grid_24">
            <div class="main">
                <div class="breadcrumbs">
                    <ul>
                        <li class="home">
                            <a href="{{route('home')}}" title="Ити на домашнюю страницу">На главную</a>
                            <span>></span>
                        </li>
                        <li class="cms_page">
                            <strong>Доставка и оплата</strong>
                        </li>
                    </ul>
                </div>
                <div class="col-main alpha grid_24 omega">
                    <div class="std">
                        <div class="page-title">
                            <h1>Доставка и оплата</h1>
                        </div>
                        <ul class="custom-servis-ul">
                            <li class="item-1">
                                <h3>Способы доставки</h3>

                                <p>
                                <ol>
                                    <li>
                                        <b>Самовывоз</b><br>
                                        Вы можете самостоятельно забрать Ваш товар в Киеве, станция метро Иподром.

                                    </li>
                                    <li>
                                        <b>Доставка в любой город Украины</b><br>
                                        Мы сотрудничаем с компаниями перевозчиками
                                        "<a href="http://www.autolux.ua/Kalkulyator_stoimosti">Автолюкс</a>",
                                        "<a href="http://novaposhta.ua/frontend/calculator/ua">Нова Пошта</a>",
                                        "<a href="http://www.intime.ua/txt/75/">Ін-Тайм</a>",
                                        "<a href="http://ukrposhta.ua/zamoviti/kuryersku-dostavku/opis">Укрпошта</a>".<br>
                                        В среднем доставка
                                        занимает 1-3 дня, во время заказа наши менеджеры согласуют с Вами время
                                        доставки перед отправкой товара. Вы можете ознакомиться с условиями работы
                                        компаний кликнув на их название.
                                    </li>

                                </ol>
                                </p>
                            </li>
                            <li class="item-4">
                                <h3>Скидки</h3>

                                <p>
                                <ol>
                                    <li>
                                        При приобретениии товаров на сумму больше 1000 грн скидка 10%.
                                    </li>
                                </ol>
                                </p>
                            </li>
                            <li class="item-5">
                                <h3>Способы оплаты</h3>

                                <p>
                                <ol>
                                    <li>
                                        <b>Наличный расчет</b><br>
                                        Оплата наличными возможна только при покупке в Киеве.
                                    </li>
                                    <li>
                                        <b>Безналичный расчет</b><br>
                                        Осуществляется путем оплаты через кассу отделения любого банка или пополнение карточного счета в банке «Приватбанк». После оформления заказа, менеджер магазина электронной почтой вышлет Вам информацию об оплате.
                                    </li>
                                    <li>
                                        <b>Оплата при получении (наложенный платеж)</b><br>
                                        Мы также предоставляем услугу «оплата при получении» посредством
                                        компании-перевозчика
                                        "<b><a href="http://novaposhta.ua/frontend/calculator/ua">Нова Пошта</a></b>".
                                        Стоимость услуги по отправке необходимо уточнять у
                                        компании-перевозчика.
                                    </li>

                                </ol>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
@stop