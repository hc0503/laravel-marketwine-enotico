<!DOCTYPE html> 
<html lang="en">
  <head>
    <meta charset="utf-8"> 
    <title>Enotico
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Enotico - Wine Marketplace">
    <meta name="keywords" content="Vinos, cerveza, destilados, uvas">
    <meta name="author" content="Prospero">
    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">
    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{asset('css/vendor.min.css')}}">
    <!-- Main Template Styles-->
    <link id="mainStyles" rel="stylesheet" media="screen" href="{{asset('css/styles.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style type="text/css">
      .mt-100 {
    margin-top: 100px
}

body {
    background: #00B4DB;
    background: -webkit-linear-gradient(to right, #0083B0, #00B4DB);
    background: linear-gradient(to right, #0083B0, #00B4DB);
    color: #514B64;
    min-height: 100vh
}
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1569006288/BBBootstrap/choices.min.css?version=7.0.0">
<script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1569006273/BBBootstrap/choices.min.js?version=7.0.0"></script>

    <!-- Modernizr-->
    <script src="{{asset('js/modernizr.min.js')}}"></script>
  </head>
  <!-- Body-->
  <body>
    <!-- Off-Canvas Category Menu-->
    <div class="offcanvas-container" id="shop-categories">
      <div class="offcanvas-header">
        <h3 class="offcanvas-title">Elige una categoría</h3>
      </div>
      <nav class="offcanvas-menu">
        <ul class="menu">
          <li class="has-children"><span><a href="{{url('/vinos')}}">Vinos</a></span>
           
          </li>
          <li class="has-children"><span><a href="#">Uvas</a></span>
            
          </li>
          <li class="has-children"><span><a href="{{url('/cerveza')}}">Cervezas</a></span>
            
          </li>
          <li class="has-children"><span><a href="{{url('/destilados')}}">Destilados</a></span>
           
          </li>
          <li class="has-children"><span><a href="{{url('/atipicos')}}">Atípicos</a></span>
            
          </li>
          <li class="has-children"><span><a href="#">Promociones</a></span>
           
          </li>
          
        </ul>
      </nav>
    </div>
    <!-- Off-Canvas Mobile Menu-->
    <div class="offcanvas-container" id="mobile-menu"><a class="account-link" href="#">
        <div class="user-ava"><img src="{{ url('img/account/user-ava-md.jpg')}}" alt="Daniel Adams">
        </div>
        <div class="user-info">
          <h6 class="user-name">Daniel Adams</h6><span class="text-sm text-white opacity-60">290 Reward points</span>
        </div></a>
      <nav class="offcanvas-menu">
        <ul class="menu">
          <li class="has-children active"><span><a href="#"><span>Home</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
                <li class="active"><a href="index.html">Featured Products Slider</a></li>
                <li><a href="home-featured-categories.html">Featured Categories</a></li>
                <li><a href="home-collection-showcase.html">Products Collection Showcase</a></li>
                <li><a href="home-dark-header.html">Dark Header</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="shop-grid-ls.html"><span>Shop</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
                <li><a href="shop-categories.html">Shop Categories</a></li>
              <li class="has-children"><span><a href="shop-grid-ls.html"><span>Shop Grid</span></a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="shop-grid-ls.html">Grid Left Sidebar</a></li>
                    <li><a href="shop-grid-rs.html">Grid Right Sidebar</a></li>
                    <li><a href="shop-grid-ns.html">Grid No Sidebar</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="shop-list-ls.html"><span>Shop List</span></a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="shop-list-ls.html">List Left Sidebar</a></li>
                    <li><a href="shop-list-rs.html">List Right Sidebar</a></li>
                    <li><a href="shop-list-ns.html">List No Sidebar</a></li>
                </ul>
              </li>
                <li><a href="shop-single.html">Single Product</a></li>
                <li><a href="cart.html">Cart</a></li>
                <li><a href="checkout.html">Checkout</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="#">Categories</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li class="has-children"><span><a href="#">Men's Shoes</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                  <li><a href="#">Sneakers</a></li>
                  <li><a href="#">Loafers</a></li>
                  <li><a href="#">Boat Shoes</a></li>
                  <li><a href="#">Sandals</a></li>
                  <li><a href="#">View All</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="#">Women's Shoes</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                  <li><a href="#">Sandals</a></li>
                  <li><a href="#">Flats</a></li>
                  <li><a href="#">Sneakers</a></li>
                  <li><a href="#">Heels</a></li>
                  <li><a href="#">View All</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="#">Men's Clothing</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                  <li><a href="#">Shirts &amp; Tops</a></li>
                  <li><a href="#">Pants</a></li>
                  <li><a href="#">Jackets</a></li>
                  <li><a href="#">View All</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="#">Women's Clothing</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                  <li><a href="#">Dresses</a></li>
                  <li><a href="#">Shirts &amp; Tops</a></li>
                  <li><a href="#">Shorts</a></li>
                  <li><a href="#">Swimwear</a></li>
                  <li><a href="#">View All</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="#">Bags</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                  <li><a href="#">Handbags</a></li>
                  <li><a href="#">Backpacks</a></li>
                  <li><a href="#">Luggage</a></li>
                  <li><a href="#">Wallets</a></li>
                  <li><a href="#">View All</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="#">Accessories</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                  <li><a href="#">Sunglasses</a></li>
                  <li><a href="#">Hats</a></li>
                  <li><a href="#">Watches</a></li>
                  <li><a href="#">Jewelry</a></li>
                  <li><a href="#">Belts</a></li>
                  <li><a href="#">View All</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="has-children"><span><a href="account-orders.html"><span>Account</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
                <li><a href="account-login.html">Login / Register</a></li>
                <li><a href="account-password-recovery.html">Password Recovery</a></li>
                <li><a href="account-orders.html">Orders List</a></li>
                <li><a href="account-wishlist.html">Wishlist</a></li>
                <li><a href="account-profile.html">Profile Page</a></li>
                <li><a href="account-address.html">Contact / Shipping Address</a></li>
                <li><a href="account-open-ticket.html">Open Ticket</a></li>
                <li><a href="account-tickets.html">My Tickets</a></li>
                <li><a href="account-single-ticket.html">Single Ticket</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="blog-rs.html"><span>Blog</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li class="has-children"><span><a href="blog-rs.html"><span>Blog Layout</span></a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="blog-rs.html">Blog Right Sidebar</a></li>
                    <li><a href="blog-ls.html">Blog Left Sidebar</a></li>
                    <li><a href="blog-ns.html">Blog No Sidebar</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="blog-single-rs.html"><span>Single Post Layout</span></a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="blog-single-rs.html">Post Right Sidebar</a></li>
                    <li><a href="blog-single-ls.html">Post Left Sidebar</a></li>
                    <li><a href="blog-single-ns.html">Post No Sidebar</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="has-children"><span><a href="#"><span>Pages</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
                <li><a href="about.html">About Us</a></li>
                <li><a href="mobile-app.html">Unishop Mobile App</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contacts.html">Contacts</a></li>
                <li><a href="faq.html">Help / FAQ</a></li>
                <li><a href="order-tracking.html">Order Tracking</a></li>
                <li><a href="search-results.html">Search Results</a></li>
                <li><a href="404.html">404</a></li>
                <li><a href="coming-soon.html">Coming Soon</a></li>
              <li><a class="text-danger" href="docs/dev-setup.html">Documentation</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="components/accordion.html"><span>Components</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
                <li><a href="components/accordion.html">Accordion</a></li>
                <li><a href="components/alerts.html">Alerts</a></li>
                <li><a href="components/buttons.html">Buttons</a></li>
                <li><a href="components/cards.html">Cards</a></li>
                <li><a href="components/carousel.html">Carousel</a></li>
                <li><a href="components/countdown.html">Countdown</a></li>
                <li><a href="components/forms.html">Forms</a></li>
                <li><a href="components/gallery.html">Gallery</a></li>
                <li><a href="components/google-maps.html">Google Maps</a></li>
                <li><a href="components/images.html">Images &amp; Figures</a></li>
                <li><a href="components/list-group.html">List Group</a></li>
                <li><a href="components/market-social-buttons.html">Market &amp; Social Buttons</a></li>
                <li><a href="components/media.html">Media Object</a></li>
                <li><a href="components/modal.html">Modal</a></li>
                <li><a href="components/pagination.html">Pagination</a></li>
                <li><a href="components/pills.html">Pills</a></li>
                <li><a href="components/progress-bars.html">Progress Bars</a></li>
                <li><a href="components/shop-items.html">Shop Items</a></li>
                <li><a href="components/steps.html">Steps</a></li>
                <li><a href="components/tables.html">Tables</a></li>
                <li><a href="components/tabs.html">Tabs</a></li>
                <li><a href="components/team.html">Team</a></li>
                <li><a href="components/toasts.html">Toast Notifications</a></li>
                <li><a href="components/tooltips-popovers.html">Tooltips &amp; Popovers</a></li>
                <li><a href="components/typography.html">Typography</a></li>
                <li><a href="components/video-player.html">Video Player</a></li>
                <li><a href="components/widgets.html">Widgets</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
    <!-- Topbar-->
    <div class="topbar">
      <div class="topbar-column"><a class="hidden-md-down" href="mailto:support@unishop.com"><i class="icon-mail"></i>&nbsp; support@enotico.com</a><a class="hidden-md-down" href="tel:00331697720"><i class="icon-bell"></i>&nbsp; 00 33 169 7720</a><a class="social-button sb-facebook shape-none sb-dark" href="#" target="_blank"><i class="socicon-facebook"></i></a><a class="social-button sb-twitter shape-none sb-dark" href="#" target="_blank"><i class="socicon-twitter"></i></a><a class="social-button sb-instagram shape-none sb-dark" href="#" target="_blank"><i class="socicon-instagram"></i></a><a class="social-button sb-pinterest shape-none sb-dark" href="#" target="_blank"><i class="socicon-pinterest"></i></a>
      </div>
      <div class="topbar-column"><a class="hidden-md-down" href="#"><i class="icon-download"></i>&nbsp; Get mobile app</a>
        <div class="lang-currency-switcher-wrap">
          <div class="lang-currency-switcher dropdown-toggle"><span class="language"><img alt="English" src="{{ url('img/flags/GB.png')}}"></span><span class="currency">$ USD</span></div>
          <div class="dropdown-menu">
            <div class="currency-select">
              <select class="form-control form-control-rounded form-control-sm">
                <option value="usd">$ USD</option>
                <option value="usd">€ EUR</option>
                <option value="usd">£ UKP</option>
                <option value="usd">¥ JPY</option>
              </select>
            </div><a class="dropdown-item" href="#"><img src="{{ url('img/flags/FR.png')}}" alt="Français">Français</a><a class="dropdown-item" href="#"><img src="{{ url('img/flags/DE.png')}}" alt="Deutsch">Deutsch</a><a class="dropdown-item" href="#"><img src="{{ url('img/flags/IT.png')}}" alt="Italiano">Italiano</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Navbar-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="navbar navbar-sticky">
      <!-- Search-->
      <form class="site-search" method="get">
        <input type="text" name="site_search" placeholder="Type to search...">
        <div class="search-tools"><span class="clear-search">Clear</span><span class="close-search"><i class="icon-cross"></i></span></div>
      </form>
      <div class="site-branding">
        <div class="inner">
          <!-- Off-Canvas Toggle (#shop-categories)--><a class="offcanvas-toggle cats-toggle" href="#shop-categories" data-toggle="offcanvas"></a>
          <!-- Off-Canvas Toggle (#mobile-menu)--><a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
          <!-- Site Logo--><a class="site-logo" href="#"><img src="{{ url('img/logo/logo1.png')}}" alt="Enotico"></a>
        </div>
      </div>
      <!-- Main Navigation-->
      <nav class="site-menu">
        <ul>
          <li class="has-megamenu active"><a href="{{url('/')}}"><span>Inicio</span></a>
            
          </li>
          <li><a href="{{url('/vinos')}}"><span>Vinos</span></a>
           
              </li>
             
          
          <li class="has-megamenu"><a href="#"><span>Uvas</span></a>
            <ul class="mega-menu">
              <li><span class="mega-menu-title">Variedad de Uva</span>
                <ul class="sub-menu">
                  <li><a href="#">Cabernet Sauvignon</a></li>
                  <li><a href="#">Verdejo</a></li>
                  <li><a href="#">Tempranillo / Tinta de Toro</a></li>
                  <li><a href="#">Syrah</a></li>
                  <li><a href="#">Sauvignon blanc</a></li>
                  <li><a href="#">Pedro Ximénez</a></li>
                </ul>
              </li>
              <li><span class="mega-menu-title">Mas variedades...</span>
                <ul class="sub-menu">
                  <li><a href="#">Parellada</a></li>
                  <li><a href="#">Monastrell </a></li>
                  <li><a href="#">Merlot</a></li>
                  <li><a href="#">Mencía</a></li>
                  <li><a href="#">Macabeo / Viura</a></li>
                  <li><a href="#">Godello</a></li>
                </ul>
              </li>
              <li>
                <section class="promo-box" style="background-image: url(img/banners/uvas.jpg);"><span class="overlay-dark" style="opacity: .4;"></span>
                  <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                    <h4 class="text-light text-thin text-shadow">Toda la variedad de</h4>
                    <h3 class="text-bold text-light text-shadow">Uvas</h3><a class="btn btn-sm btn-primary" href="#">Ver</a>
                  </div>
                </section>
              </li>
              <li>
                <section class="promo-box" style="background-image: url(img/banners/03.jpg);">
                  <!-- Choose between .overlay-dark (#000) or .overlay-light (#fff) with default opacity of 50%. You can overrride default color and opacity values via 'style' attribute.--><span class="overlay-dark" style="opacity: .45;"></span>
                  <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                    <h3 class="text-bold text-light text-shadow">Limited Offer</h3>
                    <h4 class="text-light text-thin text-shadow">save up to 50%!</h4><a class="btn btn-sm btn-primary" href="#">Learn More</a>
                  </div>
                </section>
              </li>
            </ul>
          </li>
          <li><a href="{{url('/cerveza')}}"><span>Cervezas</span></a>
            
          </li>
          <li><a href="{{url('/destilados')}}"><span>Destilados</span></a>
            
          </li>
          <li><a href="{{url('/atipicos')}}"><span>Atípicos</span></a>
            
          </li>
          <li class="has-megamenu"><a href="#"><span>Promociones</span></a>
           
          </li>
        </ul>
      </nav>
      <!-- Toolbar-->
      <div class="toolbar">
        <div class="inner">
          <div class="tools">
            <div class="search"><i class="icon-search"></i></div>
             @if (Route::has('login'))
             @auth
            <div class="account"><a href="#"></a><i class="icon-head"></i>

              <ul class="toolbar-dropdown">

                <li class="sub-menu-user">
                  <div class="user-ava"><img src="{{ url('img/account/user-ava-sm.jpg')}}" alt="Daniel Adams">
                  </div>
                  <div class="user-info">
                    <h6 class="user-name">{{Auth::user()->name}}</h6><span class="text-xs text-muted">290 Reward points</span>
                  </div>
                </li>
                  <li><a href="{{url('/perfil')}}">Perfil</a></li>
                  <li><a href="#">Orders List</a></li>
                  <li><a href="#">Wishlist</a></li>
                <li class="sub-menu-separator"></li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> <i class="icon-unlock"></i>Salir</a>
                                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                  </li>
              </ul>


            </div>
             @else
             <div class="account"><a href="#"></a><i class="icon-head"></i>

              <ul class="toolbar-dropdown">

                <li class="sub-menu-user">
                  <div class="user-ava">
                  </div>
                  <div class="user-info">
                    
                  </div>
                </li>
                  <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                  <li><a href="{{ route('register') }}">Registrarme</a></li>                  
              </ul>


            </div>
             @endauth
            @endif
            <div class="cart"><a href="cart.html"></a><i class="icon-bag"></i><span class="count">{{ Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span><span class="subtotal"></span>
              <div class="toolbar-dropdown">
                @if(Session::has('cart'))

                        @foreach($productose as $product) 
                <div class="dropdown-product-item"><span class="dropdown-product-remove"><a href="{{ route('producto.remove', ['id' => $product['item']['id']]) }}"> <i class="icon-cross"></i></a></span><a class="dropdown-product-thumb" href="#"><img src="../../{{ $product['item']['img'] }}" alt="Product"></a>
                  <div class="dropdown-product-info"><a class="dropdown-product-title" href="#">{{ $product['item']['nombre'] }}</a><span class="dropdown-product-details">{{ $product['qty'] }} x €{{ number_format($product['price'], 2) }}</span></div>
                </div>
                
               @endforeach
                @endif
                <div class="toolbar-dropdown-group">
                  <div class="column"><a class="btn btn-sm btn-block btn-secondary" href="{{ route('producto.shoppingCart')}}">Ver Carro</a></div>
                  <div class="column"><a class="btn btn-sm btn-block btn-success" href="{{ route('producto.checkout')}}">Terminar compra</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>


    @yield('content')

     <!-- Site Footer-->
      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <!-- Contact Info-->
              <section class="widget widget-light-skin">
                <h3 class="widget-title">Get In Touch With Us</h3>
                <p class="text-white">Phone: 00 33 169 7720</p>
                <ul class="list-unstyled text-sm text-white">
                  <li><span class="opacity-50">Monday-Friday:</span>9.00 am - 8.00 pm</li>
                  <li><span class="opacity-50">Saturday:</span>10.00 am - 6.00 pm</li>
                </ul>
                <p><a class="navi-link-light" href="#">support@unishop.com</a></p><a class="social-button shape-circle sb-facebook sb-light-skin" href="#"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter sb-light-skin" href="#"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-instagram sb-light-skin" href="#"><i class="socicon-instagram"></i></a><a class="social-button shape-circle sb-google-plus sb-light-skin" href="#"><i class="socicon-googleplus"></i></a>
              </section>
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- Mobile App Buttons-->
              <section class="widget widget-light-skin">
                <h3 class="widget-title">Our Mobile App</h3><a class="market-button apple-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">App Store</span></a><a class="market-button google-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Google Play</span></a><a class="market-button windows-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Windows Store</span></a>
              </section>
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- About Us-->
              <section class="widget widget-links widget-light-skin">
                <h3 class="widget-title">About Us</h3>
                <ul>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">About Unishop</a></li>
                  <li><a href="#">Our Story</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Our Blog</a></li>
                </ul>
              </section>
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- Account / Shipping Info-->
              <section class="widget widget-links widget-light-skin">
                <h3 class="widget-title">Account &amp; Shipping Info</h3>
                <ul>
                  <li><a href="#">Your Account</a></li>
                  <li><a href="#">Shipping Rates & Policies</a></li>
                  <li><a href="#">Refunds & Replacements</a></li>
                  <li><a href="#">Taxes</a></li>
                  <li><a href="#">Delivery Info</a></li>
                  <li><a href="#">Affiliate Program</a></li>
                </ul>
              </section>
            </div>
          </div>
          <hr class="hr-light mt-2 margin-bottom-2x">
          <div class="row">
            <div class="col-md-7 padding-bottom-1x">
              <!-- Payment Methods-->
              <div class="margin-bottom-1x" style="max-width: 615px;"><img src="{{ url('img/payment_methods.png')}}" alt="Payment Methods">
              </div>
            </div>
            <div class="col-md-5 padding-bottom-1x">
              <div class="margin-top-1x hidden-md-up"></div>
              <!--Subscription-->
              <form class="subscribe-form" action="#" method="post" target="_blank" novalidate>
                <div class="clearfix">
                  <div class="input-group input-light">
                    <input class="form-control" type="email" name="EMAIL" placeholder="Your e-mail"><span class="input-group-addon"><i class="icon-mail"></i></span>
                  </div>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true">
                    <input type="text" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1">
                  </div>
                  <button class="btn btn-primary" type="submit"><i class="icon-check"></i></button>
                </div><span class="form-text text-sm text-white opacity-50">Subscribe to our Newsletter to receive early discount offers, latest news, sales and promo information.</span>
              </form>
            </div>
          </div>
          <!-- Copyright-->
          <p class="footer-copyright">© All rights reserved. Made with &nbsp;<i class="icon-heart text-danger"></i><a href="#" target="_blank"> &nbsp;by Prospero</a></p>
        </div>
      </footer>
    </div>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="{{asset('js/vendor.min.js')}}"></script>
    <script src="{{asset('js/scripts.min.js')}}"></script>
    @yield('script')
  </body>
</html>