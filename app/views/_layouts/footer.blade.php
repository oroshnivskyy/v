<div class="footer-container">
    <div class="container_24">
        <div class="wrapper">
            <div class="grid_24">
                <div class="footer">
                    <div class="footer-cols-wrapper">
                        <div class="footer-col">
                            <h4>Информация</h4>

                            <div class="footer-col-content">
                                <ul>
                                    {{--
                                    <li>
                                        <a href="#">О нас</a></li>
                                    <li>
                                        --}}
                                        <a href="{{route('delivery_and_payment')}}">Доставка и оплата</a>
                                    </li>
                                    {{--
                                    <li class="last privacy">
                                        <a href="#">Privacy Policy</a>
                                    </li>
                                    --}}
                                </ul>
                                {{--
                                <ul class="links">
                                    <li class="first"><a href="#" title="Site Map">Site Map</a>
                                    </li>
                                    <li>
                                        <a href="#" title="Search Terms">Search Terms</a>
                                    </li>
                                    <li>
                                        <a href="#" title="Advanced Search">Advanced Search</a>
                                    </li>
                                    <li>
                                        <a href="#" title="Orders and Returns">Orders and Returns</a>
                                    </li>
                                    <li class=" last">
                                        <a href="#" title="Contact Us">Contact Us</a>
                                    </li>
                                </ul>
                                --}}
                            </div>
                        </div>
                    </div>
                    <address>&copy;
                        <script type="text/javascript"> document.write((new Date()).getFullYear());</script>
                        Интернет-магазин «<a href="{{route('home')}}">Vushuvanka.com.ua</a>»
                    </address>
                    <div class="clear"></div>
                    {{--
                    <ul class="social-buttons">
                        <li class="item-1"><a href="#"></a></li>
                        <li class="item-2"><a href="#"></a></li>
                        <li class="item-3"><a href="#"></a></li>
                    </ul>
                    --}}
                </div>
            </div>
        </div>
    </div>
</div>
@if($_SERVER['REMOTE_ADDR']!="127.0.0.1")
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-42611551-1', 'vushuvanka.com.ua');
    ga('send', 'pageview');

</script>
<a href="http://metrika.yandex.ru/stat/?id=21853213&amp;from=informer"
   target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/21853213/1_0_FCDCFCFF_DCBCDCFF_0_pageviews"
                                       style="width:80px; height:15px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры)" onclick="try{Ya.Metrika.informer({i:this,id:21853213,lang:'ru'});return false}catch(e){}"/></a>

<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter21853213 = new Ya.Metrika({id:21853213,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
@endif