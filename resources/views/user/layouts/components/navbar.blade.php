<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-2">
                <div class="header__logo">
                    <a href="/"><img src="{{ asset('users/assets/img/logo.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="/">Home</a></li>
                        @php
                            $kategoris = App\Models\Kategori::all();
                        @endphp
                        <li><a href="#">Shop</a>
                            <ul class="dropdown">
                                @foreach ($kategoris as $kategori)
                                    <li class="{{ Request::is('/kategori/' . $kategori->name) ? 'active' : '' }}"><a
                                            href="/kategori/{{ $kategori->id }}">{{ $kategori->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="/about">About</a></li>
                    </ul>
                </nav>
            </div>
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
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
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
                    @endguest
                </div>
            </div>
        </div>
        <div class="canvas__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
