<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="/"><img src="{{ asset('assets2/img/logo.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
                        <li class="{{ Request::is('produk*') ? 'active' : '' }}"><a href="produk">Shop</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="./about.html">About Us</a></li>
                                <li><a href="./shop-details.html">Shop Details</a></li>
                                <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                                <li><a href="./checkout.html">Check Out</a></li>
                                <li><a href="./blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="./blog.html">Blog</a></li>
                        <li><a href="./contact.html">Contacts</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    @auth
                        @php
                            $wishlists = App\Models\Wishlist::where('user_id', Auth::user()->id)->count();
                            $keranjangs = App\Models\Keranjang::where('user_id', Auth::user()->id)->count();
                        @endphp
                        <a href="/wishlist"><i class='bx bx-heart bx-sm'></i>
                            <div class="tip">{{ $wishlists }}</div>
                        </a>
                        <a href="/keranjang"><i class='bx bx-cart bx-sm'></i>
                            <div class="tip">{{ $keranjangs }}</div>
                        </a>
                        <a href="/profil"><i class='bx bx-user bx-sm'></i></a>
                    @endauth
                    @guest()
                        <a href="/wishlist"><i class='bx bx-heart bx-sm'></i>
                            <div class="tip">0</div>
                        </a>
                        <a href="/keranjang"><i class='bx bx-cart bx-sm'></i>
                            <div class="tip">0</div>
                        </a>
                        <a href="/profil"><i class='bx bx-user bx-sm'></i></a>
                    @endguest
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<!-- Header Section End -->








{{-- <li class="active"><a href="/">Home</a></li>
                        @php
                            $kategoris = App\Models\Kategori::all();
                            $wishlists = App\Models\Wishlist::where('user_id', Auth::user()->id)->count();
                        @endphp
                        <li><a href="#">Shop</a>
                            <ul class="dropdown">
@@ -29,6 +28,12 @@
            <div class="col-lg-3">
                <div class="header__right">
                    @auth
                        @php
                            $wishlists = App\Models\Wishlist::where('user_id', Auth::user()->id)->count();
                            $keranjangs = App\Models\Keranjang::where('user_id', Auth::user()->id)
                                ->where('status', 'keranjang')
                                ->count();
                        @endphp
                        <div class="header__right__auth">
                            <a href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
@@ -39,21 +44,30 @@
                        <div class="header__right__auth">
                            <a href="/profil">Profil</a>
                        </div>
                        <ul class="header__right__widget">
                            <li><span class="icon_search search-switch"></span></li>
                            <li><a href="/wishlist"><span class="icon_heart_alt"></span>
                                    <div class="tip">{{ $wishlists }}</div>
                                </a></li>
                            <li><a href="/keranjang"><span class="icon_bag_alt"></span>
                                    <div class="tip">{{ $keranjangs }}</div>
                                </a></li>
                        </ul>
                    @endauth
                    @guest
                        <div class="header__right__auth">
                            <a href="/login">Login</a>
                        </div>
                        <ul class="header__right__widget">
                            <li><span class="icon_search search-switch"></span></li>
                            <li><a href="/wishlist"><span class="icon_heart_alt"></span>
                                    <div class="tip">0</div>
                                </a></li>
                            <li><a href="/keranjang"><span class="icon_bag_alt"></span>
                                    <div class="tip">0</div>
                                </a></li>
                        </ul>
                    @endguest --}}
