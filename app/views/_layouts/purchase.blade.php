
{{HTML::script('js/scripts/purchase.js')}}

<div class="b-popup-i" style="display:none;">
    <div class="b-popup" style="width:652px; margin-left:-374px; top:6%;">
        <form action="{{route('purchase')}}" method="POST" onsubmit="purchase.submit()" id ="purchase_form">
        <!-- в стилях прописан top, это значение по умолчанию, при необходимости можно менять -->
        <i class="ico ico_type_cover-close"></i>
        <div class="form line">
            <div class="form__ttl">Оформление нового заказа</div>

            <div class="form__left">
                <div class="form__field line">
                    <div class="b-input-i">
                        <input type="text" class="b-input" value="" name="username"/>
                        <label class="b-label">Ваше имя и фамилия</label>
                    </div>
                </div>
                <div class="form__field line">
                    <div class="b-input-i">
                        <input type="text" class="b-input" value="" name="phone"/>
                        <label class="b-label">Номер мобильного телефона</label>
                    </div>
                    <div class="form__example">Например: +380501234567</div>
                </div>
                <div class="form__field line">
                    <ul class="form__list">
                        <li class="form__list-item">
                            <input type="radio" class="b-check" value="1" name="delivery"/>
                            <label>Курьерская доставка (Киев)</label>
                        </li>
                        <li class="form__list-item">
                            <input type="radio" class="b-check" value="2" name="delivery"/>
                            <label>Новая Почта (по всей Украине)</label>
                        </li>
                        <li class="form__list-item">
                            <input type="radio" class="b-check" value="3" name="delivery"/>
                            <label>Самовывоз</label>
                        </li>
                    </ul>
                </div>
                <div class="form__field line">
                    <div class="b-input-i">
                        <textarea type="text" class="b-ta" value="" name="note"></textarea>
                        <label class="b-label">Примечание к заказу</label>
                    </div>
                </div>
            </div>
            <div class="form__right">
                <div class="form__field line" id="error_block">
                    <div class="b-input-i"></div>
                </div>
                <div class="form__add">Информация по товару</div>
                <div class="form__field line">
                    <div class="b-input-i">
                        <p><b>Навание:</b> <span id="purchase_product_name"></span></p>
                    </div>
                </div>
                <div class="form__field line">
                    <div class="b-input-i">
                        <p><b>Размер:</b> 
                            <span id="purchase_product_size"></span></p>
                    </div>
                </div>
                <div class="form__field line">
                    <div class="b-input-i">
                        <p><b>Цена:</b> <span id="purchase_product_cost"></span> грн.</p>
                    </div>
                </div>
                <div class="form__field line">
                    <div class="b-input-i">
                        <p><b>Тип заказа: </b>
                            Предварительный заказ                                                                                                                                                                                                                                                                        </p>
                    </div>
                </div>
                
            </div>

            <div class="b-submit g-clear">
                <div class="add-to-box">
                    <div class="add-to-cart">
                        <button class="button btn-cart" title="Купить" type="button" onclick="return purchase.submit()">
                            <span><span>Купить</span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Когда сообщение отправлено (br можно убрать) --> <br /><br />
            <div id = "purchase_got" style="display:none;">
                <div class="form__ttl">Спасибо, Ваш заказ принят</div>
                <div class="form__sub-ttl">В ближайшее время с Вами свяжется менеджер</div>
            </div>
            <input type="hidden" name="product_id" id="purchase_product_id">
            </form>
    </div>
    <div class="b-popup__bg"></div>
</div>