<header>
    <div class="header-container">
        <div class="row">
            <div class="header-main">
                <div class="container">
                    <div class="header-top">
                        <div class="lang-curr">
                            <div class="pull-left">

                                <form action="google.com" method="post" enctype="multipart/form-data" id="form-language">

                                    <div class="btn-group">
                                        <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">


                                            <img src="{{ asset('catalog/language/en-gb/en-gb.png') }}" alt="English" title="English">
                                            <span class="hidden-xs hidden-sm hidden-md">Language</span>&nbsp;<i class="fa fa-angle-down"></i></button>
                                        <ul class="dropdown-menu language-menu">
                                            <li>
                                                <button class="btn btn-link btn-block language-select" type="button" name="en-gb"><img src="{{ asset('catalog/language/en-gb/en-gb.png') }}" alt="English" title="English" /> English</button>
                                            </li>
                                            <li>
                                                <button class="btn btn-link btn-block language-select" type="button" name="ar"><img src="{{ asset('catalog/language/ar/ar.png') }}" alt="Arabic" title="Arabic" /> Arabic</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <input type="hidden" name="code" value="" />
                                    <input type="hidden" name="redirect" value="https://codezeel.com/opencart/OPC02/OPC020032/index.php?route=common/home" />
                                </form>
                            </div>

                            <div class="pull-left">
                                <form action="https://codezeel.com/opencart/OPC02/OPC020032/index.php?route=common/currency/currency" method="post" enctype="multipart/form-data" id="form-currency">
                                    <div class="btn-group">
                                        <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                            <strong>$</strong>

                                            <span class="hidden-xs hidden-sm hidden-md">Currency</span>&nbsp;<i class="fa fa-angle-down"></i></button>
                                        <ul class="dropdown-menu currency-menu">
                                            <li>
                                                <button class="currency-select btn btn-link btn-block" type="button" name="EUR">JOD</button>
                                            </li>
                                            <li>
                                                <button class="currency-select btn btn-link btn-block" type="button" name="USD">US Dollar</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <input type="hidden" name="code" value="" />
                                    <input type="hidden" name="redirect" value="https://codezeel.com/opencart/OPC02/OPC020032/index.php?route=common/home" />
                                </form>
                            </div>

                        </div>

                        <div class="head-right-bottom">
                            <div class="header-cart">
                                <div id="cart" class="btn-group btn-block " style="width: 100%;height: 30px;z-index: 100000">
                                    <span class="cart_heading xx" data-toggle="dropdown">My Cart</span>
                                    {{--<input type="button" class="btn btn-success" value="xxxxxxxxxx" onclick="opencart()">--}}

                                    <button id="xx" type="button" data-toggle="dropdown" data-loading-text="Loading..." class="btn btn-inverse btn-block btn-lg dropdown-toggle xx"><i class="fa fa-shopping-cart"></i> <span id="cart-total">@if(auth()->check()){{ \Cart::session(auth()->id())->getContent()->count() }} @else 0 @endif</span></button>
                                    <ul class="dropdown-menu pull-right cart-menu cart-body" style="display: none;">

                                    </ul>



                                                {{--
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        @if($i == 3)
                                                            <div class="col-lg-12">
                                                            <a href="{{ route('cart.index') }}">Show more</a></div>
                                                            <div style="height: 20px"></div>
                                                            @break
                                                        @endif
                                                        <div class="col-lg-3">
                                                            <img src="/product_images/{{ $item->attributes->image }}"
                                                                 style="width: 50px; height: 50px;"
                                                            >
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <b>{{  substr($item->name, 0, 10).'...' }}</b>
                                                            <br><small>Qty: {{$item->quantity}}</small>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <p>${{ round(\Cart::get($item->id)->getPriceSum(), 2)  }}</p>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </li>
                                                <?php $i++ ?>--}}

                                            {{--<br>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col-lg-10">
                                                        <b>Total: </b>${{ \Cart::getTotal() }}
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <form action="" method="POST">
                                                            {{ csrf_field() }}
                                                            <button class="btn btn-secondary btn-sm"><i class="fa fa-trash"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>
                                            <br>
                                            <div class="row" style="margin: 0px;">
                                                <a class="btn btn-dark btn-sm btn-block" href="{{ route('cart.index') }}">
                                                    CART <i class="fa fa-arrow-right"></i>
                                                </a>
                                                <a class="btn btn-dark btn-sm btn-block" href="">
                                                    CHECKOUT <i class="fa fa-arrow-right"></i>
                                                </a>
                                            </div>
                                         @else
                                        <li>
                                            <p class="text-center">Your shopping cart is empty!</p>
                                        --}}
                                </div>
                            </div>
                            @if(auth()->check())
                            <div class="dropdown myaccount">
                                <a href="indexe223.html?route=account/account" title="My Account" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="hidden-xs hidden-sm hidden-md">{{ auth()->user()->name }}</span><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right myaccount-menu">
                                    <li><a href="indexe223.html?route=account/wishlist" id="wishlist-total" title="Wish List (0)">Wish List (0)</a></li>
                                    <li><a href="index630e.html?route=checkout/cart" title="Shopping Cart">Shopping Cart</a></li>
                                    <li><a href="index630e.html?route=checkout/checkout" title="Checkout">Checkout</a></li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                            @else
                                <div class="" style="float: right; margin: 0 15px 0;padding-bottom: 5px; cursor: pointer;display: inline-block;position: relative;z-index: 9;">
                                    <a href="{{ route('login') }}">Login</a>
                                </div>
                                <div class="" style="float: right; margin: 0 15px 0;padding-bottom: 5px; cursor: pointer;display: inline-block;position: relative;z-index: 9;">
                                    <a href="{{ route('register') }}">Register</a>
                                </div>
                            @endif

                            <div id="search" class="input-group">
                                <span class="search_button"></span>
                                <div class="search_toggle">
                                    <div id="searchbox">
                                        <input type="text" name="search" value="" placeholder="Search Products Here" class="form-control input-lg" />
                                        <span class="input-group-btn">
			<button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
			</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="header-logo">
                            <div id="logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('logo.png') }}"  title="Food Box Store" alt="Food Box Store" class="img-responsive" /></a></div>
                        </div>

                    </div>
                </div>

                <nav class="nav-container" role="navigation">
                    <div class="container">
                        <div class="nav-inner">
                            <!-- ======= Menu Code START ========= -->
                            <!-- Opencart 3 level Category Menu-->
                            <div id="menu" class="main-menu">

                                <ul class="nav navbar-nav">

                                    <li class="top_level dropdown"><a href="index98dc.html?route=product/category&amp;path=20">Foods</a>

                                        <div class="dropdown-menu megamenu column3">
                                            <div class="dropdown-inner">
                                                <ul class="list-unstyled childs_1">
                                                    <!-- 2 Level Sub Categories START -->
                                                    <li class="dropdown"><a href="indexf345.html?route=product/category&amp;path=20_27">Fast Food</a>

                                                        <div class="dropdown-menu">
                                                            <div class="dropdown-inner">
                                                                <ul class="list-unstyled childs_2">
                                                                    <li><a href="indexb0b2.html?route=product/category&amp;path=20_27_49">Macaroni</a></li>
                                                                    <li><a href="index17aa.html?route=product/category&amp;path=20_27_50">Noodles</a></li>
                                                                    <li><a href="index8a75.html?route=product/category&amp;path=20_27_51">Mexican</a></li>
                                                                    <li><a href="index3b96.html?route=product/category&amp;path=20_27_52">Beggar</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </li>
                                                    <!-- 2 Level Sub Categories END -->

                                                </ul>
                                                <ul class="list-unstyled childs_1">
                                                    <!-- 2 Level Sub Categories START -->
                                                    <li class="dropdown"><a href="indexd9fe.html?route=product/category&amp;path=20_26">Seafood</a>

                                                        <div class="dropdown-menu">
                                                            <div class="dropdown-inner">
                                                                <ul class="list-unstyled childs_2">
                                                                    <li><a href="index1cfb.html?route=product/category&amp;path=20_26_53">Milkfish</a></li>
                                                                    <li><a href="index5b8a.html?route=product/category&amp;path=20_26_54">Shellfish</a></li>
                                                                    <li><a href="index5924.html?route=product/category&amp;path=20_26_55">Swordfish </a></li>
                                                                    <li><a href="indexde9c.html?route=product/category&amp;path=20_26_56"> Crustacean</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </li>
                                                    <!-- 2 Level Sub Categories END -->

                                                </ul>
                                                <ul class="list-unstyled childs_1">
                                                    <!-- 2 Level Sub Categories START -->
                                                    <li class="dropdown"><a href="indexdd46.html?route=product/category&amp;path=20_43">Snacks</a>

                                                        <div class="dropdown-menu">
                                                            <div class="dropdown-inner">
                                                                <ul class="list-unstyled childs_2">
                                                                    <li><a href="index4639.html?route=product/category&amp;path=20_43_38">Sandwich</a></li>
                                                                    <li><a href="index1668.html?route=product/category&amp;path=20_43_37">Bread</a></li>
                                                                    <li><a href="indexcd26.html?route=product/category&amp;path=20_43_39">Salad</a></li>
                                                                    <li><a href="index24a8.html?route=product/category&amp;path=20_43_40">Cookies</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </li>
                                                    <!-- 2 Level Sub Categories END -->

                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="top_level"><a href="index7fa3.html?route=product/category&amp;path=18">Brown rice</a></li>
                                    <li class="top_level"><a href="index70a9.html?route=product/category&amp;path=57">French fries</a></li>

                                </ul>
                            </div>

                        </div>
                    </div>


                    <!--  =============================================== Mobile menu start  =============================================  -->
                    <div id="res-menu" class="main-menu nav-container1 container">
                        <div class="nav-responsive"><span>Menu</span><div class="expandable"></div></div>
                        <ul class="main-navigation">
                            <li class="top_level dropdown"><a href="index98dc.html?route=product/category&amp;path=20">Foods</a>
                                <ul>
                                    <li>
                                        <a href="indexf345.html?route=product/category&amp;path=20_27">Fast Food</a>
                                        <ul class="list-unstyled childs_2">
                                            <li><a href="indexb0b2.html?route=product/category&amp;path=20_27_49">Macaroni</a></li>
                                            <li><a href="index17aa.html?route=product/category&amp;path=20_27_50">Noodles</a></li>
                                            <li><a href="index8a75.html?route=product/category&amp;path=20_27_51">Mexican</a></li>
                                            <li><a href="index3b96.html?route=product/category&amp;path=20_27_52">Beggar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="indexd9fe.html?route=product/category&amp;path=20_26">Seafood</a>
                                        <ul class="list-unstyled childs_2">
                                            <li><a href="index1cfb.html?route=product/category&amp;path=20_26_53">Milkfish</a></li>
                                            <li><a href="index5b8a.html?route=product/category&amp;path=20_26_54">Shellfish</a></li>
                                            <li><a href="index5924.html?route=product/category&amp;path=20_26_55">Swordfish </a></li>
                                            <li><a href="indexde9c.html?route=product/category&amp;path=20_26_56"> Crustacean</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="indexdd46.html?route=product/category&amp;path=20_43">Snacks</a>
                                        <ul class="list-unstyled childs_2">
                                            <li><a href="index4639.html?route=product/category&amp;path=20_43_38">Sandwich</a></li>
                                            <li><a href="index1668.html?route=product/category&amp;path=20_43_37">Bread</a></li>
                                            <li><a href="indexcd26.html?route=product/category&amp;path=20_43_39">Salad</a></li>
                                            <li><a href="index24a8.html?route=product/category&amp;path=20_43_40">Cookies</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="top_level dropdown"><a href="index7fa3.html?route=product/category&amp;path=18">Brown rice</a>
                            </li>
                            <li class="top_level dropdown"><a href="index70a9.html?route=product/category&amp;path=57">French fries</a>
                            </li>
                        </ul>
                    </div>


                </nav>

            </div>

        </div>

    </div>
    </div>
</header>

<script>
    cartOnLoad();

    function cartOnLoad() {
        $.ajax({
            type: "GET",
            url: '/cart/cartBody',
            data: {

            },
            success: function(data) {
                $('.cart-body').html(data);
            },
            error: function(jqXHR, textStatus, errorThrown) {

                console.log("err");
                /*if (jqXHR.status === 401)
                 {
                 window.location = ("");
                 }*/
            }
        });
    }

</script>