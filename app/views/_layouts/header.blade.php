<div class="header-container">
    <div class="container_24">
        <div class="grid_24">
            <div class="header">
                <div class="header-buttons">
                    <div class="row-1">
                        <?php /** This is not visible
                        <div class="header-button top-login">
                            <ul class="links">
                                <li class="first last"><a
                                        href="http://livedemo00.template-help.com/magento_42124/customer/account/login/"
                                        title="Log In" class="Login_link">Log In</a></li>
                            </ul>
                        </div>
                        <div class="header-button menu-list">
                            <a href="#"></a>
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
                        </div>
                        */?>
                        {{--
                        @include('composers.currency')
                        @include('composers.language')
                        --}}
                    </div>
                    <div class="quick-access">
                        <div class="header-links">
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
                <h1 class="logo"><strong>{{$title}}</strong><a
                        href="{{route('home')}}" title="{{$title}}" class="logo"><img
                            src="/img/logo.png"
                            alt="{{$title}}"/></a></h1>

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
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>