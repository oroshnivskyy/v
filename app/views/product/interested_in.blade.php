<div class="box-collateral box-up-sell related-carousel">
    <h2>You may also be interested in the following product(s)</h2>
    <ul class="products-ups">
        <li class="item">
            <div class="product-box">
                <a HREF="plastic-deer-earrings.html" title="Plastic Deer Earrings " class="product-image"><img
                        SRC="media/catalog/product/cache/1/small_image/184x/9df78eab33525d08d6e5fb8d27136e95/p/l/pC3F27AFC"
                        width="184" height="184" alt="Plastic Deer Earrings "/></a>

                <h3 class="product-name"><a HREF="plastic-deer-earrings.html" title="Plastic Deer Earrings ">Plastic
                        Deer Earrings </a></h3>

                <div class="price-box">
<span class="regular-price" id="product-price-23-upsell">
<span class="price">$26.33</span> </span>
                </div>
            </div>
        </li>
        <li class="item">
            <div class="product-box">
                <a HREF="jewelry-set-bronze-wood-and-peach-stone-necklace-bracelet-and-earring.html"
                   title="Jewelry Set - Bronze, Wood and Peach Stone Necklace, Bracelet and Earring"
                   class="product-image"><img
                        SRC="media/catalog/product/cache/1/small_image/184x/9df78eab33525d08d6e5fb8d27136e95/j/e/j6F7B5B1F"
                        width="184" height="184"
                        alt="Jewelry Set - Bronze, Wood and Peach Stone Necklace, Bracelet and Earring"/></a>

                <h3 class="product-name"><a
                        HREF="jewelry-set-bronze-wood-and-peach-stone-necklace-bracelet-and-earring.html"
                        title="Jewelry Set - Bronze, Wood and Peach Stone Necklace, Bracelet and Earring">Jewelry Set -
                        Bronze, Wood and Peach Stone Necklace, Bracelet and Earring</a></h3>

                <div class="price-box">
<span class="regular-price" id="product-price-41-upsell">
<span class="price">$21.21</span> </span>
                </div>
            </div>
        </li>
        <li class="item">
            <div class="product-box">
                <a HREF="paper-bead-kids-necklace.html" title="Paper Bead Kids Necklace" class="product-image"><img
                        SRC="media/catalog/product/cache/1/small_image/184x/9df78eab33525d08d6e5fb8d27136e95/p/a/p46C95C24"
                        width="184" height="184" alt="Paper Bead Kids Necklace"/></a>

                <h3 class="product-name"><a HREF="paper-bead-kids-necklace.html" title="Paper Bead Kids Necklace">Paper
                        Bead Kids Necklace</a></h3>

                <div class="price-box">
<span class="regular-price" id="product-price-30-upsell">
<span class="price">$18.30</span> </span>
                </div>
            </div>
        </li>
        <li class="item">
            <div class="product-box">
                <a HREF="green-flower-wire-wrapped-ring.html" title="Green flower wire wrapped ring "
                   class="product-image"><img
                        SRC="media/catalog/product/cache/1/small_image/184x/9df78eab33525d08d6e5fb8d27136e95/g/r/g83EEF9BB"
                        width="184" height="184" alt="Green flower wire wrapped ring "/></a>

                <h3 class="product-name"><a HREF="green-flower-wire-wrapped-ring.html"
                                            title="Green flower wire wrapped ring ">Green flower wire wrapped ring </a>
                </h3>

                <div class="price-box">
<span class="regular-price" id="product-price-31-upsell">
<span class="price">$23.20</span> </span>
                </div>
            </div>
        </li>
    </ul>
    <script type="text/javascript">decorateTable('upsell-product-table')</script>
    <script type="text/javascript">
        document.observe('dom:loaded', function () {
            var home_blocks = $$('.box-up-sell');
            home_blocks.each(function (p) {
                var grids = p.select('.products-ups');
                grids.each(function (n) {
                    var columns = n.select('li.item');
                    var max_height = 0;
                    columns.each(function (m) {
                        if (m.getHeight() > max_height) {
                            max_height = m.getHeight();
                        }
                    });
                    var boxes = n.select('li .product-name');
                    boxes.each(function (b) {
                        var this_column = b.up('li.item');
                        var box_indent = this_column.getHeight() - b.getHeight();
                        b.setStyle({
                            height: max_height - box_indent + 'px'
                        });
                    });
                });
            });
        })
    </script>
</div>