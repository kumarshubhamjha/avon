    <!-- Page Header-->
    <div class="top-bar">
        <div class="header-links">
            <div class="container d-flex justify-content-end">
                <ul>
                    <li><a class="link" href="{{url('avon_square')}}">Avon Square</a></li>
                    <li><a class="link" href="#">Contact</a></li>
                    <li><a class="link" href="#"><img src="{{url('img/icon/store.svg')}}" alt="store locator">
                            Store Locator</a></li>
                    <li><a class="link" href="#"><img src="{{url('img/icon/trackorder.svg')}}" alt="track order">
                            Track order</a></li>
                </ul>
            </div>
        </div>
    </div>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="header-wrapper w-100 align-items-center">
                    <div class="left-section">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><img src="{{url('img/icon/toggle.svg')}}" alt="hamburger-menu"></span>
                        </button>

                        <a class="navbar-brand" href="{{ sc_route('home') }}"><img
                                src="{{ sc_file(sc_store('logo', ($storeId ?? null))) }}" alt="logo"></a>
                    </div>

                    <div class="right-section">
                        <div class="top-section">
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                                <span class="close-icon"><img src="{{url('img/icon/menu-close.svg')}}" alt="close"></span>
                                <div class="logo-wrapper">
                                    <img src="{{url('img/logo.svg')}}" class="img-fluid" alt="logo">
                                </div>
                                @php
                            $category =  DB::table('sc_shop_category')->where('status',1)->get();
                             $name =  DB::table('sc_shop_category_description')->get();
                           @endphp
                           
                                <ul class="nav">
                                    
                                    @if (!empty(sc_link_collection()['menu']))
                                   
                                        @foreach (sc_link_collection()['menu'] as $url)
                                        
                                            @if ($url['type'] != 'collection')
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="{{ sc_url_render($url['data']['url']) }}">{{ sc_language_render($url['data']['name']) }}</a>
                                               
                                            </li>
                                            @else
                                            @endif
                                        @endforeach
                                    @endif
                                    
                                     @if (!empty($category))
                                    
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="#">Bicycle Categories</a>
                                                 <div class="dropdown-menu">
                                                      @foreach ($category as $val)
                                                      
                                                    <a class="dropdown-item" href="{{url('category/'.$val->alias.'.html')}}">
                                                        @foreach ($name as $title)
                                                        @if($val->id == $title->category_id)
                                                        {{$title->title}}
                                                        @endif
                                                         @endforeach
                                                        </a>
                                                   @endforeach
                                                </div>
                                            </li>
                                          
                                    @endif
                                </ul>
                                <div class="header-links">
                                    <ul>
                                        <li><a class="link avon-sq" href="#">Avon Square</a></li>
                                        <li><a class="link" href="#">About</a></li>
                                        <li><a class="link" href="#">Contact</a></li>
                                        <li><a class="link" href="#">Store Locator</a></li>
                                        <li><a class="link" href="#">Track order</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="right-icons">
                                <ul>
                                    <li class="icon top-search">
                                        <a href="#" class="icon"><img src="{{url('img/icon/icon-Search.svg')}}" alt="Search"></a>
                                    </li>

                                    <li class="icon myaccount">
                                        <a href="#" class="icon"><img src="{{url('img/icon/account.svg')}}" alt="My Account"></a>
                                        
                                        <div class="myaccount-popup">
                                            <div class="inner-content">
                                                                                           @guest
                                                <div class="guest-user ">
                                                    <p class="access">To Access your Account & Orders.</p>
                                                    
                                                    <a href="{{ sc_route('login') }}" class="default-btn">Log In</a>
                                                    <a href="{{ sc_route('register') }}" class="new-link">New here? Create an account</a>        
                                                </div>
                                                 @else
                                                <div class="logedIn-user">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ sc_route('customer.order_list') }}" class="link">My Orders</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ sc_route('wishlist') }}""({{ Cart::instance('wishlist')->count() }})" class="link">My Wishlist</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link">Coupons</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="profile">
                                                        <li>
                                                            <a href="{{ sc_route('customer.index') }}" class="link">My Profile</a>
                                                        </li>
                                                         <li>
                                                            <a href="{{ sc_route('logout') }}" class="link">Logout</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link">Saved Cards</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link">Saved Addresses</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                  @endguest
                                            </div>
                                        </div>
                                    </li>
                                    @if (sc_config('link_cart', null, 1))
                                        <!-- RD Navbar Basket-->
                                        <li class="icon cart">
                                            <a href="{{ sc_route('cart') }}" class="icon">
                                            
                                                <img src="{{url('img/icon/ShoppingCart.svg')}}" alt="Shopping Cart">
                                                <div class="num count sc-cart" id="shopping-cart">{{ Cart::instance('default')->count() }}</div>
                                                
                                            </a>
                                            
                                        </li>
                                        
                                        
                                       
                                    @endif
                                </ul>
                                <div class="search-wrapper">
                                    <div class="top-wrapper">
                                        <div class="text">I'm Looking For....</div>
                                        <div class="close"><img src="img/icon/pdp/close.svg" alt="close"></div>
                                    </div>
                                    <div class="rd-navbar-main-element w-100">
                                        <!-- RD Navbar Search-->
                                        <div class="rd-navbar-search rd-navbar-search-2 w-100">
                                            <!--<button class="rd-navbar-search-toggle rd-navbar-fixed-element-3"-->
                                            <!--    data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>-->
                                            <form class="rd-search" action="{{ sc_route('search') }}" method="GET">
                                                <div class="form-wrap">
                                                    <input class="rd-navbar-search-form-input form-input" type="text"
                                                        name="keyword"
                                                        placeholder="{{ sc_language_render('search.placeholder') }}" />
                                                    <button class="rd-search-form-submit" type="submit"><img src="img/icon/icon-Search.svg" alt="Search"></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    
    