@extends('user.layouts.users')

@section('content')
    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form action="{{ url('/produk') }}" method="GET">
                                <input type="text" name="keyword" placeholder="Search..." value="{{ $keyword }}">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Kategori</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    @foreach ($kategoris as $kategori)
                                                        <div class="card">
                                                            <a class="badge-dark col-5"
                                                                href="{{ url('/produk') }}?Kategori={{ $kategori->id }}"
                                                                {{-- data-toggle="collapse" --}}
                                                                data-target="#kategori{{ $kategori->id }}">{{ $kategori->name }}</a>
                                                            <div id="kategori{{ $kategori->id }}" class="collapse show">
                                                                <div class="card-body">
                                                                    <div class="shop__sidebar__categories">
                                                                        <ul class="nice-scroll">
                                                                            @foreach ($kategori->subKategori as $subKategori)
                                                                                <li><a
                                                                                        href="/produk/{{ $kategori->name }}?subKategori={{ $subKategori->id }}">{{ $subKategori->name }}</a>
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseThree">Filter Price</a>
                                    </div>
                                    <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__price">
                                                <ul>
                                                    <li><a href="/produk/?min=0&&max=100000">0 -
                                                            100.000</a></li>
                                                    <li><a href="/produk/?min=100000&&max=200000">100.000 -
                                                            200.000</a></li>
                                                    <li><a href="/produk/?min=200000&&max=300000">200.000 -
                                                            300.000</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseFour">Size</a>
                                    </div>
                                    <div id="collapseFour" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__size">
                                                <label for="xs">xs
                                                    <input type="radio" id="xs">
                                                </label>
                                                <label for="sm">s
                                                    <input type="radio" id="sm">
                                                </label>
                                                <label for="md">m
                                                    <input type="radio" id="md">
                                                </label>
                                                <label for="xl">xl
                                                    <input type="radio" id="xl">
                                                </label>
                                                <label for="2xl">2xl
                                                    <input type="radio" id="2xl">
                                                </label>
                                                <label for="xxl">xxl
                                                    <input type="radio" id="xxl">
                                                </label>
                                                <label for="3xl">3xl
                                                    <input type="radio" id="3xl">
                                                </label>
                                                <label for="4xl">4xl
                                                    <input type="radio" id="4xl">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseFive">Colors</a>
                                    </div>
                                    <div id="collapseFive" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__color">
                                                <label class="c-1" for="sp-1">
                                                    <input type="radio" id="sp-1">
                                                </label>
                                                <label class="c-2" for="sp-2">
                                                    <input type="radio" id="sp-2">
                                                </label>
                                                <label class="c-3" for="sp-3">
                                                    <input type="radio" id="sp-3">
                                                </label>
                                                <label class="c-4" for="sp-4">
                                                    <input type="radio" id="sp-4">
                                                </label>
                                                <label class="c-5" for="sp-5">
                                                    <input type="radio" id="sp-5">
                                                </label>
                                                <label class="c-6" for="sp-6">
                                                    <input type="radio" id="sp-6">
                                                </label>
                                                <label class="c-7" for="sp-7">
                                                    <input type="radio" id="sp-7">
                                                </label>
                                                <label class="c-8" for="sp-8">
                                                    <input type="radio" id="sp-8">
                                                </label>
                                                <label class="c-9" for="sp-9">
                                                    <input type="radio" id="sp-9">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    {{-- <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <p>Showing 1–12 of 126 results</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row">
                        @foreach ($produks as $produk)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item sale">
                                    <div class="product__item__pic set-bg"
                                        data-setbg="{{ asset($produk->image[0]->gambar_produk) }}">
                                        @if ($produk->diskon > 0)
                                            <span class="label">{{ $produk->diskon }}%</span>
                                        @endif
                                        <ul class="product__hover">
                                            <form id="wishlist{{ $produk->id }}" action="{{ route('wishlist.store') }}"
                                                method="POST">
                                                @csrf
                                                <input type="hidden" name="produk_id" value="{{ $produk->id }}">
                                                <li>
                                                    <a
                                                        onclick="event.preventDefault();
                                                                document.getElementById('wishlist{{ $produk->id }}').submit();">
                                                        <img src="{{ asset('assets2/img/icon/heart.png') }}"
                                                            alt="">
                                                    </a>
                                                </li>
                                            </form>
                                            <li><a href="/detailProduk/{{ $produk->id }}"><img
                                                        src="{{ asset('assets2/img/icon/search.png') }}"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6>{{ $produk->nama_produk }}</h6>
                                        @if ($produk->diskon > 0)
                                            @php
                                                $diskon = ($produk->diskon / 100) * $produk->harga;
                                                $harga = $produk->harga - $diskon;
                                            @endphp
                                            <p>Rp.
                                                {{ number_format($harga, 0, ',', '.') }}<span
                                                    class="diskon">{{ number_format($produk->harga, 0, ',', '.') }}</span>
                                            </p>
                                        @else
                                            <p>Rp. {{ number_format($produk->harga, 0, ',', '.') }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{ $produks->links() }}

                    {{-- <div class="row">
                        <div class="col-lg-12">
                            <div class="product__pagination">
                                <a class="active" href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <span>...</span>
                                <a href="#">21</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->
@endsection
