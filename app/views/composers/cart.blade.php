
<div class="block-cart-header">
    <div class="block-content">
        <div class="summary">
            <span class="cart-title">My Cart:</span>

            <p class="amount-2"><strong>1 item</strong></p>
            <span class="price">$34.99</span></div>
        <div class="cart-inner">
            <div class="cart-content">
                <div class="cart-indent">
                    <p class="subtotal">
                        <span class="label">Cart Subtotal:</span> <span class="price">$34.99</span>
                    </p>

                    <p class="block-subtitle">Recently added item(s)</p>
                    <ol id="cart-sidebar" class="mini-products-list">
                        <li class="item">
                            <div class="product-control-buttons">
                                <a href=""
                                   title="Remove This Item"
                                   onclick="return confirm('Are you sure you would like to remove this item from the shopping cart?');"
                                   class="btn-remove">Remove This Item</a>
                                <a href=""
                                   title="Edit item" class="btn-edit">Edit item</a>
                            </div>
                            <a href="http://livedemo00.template-help.com/magento_42124/pearl-cudblaz.html"
                               title="Pearl cudblaz" class="product-image"><img
                                    src=""
                                    width="70" height="70" alt="Pearl cudblaz"/></a>

                            <p class="product-name"><a
                                    href="">Pearl
                                    cudblaz</a></p>

                            <div class="clear"></div>
                            <div class="product-details">
                                <strong>1</strong> x
                                <span class="price">$34.99</span>
                            </div>
                        </li>
                    </ol>
                    <div class="actions">
                        <button type="button" title="Checkout" class="button"
                                onclick="setLocation('')">
                            <span><span>Checkout</span></span></button>
                        <button type="button" title="My Cart" class="button"
                                onclick="setLocation('')">
                            <span><span>My Cart</span></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('.block-cart-header .cart-content').hide();
    if ($('.container_24').width() < 800) {
        $('.block-cart-header .summary, .block-cart-header .cart-content').click(function () {
                $('.block-cart-header .cart-content').stop(true, true).slideToggle(300);
            }
        )
    }
    else {
        $('.block-cart-header .summary, .block-cart-header .cart-content').hover(
            function () {
                $('.block-cart-header .cart-content').stop(true, true).slideDown(400);
            },
            function () {
                $('.block-cart-header .cart-content').stop(true, true).delay(400).slideUp(300);
            }
        );
    }
</script>