<div class="header-container">
    <div class="container_24">
        <div class="grid_24">
            <div class="header">
                <h1 class="logo"><strong>{{$title}}</strong>
                    <a id="logo-image"
                        href="{{route('home')}}" title="{{$title}}" class="logo">
                        <div alt="{{$title}}" ></div>
                        <span style="position: relative; top: 20px; left: 10px; color: black; font-style: oblique;">Украинская Вышиванка</span>
                    </a>
                </h1>
                <div class="header-buttons">
                    <div class="row-1">
                        {{--
                        @include('composers.currency')
                        @include('composers.language')
                        --}}
                    </div>
                    <div class="quick-access">
                        <div class="header-links" style="font-size: 15px; margin-top:20px">
                                    Электронный ящик:
                                    <strong><script type="text/javascript">eval(unescape('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%27%3c%61%20%68%72%65%66%3d%22%6d%61%69%6c%74%6f%3a%6d%61%6e%61%67%65%72%40%76%75%73%68%75%76%61%6e%6b%61%2e%63%6f%6d%2e%75%61%22%3e%6d%61%6e%61%67%65%72%40%76%75%73%68%75%76%61%6e%6b%61%2e%63%6f%6d%2e%75%61%3c%2f%61%3e%27%29%3b'))</script></strong>
       
                            <?php /** Not visible
                            <ul class="links">
                                <li class="first last"><a
                                        href="/"
                                        title="Log In" class="Login_link">Log In</a></li>
                            </ul>
                            <ul class="links">
                                <li class="first"><a
                                        href="/"
                                        title="My Account">My Account</a></li>
                                <li><a href="/"
                                       title="My Cart (1 item)" class="top-link-cart">My Cart (1 item)</a></li>
                                <li><a href="/"
                                       title="Checkout" class="top-link-checkout">Checkout</a></li>
                                <li class=" last"><a href="/"
                                                     title="My Wishlist">My Wishlist</a></li>
                            </ul>
                            */
                            ?>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                

                <div class="clear"></div>
                <div class="row-2">
                    {{--@include('composers.cart')
                    <p class="welcome-msg">Welcome to our online store! </p>

                    <div class="clear"></div>
                    <form id="search_mini_form"
                          action="/" method="get">
                        <div class="form-search">
                            <label for="search">Search:</label>
                            <input id="search" type="text" name="q" value="" class="input-text" maxlength="128"/>
                            <button type="submit" title="Search" class="button"><span><span>Search</span></span>
                            </button>
                            <div id="search_autocomplete" class="search-autocomplete"></div>
                        </div>
                    </form>
                    --}}
                </div>
                <div class="clear"></div>
                <div style="position: relative; top: -30px; float: right; height:20px; width: 270px">
                    <div id="vk_like" style="float:left; width: 85px;"></div>
                    <!-- Place this tag where you want the +1 button to render. -->
                    <div class="g-plusone" data-size="medium" style="float:left; width: 70px;" data-href="http://vushuvanka.com.ua"></div>

                    <div class="fb-like" style="z-index:100;" data-href="http://vushuvanka.com.ua" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true" data-font="arial"></div>
                    <div id="fb-root"></div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>