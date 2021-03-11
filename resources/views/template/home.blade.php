<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title-page')</title>

        <!-- css bootstrap -->
        <link href="{{ asset('css/bootstrap.min.css') }}" type='text/css'>
        <!-- Biblioteca de iconos monocromáticos y símbolos -->
        <link href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" rel='stylesheet' type='text/css'>

        <!-- fonts google -->
        
        <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>


        <link href="{{ asset('fonts/lovelo/stylesheet.css') }}" rel='stylesheet' type='text/css'>

        <!-- css template -->
        <link href="{{ asset('css/owl.carousel.css') }}" rel='stylesheet' type='text/css'>
        <link href="{{ asset('css/owl.theme.css') }}" type='text/css'>
        <link href="{{ asset('rs-plugin/css/settings.css') }}" type='text/css'>
        <link href="{{ asset('css/custom.css') }}" type='text/css'>

        <!-- other css -->
        @yield('css')

        <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->
    </head>

    <body>
        <!--Start class_site-->
        <div class="tz-site">

            <!--Start id tz header-->
            <header id="tz-header" class="bk-white">
                <div class="container">
                    <!--Start class header top-->
                    <div class="header-top">
                        <!-- menú cabecera principal -->
                        @include('template.menu1')
                        <!-- menú de cabecera secundario -->
                        @include('template.menu2')
                    </div>
                    <!--End class header top-->

                    <!--Start header content-->
                    <div class="header-content">
                        <h3 class="tz-logo pull-left">
                            <a href="index.html">
                                <img src="{{ asset('images/logo.png') }}" alt="home" />
                            </a>
                        </h3>

                        <div class="tz-search pull-right">

                            <!--Start form search-->
                            <form method="post" name="frmSearch" id="frmSearch" autocomplete="false">
                                <label class="select-arrow">
                                    <select name="category">
                                        <option value="">Todas las categorias</option>
                                        <option value="#">Asientos</option>
                                        <option value="#">Halfwheelers</option>
                                        <option value="#">Cerraduras / Seguridad</option>
                                        <option value="#">Sistemas de ruedas</option>
                                        <option value="#">Rim Tape</option>
                                    </select>
                                </label>
                                <input type="text" class="tz-query" id="tz-query" value=""
                                    placeholder="Buscar producto">
                                <button type="submit"></button>
                            </form>
                            <!--End Form search-->

                            <!--live search-->
                            <div class="live-search">
                                <ul>
                                    <li>
                                        <div class="live-img"><img src="{{ asset('images/product/product-search1.jpg') }}"
                                                alt="product search one"></div>
                                        <div class="live-search-content">
                                            <h6><a href="single-product.html">Defy Advanced</a></h6>
                                            <span class="live-meta">
                                                <a href="single-product.html">$2650.00</a>
                                                <span class="product-color">
                                                    <i class="light-blue"></i>
                                                    <i class="orange"></i>
                                                    <i class="orange-dark"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="live-img"><img src="{{ asset('images/product/product-search2.jpg') }}"
                                                alt="product search two"></div>
                                        <div class="live-search-content">
                                            <h6><a href="single-product.html">Defy Advanced</a></h6>
                                            <span class="live-meta">
                                                <a href="single-product.html">$2650.00</a>
                                                <span class="product-color">
                                                    <i class="light-blue"></i>
                                                    <i class="orange"></i>
                                                    <i class="blueviolet"></i>
                                                    <i class="orange-dark"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="live-img"><img src="{{ asset('images/product/product-search3.jpg') }}"
                                                alt="product search one"></div>
                                        <div class="live-search-content">
                                            <h6><a href="single-product.html">Defy Advanced</a></h6>
                                            <span class="live-meta">
                                                <a href="single-product.html">$2650.00</a>
                                                <span class="product-color">
                                                    <i class="blueviolet"></i>
                                                    <i class="light-blue"></i>
                                                    <i class="orange-dark"></i>
                                                    <i class="orange"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--End live search-->
                        </div>
                    </div>
                    <!--End class header content-->
                </div>

                <!--Start main menu -->
                <nav class="tz-menu-primary">
                    <div class="container">

                        <!--Main Menu-->
                        @yield('main-menu')
                        <ul class="tz-main-menu pull-left nav-collapse">
                            <li>
                                <a href="index.html">Home</a>
                                <!-- <ul class="sub-menu">
                                <li>
                                    <a href="home-boxed.html" tppabs="http://html.bikeshop.templaza.net/home-boxed.html">Home Boxed</a>
                                </li>
                                <li>
                                    <a href="mega-menu.html" tppabs="http://html.bikeshop.templaza.net/mega-menu.html">Mega Menu</a>
                                </li>
                            </ul> -->
                            </li>
                            <li>
                                <a href="shop.html">
                                    categorías
                                    <span class="red-light">¡En venta!</span>
                                </a>
                            </li>
                            <li>
                                <a href="shop.html">Bicicletas</a>
                            </li>
                            <li>
                                <a href="shop.html">Engranajes</a>
                            </li>
                            <li>
                                <a href="">Accesorios</a>
                            </li>
                            <li>
                                <a href="">Ropa</a>
                            </li>
                            <!-- <li>
                            <a href="shop.html">Shop</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="shop-rightsidebar.html" tppabs="http://html.bikeshop.templaza.net/shop-rightsidebar.html">Shop Right</a>
                                </li>
                                <li>
                                    <a href="shop-cart.html" tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Shop Cart</a>
                                </li>
                                <li>
                                    <a href="shop-checkout.html" tppabs="http://html.bikeshop.templaza.net/shop-checkout.html">Shop Checkout</a>
                                </li>
                                <li>
                                    <a href="shop-register.html" tppabs="http://html.bikeshop.templaza.net/shop-register.html">Shop Register</a>
                                </li>
                                <li>
                                    <a href="single-product.html" tppabs="http://html.bikeshop.templaza.net/single-product.html">Shop Single</a>
                                </li>
                            </ul>
                        </li> -->
                            <!--  <li>
                            <a href="blog.html">
                                Blog
                                <span class="cyan-dark">Best off!</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="blog-right.html">Blog Right</a>
                                </li>
                                <li>
                                    <a href="single-blog.html">Blog Single</a>
                                </li>
                            </ul>
                        </li> -->
                            <li>
                                <a href="contact.html">Contacto</a>
                            </li>
                        </ul>
                        <!--End Main menu-->

                        <!--Shop meta-->
                        <!-- <ul class="tz-ecommerce-meta pull-right">
                        <li class="tz-menu-wishlist">
                            <a href="#"><strong>0</strong></a>
                        </li>
                        <li class="tz-mini-cart">
                            <a href="shop-cart.html" tppabs="http://html.bikeshop.templaza.net/shop-cart.html"><strong>2</strong>Cart : $199.00</a> -->

                        <!--Mini cart-->
                        <!-- <ul class="cart-inner">
                                <li class="mini-cart-content">
                                    <div class="mini-cart-img"><img src="images/product/product-cart1.png" tppabs="http://html.bikeshop.templaza.net/images/product/product-cart1.png" alt="product search one"></div>
                                    <div class="mini-cart-ds">
                                        <h6><a href="single-product.html" tppabs="http://html.bikeshop.templaza.net/single-product.html">Liv Race Day Short</a></h6>
                                        <span class="mini-cart-meta">
                                            <a href="single-product.html" tppabs="http://html.bikeshop.templaza.net/single-product.html">$2650.00</a>
                                            <span class="mini-meta">
                                               <span class="mini-color">Color: <i class="orange"></i></span>
                                               <span class="mini-qty">Qty: 5</span>
                                            </span>
                                        </span>
                                    </div>
                                    <span class="mini-cart-delete"><img src="images/delete.png" tppabs="http://html.bikeshop.templaza.net/images/delete.png" alt="delete"></span>
                                </li>
                                <li class="mini-cart-content">
                                    <div class="mini-cart-img"><img src="images/product/product-cart2.png" tppabs="http://html.bikeshop.templaza.net/images/product/product-cart2.png" alt="product search one"></div>
                                    <div class="mini-cart-ds">
                                        <h6><a href="single-product.html" tppabs="http://html.bikeshop.templaza.net/single-product.html">City Pedals Sport</a></h6>
                                        <span class="mini-cart-meta">
                                            <a href="single-product.html" tppabs="http://html.bikeshop.templaza.net/single-product.html">$2650.00</a>
                                            <span class="mini-meta">
                                               <span class="mini-color">Color: <i class="orange"></i></span>
                                               <span class="mini-qty">Qty: 5</span>
                                            </span>
                                        </span>
                                    </div>
                                    <span class="mini-cart-delete"><img src="images/delete.png" tppabs="http://html.bikeshop.templaza.net/images/delete.png" alt="delete"></span>
                                </li>
                                <li class="mini-cart-content">
                                    <div class="mini-cart-img"><img src="images/product/product-cart3.png" tppabs="http://html.bikeshop.templaza.net/images/product/product-cart3.png" alt="product search one"></div>
                                    <div class="mini-cart-ds">
                                        <h6><a href="single-product.html" tppabs="http://html.bikeshop.templaza.net/single-product.html">Gloss</a></h6>
                                        <span class="mini-cart-meta">
                                            <a href="single-product.html" tppabs="http://html.bikeshop.templaza.net/single-product.html">$2650.00</a>
                                            <span class="mini-meta">
                                               <span class="mini-color">Color: <i class="orange"></i></span>
                                               <span class="mini-qty">Qty: 5</span>
                                            </span>
                                        </span>
                                    </div>
                                    <span class="mini-cart-delete"><img src="images/delete.png" tppabs="http://html.bikeshop.templaza.net/images/delete.png" alt="delete"></span>
                                </li>
                                <li class="mini-subtotal">
                                    <span class="subtotal-content">
                                        Subtotal:
                                        <strong class="pull-right">$1,100.00</strong>
                                    </span>
                                </li>
                                <li class="mini-footer">
                                    <a href="shop-cart.html" tppabs="http://html.bikeshop.templaza.net/shop-cart.html" class="view-cart">View Cart</a>
                                    <a href="shop-checkout.html" tppabs="http://html.bikeshop.templaza.net/shop-checkout.html" class="check-out">Checkout</a>
                                </li>
                            </ul> -->
                        <!--End mini cart-->

                        <!-- </li> -->
                        <!-- </ul> -->
                        <!--End Shop meta-->

                        <!--navigation mobi-->
                        <button data-target=".nav-collapse" class="btn-navbar tz_icon_menu" type="button">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!--End navigation mobi-->
                    </div>
                </nav>
                <!--End stat main menu-->

            </header>
            <!--End id tz header-->

            <!--SATRT REVOLUTION SLIDER-->
            <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
                <div id="rev_slider_1_1" class="rev_slider fullwidthabanner">
                    <ul>
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="700"
                            data-saveperformance="off">
                            <!-- MAIN IMAGE -->
                            <img src="images/slider/slider.jpg" alt="slider" data-bgposition="center top"
                                data-bgfit="cover" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption sft stt" data-x="275" data-y="180" data-speed="1500" data-start="600"
                                data-easing="Back.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="1000" data-endeasing="Power4.easeOut"><img src="images/slider/T.png"
                                    alt="">
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sfb stb" data-x="340" data-y="160" data-speed="1500" data-start="600"
                                data-easing="Back.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="1000" data-endeasing="Power4.easeOut"><img src="images/slider/h.png"
                                    alt="">
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption sft stt" data-x="405" data-y="180" data-speed="1500" data-start="600"
                                data-easing="Back.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="1000" data-endeasing="Power4.easeOut"><img src="images/slider/E.png"
                                    alt="">
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption sfb stb" data-x="495" data-y="180" data-speed="1500" data-start="600"
                                data-easing="Back.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="1000" data-endeasing="Power4.easeOut"><img src="images/slider/B.png"
                                    alt="">
                            </div>

                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption sft stt" data-x="560" data-y="160" data-speed="1500" data-start="600"
                                data-easing="Back.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="1000" data-endeasing="Power4.easeOut"><img src="images/slider/i.png"
                                    alt="">
                            </div>

                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption sfb stb" data-x="587" data-y="180" data-speed="1500" data-start="600"
                                data-easing="Back.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="1000" data-endeasing="Power4.easeOut"><img src="images/slider/C.png"
                                    alt="">
                            </div>

                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption sft stt" data-x="641" data-y="160" data-speed="1500" data-start="600"
                                data-easing="Back.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="1000" data-endeasing="Power4.easeOut"><img src="images/slider/y.png"
                                    alt="">
                            </div>

                            <!-- LAYER NR. 8 -->
                            <div class="tp-caption sfb stb" data-x="695" data-y="180" data-speed="1500" data-start="600"
                                data-easing="Back.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="1000" data-endeasing="Power4.easeOut"><img src="images/slider/C.png"
                                    alt="">
                            </div>

                            <!-- LAYER NR. 9 -->
                            <div class="tp-caption sft stt" data-x="760" data-y="160" data-speed="1500" data-start="600"
                                data-easing="Back.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="1000" data-endeasing="Power4.easeOut"><img src="images/slider/L.png"
                                    alt="">
                            </div>

                            <!-- LAYER NR. 10 -->
                            <div class="tp-caption sfb stb" data-x="810" data-y="180" data-speed="1500" data-start="600"
                                data-easing="Back.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="1000" data-endeasing="Power4.easeOut"><img src="images/slider/E.png"
                                    alt="">
                            </div>

                            <!-- LAYER NR. 11 -->
                            <div class="tp-caption mediumlightwhite2 customin customout tp-resizeme" data-x="center"
                                data-hoffset="-19" data-y="center" data-voffset="10"
                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:-180;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:3000;transformOrigin:50% 0%;"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="1500" data-start="1500" data-easing="easeOutQuint" data-splitin="none"
                                data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="1000" data-endeasing="Power4.easeOut">Lorem Ipsum is simply dummy text of
                                the printing
                            </div>

                            <!-- LAYER NR. 12 -->
                            <div class="tp-caption black customin customout tp-resizeme" data-x="center"
                                data-hoffset="-19" data-y="center" data-voffset="110"
                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="1500" data-start="1600" data-easing="Back.easeInOut" data-splitin="none"
                                data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="1000" data-endeasing="Power4.easeOut"><a href="shop.html"
                                    tppabs="http://html.bikeshop.templaza.net/shop.html" class='buttom_bike'>Shop
                                    Now</a>
                            </div>
                        </li>
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="700"
                            data-saveperformance="off">
                            <!-- MAIN IMAGE -->
                            <img src="images/slider/slider31.jpg"
                                tppabs="http://html.bikeshop.templaza.net/images/slider/slider31.jpg" alt="slider31"
                                data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption slider-title sfr tp-resizeme" data-x="center" data-hoffset="0"
                                data-y="center" data-voffset="-52" data-speed="1200" data-start="500"
                                data-easing="easeOutExpo" data-splitin="chars" data-splitout="none"
                                data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300">COLLECTION FOR
                                BIKE
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption black sfb tp-resizeme" data-x="center" data-hoffset="0"
                                data-y="center" data-voffset="34" data-speed="800" data-start="2200"
                                data-easing="Quad.easeInOut" data-splitin="none" data-splitout="none"
                                data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"><a
                                    href="shop.html" tppabs="http://html.bikeshop.templaza.net/shop.html"
                                    class='buttom_bike'>Shop Now</a>
                            </div>
                        </li>
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="700"
                            data-saveperformance="off">
                            <!-- MAIN IMAGE -->
                            <img src="images/slider/slider2.jpg"
                                tppabs="http://html.bikeshop.templaza.net/images/slider/slider2.jpg" alt="slider2"
                                data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption sft" data-x="275" data-y="200" data-speed="1500" data-start="600"
                                data-easing="Back.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="300"><img src="images/slider/T.png"
                                    tppabs="http://html.bikeshop.templaza.net/images/slider/T.png" alt="">
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sfb" data-x="340" data-y="180" data-speed="1500" data-start="600"
                                data-easing="Back.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="300"><img src="images/slider/h.png"
                                    tppabs="http://html.bikeshop.templaza.net/images/slider/h.png" alt="">
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption sft" data-x="405" data-y="200" data-speed="1500" data-start="600"
                                data-easing="Back.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="300"><img src="images/slider/E.png"
                                    tppabs="http://html.bikeshop.templaza.net/images/slider/E.png" alt="">
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption sfb" data-x="495" data-y="200" data-speed="1500" data-start="600"
                                data-easing="Back.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="300"><img src="images/slider/B.png"
                                    tppabs="http://html.bikeshop.templaza.net/images/slider/B.png" alt="">
                            </div>

                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption sft" data-x="560" data-y="180" data-speed="1500" data-start="600"
                                data-easing="Back.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="300"><img src="images/slider/i.png"
                                    tppabs="http://html.bikeshop.templaza.net/images/slider/i.png" alt="">
                            </div>

                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption sfb" data-x="587" data-y="200" data-speed="1500" data-start="600"
                                data-easing="Back.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="300"><img src="images/slider/C.png"
                                    tppabs="http://html.bikeshop.templaza.net/images/slider/C.png" alt="">
                            </div>

                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption sft" data-x="641" data-y="180" data-speed="1500" data-start="600"
                                data-easing="Back.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="300"><img src="images/slider/y.png"
                                    tppabs="http://html.bikeshop.templaza.net/images/slider/y.png" alt="">
                            </div>

                            <!-- LAYER NR. 8 -->
                            <div class="tp-caption sfb" data-x="695" data-y="200" data-speed="1500" data-start="600"
                                data-easing="Back.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="300"><img src="images/slider/C.png"
                                    tppabs="http://html.bikeshop.templaza.net/images/slider/C.png" alt="">
                            </div>

                            <!-- LAYER NR. 9 -->
                            <div class="tp-caption sft" data-x="760" data-y="180" data-speed="1500" data-start="600"
                                data-easing="Back.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="300"><img src="images/slider/L.png"
                                    tppabs="http://html.bikeshop.templaza.net/images/slider/L.png" alt="">
                            </div>

                            <!-- LAYER NR. 10 -->
                            <div class="tp-caption sfb" data-x="810" data-y="200" data-speed="1500" data-start="600"
                                data-easing="Back.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="300"><img src="images/slider/E.png"
                                    tppabs="http://html.bikeshop.templaza.net/images/slider/E.png" alt="">
                            </div>

                            <!-- LAYER NR. 11 -->
                            <div class="tp-caption mediumlightwhite2 customin tp-resizeme" data-x="center"
                                data-hoffset="-19" data-y="center" data-voffset="30"
                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:-180;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:3000;transformOrigin:50% 0%;"
                                data-speed="1500" data-start="1500" data-easing="Power4.easeOut" data-splitin="none"
                                data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="300">Lorem Ipsum is simply dummy text of the printing
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--END REVOLUTION SLIDER-->


            <!--Start Custom content-->
            <div class="container">
                <div class="box-shadow section-small">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="custom-content">
                                <h3>Taller mecánico</h3>
                                <p>Manos expertas</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="custom-content border-left">
                                <h3>Bonos de regalo</h3>
                                <p>La manera perfecta de traer una sonrisa.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="custom-content border-left">
                                <h3></h3>
                                <p>Prescription Experts</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End custom content-->

            <!--Start section large top for tabs content-->
            <div class="section-large-top">
                <div class="container">
                    <!--Tabs Shop-->
                    <div class="tz-shortcode-tabs">

                        <!--Tabs Header-->
                        <div class="tz-tabs-header">
                            <h2 class="tz-tabs-title pull-left">Productos Destacados</h2>
                            <ul class="nav nav-tabs pull-right tz-nav-tabs">
                                <li role="presentation" class="active">
                                    <a href="#one_read" data-toggle="tab">
                                        On-Road <i class="fa fa-circle"></i>
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#x_road" data-toggle="tab">
                                        X-Road <i class="fa fa-circle"></i>
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#off_road" data-toggle="tab">
                                        Off-Road <i class="fa fa-circle"></i>
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#bmx" data-toggle="tab">
                                        BMX
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--End tab header-->

                        <!--Tab content-->
                        <div class="tab-content">

                            <!--Tab item-->
                            <div class="tab-pane active" id="one_read">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product1.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product1.jpg"
                                                    alt="product 1" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Propel
                                                        Advanced SL 0</a></h4>
                                                <span class="product-price">$900.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-4 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product2.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product2.jpg"
                                                    alt="product 2" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Defy
                                                        Advanced SL</a></h4>
                                                <span class="product-price">$1,770.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-4 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product3.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product3.jpg"
                                                    alt="product 3" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">FastRoad
                                                        CoMax</a></h4>
                                                <span class="product-price">$900.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                </div>
                            </div>
                            <!--End tab item-->

                            <!--Tab item-->
                            <div class="tab-pane" id="x_road">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product2.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product2.jpg"
                                                    alt="product 1" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Propel
                                                        Advanced SL 0</a></h4>
                                                <span class="product-price">$900.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-4 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product1.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product1.jpg"
                                                    alt="product 2" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Defy
                                                        Advanced SL</a></h4>
                                                <span class="product-price">$1,770.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-4 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product3.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product3.jpg"
                                                    alt="product 3" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">FastRoad
                                                        CoMax</a></h4>
                                                <span class="product-price">$900.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                </div>
                            </div>
                            <!--End tab item-->

                            <!--Tab item-->
                            <div class="tab-pane" id="off_road">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product1.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product1.jpg"
                                                    alt="product 1" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Propel
                                                        Advanced SL 0</a></h4>
                                                <span class="product-price">$900.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-4 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product2.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product2.jpg"
                                                    alt="product 2" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Defy
                                                        Advanced SL</a></h4>
                                                <span class="product-price">$1,770.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-4 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product3.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product3.jpg"
                                                    alt="product 3" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">FastRoad
                                                        CoMax</a></h4>
                                                <span class="product-price">$900.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                </div>
                            </div>
                            <!--End tab item-->

                            <!--Tab item-->
                            <div class="tab-pane" id="bmx">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product1.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product1.jpg"
                                                    alt="product 1" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Propel
                                                        Advanced SL 0</a></h4>
                                                <span class="product-price">$900.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-4 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product2.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product2.jpg"
                                                    alt="product 2" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Defy
                                                        Advanced SL</a></h4>
                                                <span class="product-price">$1,770.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-4 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product3.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product3.jpg"
                                                    alt="product 3" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">FastRoad
                                                        CoMax</a></h4>
                                                <span class="product-price">$900.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                </div>
                            </div>
                            <!--End tab item-->

                        </div>
                        <!--End tab content-->

                    </div>
                    <!--End Tabs Shop-->
                </div>
            </div>
            <!--End section large top for tabs content-->

            <!--Start section medium for product event-->
            <div class="section-medium bk-gray">
                <div class="container">

                    <!--Product event-->
                    <div class="product-event">
                        <div class="row">
                            <div class="col-md-6">

                                <!--Thumnbail-->
                                <div class="event-thumbail">
                                    <img src="images/product/single-product.jpg" alt="product event">
                                </div>
                            </div>
                            <div class="col-md-6">

                                <!--Product content-->
                                <ul class="product-event-content">
                                    <li>
                                        <div id="defaultCountdown" class="tzCountdown"></div>
                                    </li>
                                    <li>
                                        <h3><a href="single-product.html">Propel Advanced Pro Frameset</a></h3>
                                        <span class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </span>
                                        <span class="event-price">$2,290.00</span>
                                    </li>
                                    <li class="product-event-attr">
                                        <span class="tz-color">
                                            Color:
                                            <i class="fa fa-circle light-blue"></i>
                                            <i class="fa fa-circle orange"></i>
                                            <i class="fa fa-circle blueviolet"></i>
                                            <i class="fa fa-circle orange-dark"></i>
                                            <i class="fa fa-circle steelblue"></i>
                                        </span>
                                        <span class="tz-stock">
                                            En existencia : 10
                                        </span>
                                    </li>
                                    <!-- <li class="event-footer">
                                    <a href="shop-cart.html">Añadir a la cesta</a>
                                    <a href="#" class="add-to-wishlist">Añadir a la lista de deseos</a>
                                </li> -->
                                </ul>
                                <!--End Product content-->

                            </div>
                        </div>
                    </div>
                    <!--End product event-->

                </div>
            </div>
            <!--End section medium for product event-->

            <!--Start section large top for tabs content-->
            <div class="section-large-top">
                <div class="container">

                    <!--Start class Shortcode tabs-->
                    <div class="tz-shortcode-tabs">

                        <!--Tabs Header-->
                        <div class="tz-tabs-header">
                            <h2 class="tz-tabs-title pull-left">Productos</h2>
                            <ul class="nav nav-tabs pull-right tz-nav-tabs">
                                <li role="presentation" class="active">
                                    <a href="#baby_seats" data-toggle="tab">Asientos<i class="fa fa-circle"></i></a>
                                </li>
                                <li role="presentation">
                                    <a href="#bells" data-toggle="tab">Campanas<i class="fa fa-circle"></i></a>
                                </li>
                                <li role="presentation">
                                    <a href="#bottle_cages" data-toggle="tab">Jaulas para botellas<i
                                            class="fa fa-circle"></i></a>
                                </li>
                                <li role="presentation">
                                    <a href="#fenders" data-toggle="tab">Guardabarros</a>
                                </li>
                                <li role="presentation">
                                    <a href="#all" data-toggle="tab">Ver todo</a>
                                </li>
                            </ul>
                        </div>
                        <!--End Tabs header-->

                        <!--Start Tabs content-->
                        <div class="tab-content">

                            <!--Tab item-->
                            <div class="tab-pane active" id="baby_seats">
                                <!--Start product-->
                                <div class="row row-item">
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product4.png"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product4.png"
                                                    alt="product 4" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Propel
                                                        Advanced SL 0</a></h4>
                                                <span class="product-price">$900.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product5.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product5.jpg"
                                                    alt="product 2" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Defy
                                                        Advanced SL</a></h4>
                                                <span class="product-price">$1,770.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product6.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product6.jpg"
                                                    alt="product 3" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">FastRoad
                                                        CoMax</a></h4>
                                                <span class="product-price">$900.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product7.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product7.jpg"
                                                    alt="product 4" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Propel
                                                        Advanced SL 0</a></h4>
                                                <span class="product-price">$900.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                </div>
                                <div class="row row-item">
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product8.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product8.jpg"
                                                    alt="product 2" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Defy
                                                        Advanced SL</a></h4>
                                                <span class="product-price">$1,770.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product9.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product9.jpg"
                                                    alt="product 3" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">FastRoad
                                                        CoMax</a></h4>
                                                <span class="product-price">$900.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product10.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product10.jpg"
                                                    alt="product 2" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Defy
                                                        Advanced SL</a></h4>
                                                <span class="product-price">$1,770.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product8.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product8.jpg"
                                                    alt="product 2" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Defy
                                                        Advanced SL</a></h4>
                                                <span class="product-price">$1,770.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                </div>
                                <!--End product-->
                            </div>
                            <!--End tab item-->

                            <!--Tab item-->
                            <div class="tab-pane" id="bells">
                                <!--Start product-->
                                <div class="row row-item">
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product8.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product8.jpg"
                                                    alt="product 2" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Defy
                                                        Advanced SL</a></h4>
                                                <span class="product-price">$1,770.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product9.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product9.jpg"
                                                    alt="product 3" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">FastRoad
                                                        CoMax</a></h4>
                                                <span class="product-price">$900.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product10.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product10.jpg"
                                                    alt="product 2" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Defy
                                                        Advanced SL</a></h4>
                                                <span class="product-price">$1,770.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product8.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product8.jpg"
                                                    alt="product 2" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Defy
                                                        Advanced SL</a></h4>
                                                <span class="product-price">$1,770.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                </div>
                                <div class="row row-item">
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product4.png"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product4.png"
                                                    alt="product 4" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Propel
                                                        Advanced SL 0</a></h4>
                                                <span class="product-price">$900.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product5.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product5.jpg"
                                                    alt="product 2" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Defy
                                                        Advanced SL</a></h4>
                                                <span class="product-price">$1,770.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product6.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product6.jpg"
                                                    alt="product 3" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">FastRoad
                                                        CoMax</a></h4>
                                                <span class="product-price">$900.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product7.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product7.jpg"
                                                    alt="product 4" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Propel
                                                        Advanced SL 0</a></h4>
                                                <span class="product-price">$900.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                </div>
                                <!--End product-->
                            </div>
                            <!--End tab item-->

                            <!--Tab item-->
                            <div class="tab-pane" id="bottle_cages">
                                <!--Start product-->
                                <div class="row row-item">
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product4.png"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product4.png"
                                                    alt="product 4" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Propel
                                                        Advanced SL 0</a></h4>
                                                <span class="product-price">$900.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product5.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product5.jpg"
                                                    alt="product 2" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Defy
                                                        Advanced SL</a></h4>
                                                <span class="product-price">$1,770.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product6.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product6.jpg"
                                                    alt="product 3" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">FastRoad
                                                        CoMax</a></h4>
                                                <span class="product-price">$900.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product7.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product7.jpg"
                                                    alt="product 4" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Propel
                                                        Advanced SL 0</a></h4>
                                                <span class="product-price">$900.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                </div>
                                <div class="row row-item">
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product8.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product8.jpg"
                                                    alt="product 2" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Defy
                                                        Advanced SL</a></h4>
                                                <span class="product-price">$1,770.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product9.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product9.jpg"
                                                    alt="product 3" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">FastRoad
                                                        CoMax</a></h4>
                                                <span class="product-price">$900.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product10.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product10.jpg"
                                                    alt="product 2" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Defy
                                                        Advanced SL</a></h4>
                                                <span class="product-price">$1,770.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product8.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product8.jpg"
                                                    alt="product 2" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Defy
                                                        Advanced SL</a></h4>
                                                <span class="product-price">$1,770.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                </div>
                                <!--End product-->
                            </div>
                            <!--End tab item-->

                            <!--Tab item-->
                            <div class="tab-pane" id="fenders">
                                <!--Start product-->
                                <div class="row row-item">
                                    <div class="col-md-3 col-sm-6">
                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product8.jpg" alt="product 2" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html">Add to cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Defy
                                                        Advanced SL</a></h4>
                                                <span class="product-price">$1,770.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product9.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product9.jpg"
                                                    alt="product 3" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">FastRoad
                                                        CoMax</a></h4>
                                                <span class="product-price">$900.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product10.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product10.jpg"
                                                    alt="product 2" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Defy
                                                        Advanced SL</a></h4>
                                                <span class="product-price">$1,770.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product8.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product8.jpg"
                                                    alt="product 2" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Defy
                                                        Advanced SL</a></h4>
                                                <span class="product-price">$1,770.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                </div>
                                <div class="row row-item">
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product4.png"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product4.png"
                                                    alt="product 4" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Propel
                                                        Advanced SL 0</a></h4>
                                                <span class="product-price">$900.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product5.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product5.jpg"
                                                    alt="product 2" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Defy
                                                        Advanced SL</a></h4>
                                                <span class="product-price">$1,770.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product6.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product6.jpg"
                                                    alt="product 3" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">FastRoad
                                                        CoMax</a></h4>
                                                <span class="product-price">$900.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product7.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product7.jpg"
                                                    alt="product 4" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Propel
                                                        Advanced SL 0</a></h4>
                                                <span class="product-price">$900.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                </div>
                                <!--End product-->
                            </div>
                            <!--End tab item-->

                            <!--Tab item-->
                            <div class="tab-pane" id="all">
                                <!--Start product-->
                                <div class="row row-item">
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product4.png"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product4.png"
                                                    alt="product 4" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Propel
                                                        Advanced SL 0</a></h4>
                                                <span class="product-price">$900.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product5.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product5.jpg"
                                                    alt="product 2" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Defy
                                                        Advanced SL</a></h4>
                                                <span class="product-price">$1,770.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product6.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product6.jpg"
                                                    alt="product 3" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">FastRoad
                                                        CoMax</a></h4>
                                                <span class="product-price">$900.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product7.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product7.jpg"
                                                    alt="product 4" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Propel
                                                        Advanced SL 0</a></h4>
                                                <span class="product-price">$900.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->

                                    </div>
                                </div>
                                <div class="row row-item">
                                    <div class="col-md-3 col-sm-6">
                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product8.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product8.jpg"
                                                    alt="product 2" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Defy
                                                        Advanced SL</a></h4>
                                                <span class="product-price">$1,770.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product9.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product9.jpg"
                                                    alt="product 3" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">FastRoad
                                                        CoMax</a></h4>
                                                <span class="product-price">$900.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product10.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product10.jpg"
                                                    alt="product 2" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Defy
                                                        Advanced SL</a></h4>
                                                <span class="product-price">$1,770.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <!--Start product item-->
                                        <div class="product-item">
                                            <div class="product-thubnail">
                                                <img src="images/product/product8.jpg"
                                                    tppabs="http://html.bikeshop.templaza.net/images/product/product8.jpg"
                                                    alt="product 2" />
                                                <div class="product-meta">
                                                    <a class="add-to-cart" href="shop-cart.html"
                                                        tppabs="http://html.bikeshop.templaza.net/shop-cart.html">Add to
                                                        cart</a>
                                                    <span class="quick-view">
                                                        <a href="#">Quick view</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-infomation">
                                                <h4><a href="single-product.html"
                                                        tppabs="http://html.bikeshop.templaza.net/single-product.html">Defy
                                                        Advanced SL</a></h4>
                                                <span class="product-price">$1,770.00</span>
                                                <span class="product-attr">
                                                    <i class="fa fa-circle light-blue"></i>
                                                    <i class="fa fa-circle orange"></i>
                                                    <i class="fa fa-circle blueviolet"></i>
                                                    <i class="fa fa-circle orange-dark"></i>
                                                    <i class="fa fa-circle steelblue"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--End product item-->
                                    </div>
                                </div>
                                <!--End product-->
                            </div>
                            <!--End tab item-->

                        </div>
                        <!--End tabs content-->

                    </div>
                    <!--End class Shortcode tabs-->

                </div>
            </div>
            <!--End section large top for tabs content-->

            <!--Start parallax-->
            @include('template.parallax')
            <!--End Start parallax-->

            <!--Start section lager-->
            @include('template.section-large')
            <!--End section large-->

            <!--Start partners-->
            @include('template.partners')
            <!--End partners-->

            <!--Start Footer-->
            @include('template.footer')
            <!--End Footer-->

        </div>
        <!--End class site-->

        <!-- Mainly scripts -->
        <!-- Bootstrap JavaScript -->
        <!-- jQuery.js, Popper.js, Bootstrap.js -->
        <script type='text/javascript' src="{{ asset('js/jquery.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- JavScript template page -->
        <script type='text/javascript' src="{{ asset('js/off-canvas.js') }}"></script>
        <!--jQuery Countdow-->
        <script type='text/javascript' src="{{ asset('js/jquery.plugin.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/jquery.countdown.min.js') }}"></script>
        <!--End Countdow-->
        <script type='text/javascript' src="{{ asset('js/jquery.parallax-1.1.3.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/owl.carousel.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/custom.js') }}"></script>
        <script type='text/javascript' src="{{ asset('rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('rs-plugin/js/custom-rs.js') }}"></script>

        <!-- other javascript -->
        @yield('js')
    </body>

</html>