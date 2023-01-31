@extends('user.layouts.user')

@section('content')
    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="categories__item categories__large__item set-bg"
                        data-setbg="{{ asset('users/assets/img/categories/category-1.jpg') }}">
                        <div class="categories__text">
                            <h1>Women’s fashion</h1>
                            <p>792 items</p>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg"
                                data-setbg="{{ asset('users/assets/img/categories/category-2.jpg') }}">
                                <div class="categories__text">
                                    <h4>Men’s fashion</h4>
                                    <p>358 items</p>
                                    <a href="#">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg"
                                data-setbg="{{ asset('users/assets/img/categories/category-3.jpg') }}">
                                <div class="categories__text">
                                    <h4>Kid’s fashion</h4>
                                    <p>273 items</p>
                                    <a href="#">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg"
                                data-setbg="{{ asset('users/assets/img/categories/category-5.jpg') }}">
                                <div class="categories__text">
                                    <h4>All Produks</h4>
                                    <p>792 items</p>
                                    <a href="#">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- NewProduct Section Begin -->
    @if (count($new_produks))
        <section class="product spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="section-title">
                            <h4>New product</h4>
                        </div>
                    </div>
                </div>
                <div class="row property__gallery">
                    @foreach ($new_produks as $new_produk)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"
                                    data-setbg="{{ asset($new_produk->image[0]->gambar_produk) }}">
                                    <div class="label new float-start">New</div>
                                    <ul class="product__hover">
                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                        <li><a href="#"><span class="arrow_expand"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6 class="mb-2"><a href="#">{{ $new_produk->nama_produk }}</a></h6>
                                    @if ($new_produk->diskon > 0)
                                        @php
                                            $diskon = ($new_produk->diskon / 100) * $new_produk->harga;
                                            $harga = $new_produk->harga - $diskon;
                                        @endphp
                                        <div class="product__price">Rp.
                                            {{ number_format($harga, 0, ',', '.') }}<span>
                                                {{ number_format($new_produk->harga, 0, ',', '.') }}</span></div>
                                    @else
                                        <div class="product__price"> RP.
                                            Rp. {{ number_format($new_produk->harga, 0, ',', '.') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <!-- NewProduct Section End -->

    <!-- NewProduct Section Begin -->
    @if (count($on_diskons))
        <section class="product spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="section-title">
                            <h4>On Discount</h4>
                        </div>
                    </div>
                </div>
                <div class="row property__gallery">
                    @foreach ($on_diskons as $on_diskon)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"
                                    data-setbg="{{ asset($on_diskon->image[0]->gambar_produk) }}">
                                    <div class="label sale float-end">-{{ $on_diskon->diskon }}%</div>
                                    <ul class="product__hover">
                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                        <li><a href="#"><span class="arrow_expand"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6 class="mb-2"><a href="#">{{ $on_diskon->nama_produk }}</a></h6>
                                    @php
                                        $diskon = ($on_diskon->diskon / 100) * $on_diskon->harga;
                                        $harga = $on_diskon->harga - $diskon;
                                    @endphp
                                    <div class="product__price">Rp.
                                        {{ number_format($harga, 0, ',', '.') }}<span>
                                            {{ number_format($on_diskon->harga, 0, ',', '.') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <!-- NewProduct Section End -->


    <!-- Banner Section Begin -->
    <section class="banner set-bg" data-setbg="{{ asset('users/assets/img/banner/banner-1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8 m-auto">
                    <div class="banner__slider owl-carousel">
                        <div class="banner__item">
                            <div class="banner__text">
                                <span>The Chloe Collection</span>
                                <h1>The Project Jacket</h1>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                        <div class="banner__item">
                            <div class="banner__text">
                                <span>The Chloe Collection</span>
                                <h1>The Project Jacket</h1>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                        <div class="banner__item">
                            <div class="banner__text">
                                <span>The Chloe Collection</span>
                                <h1>The Project Jacket</h1>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Product Section Begin -->
    {{-- <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="section-title">
                        <h4>On discont product</h4>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".women">Women’s</li>
                        <li data-filter=".men">Men’s</li>
                        <li data-filter=".kid">Kid’s</li>
                        <li data-filter=".accessories">Accessories</li>
                        <li data-filter=".cosmetic">Cosmetics</li>
                    </ul>
                </div>
            </div>
            <div class="row property__gallery">
                <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                    <div class="product__item">
                        <div class="product__item__pic set-bg"
                            data-setbg="{{ asset('users/assets/img/product/product-1.jpg') }}">
                            <div class="label new">New</div>
                            <ul class="product__hover">
                                <li><a href="{{ asset('users/assets/img/product/product-1.jpg') }}"
                                        class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Buttons tweed blazer</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">$ 59.0</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix men">
                    <div class="product__item">
                        <div class="product__item__pic set-bg"
                            data-setbg="{{ asset('users/assets/img/product/product-2.jpg') }}">
                            <ul class="product__hover">
                                <li><a href="{{ asset('users/assets/img/product/product-2.jpg') }}"
                                        class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Flowy striped skirt</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">$ 49.0</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix accessories">
                    <div class="product__item">
                        <div class="product__item__pic set-bg"
                            data-setbg="{{ asset('users/assets/img/product/product-3.jpg') }}">
                            <div class="label stockout">out of stock</div>
                            <ul class="product__hover">
                                <li><a href="{{ asset('users/assets/img/product/product-3.jpg') }}"
                                        class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Cotton T-Shirt</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">$ 59.0</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix cosmetic">
                    <div class="product__item">
                        <div class="product__item__pic set-bg"
                            data-setbg="{{ asset('users/assets/img/product/product-4.jpg') }}">
                            <ul class="product__hover">
                                <li><a href="{{ asset('users/assets/img/product/product-4.jpg') }}"
                                        class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Slim striped pocket shirt</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">$ 59.0</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix kid">
                    <div class="product__item">
                        <div class="product__item__pic set-bg"
                            data-setbg="{{ asset('users/assets/img/product/product-5.jpg') }}">
                            <ul class="product__hover">
                                <li><a href="{{ asset('users/assets/img/product/product-5.jpg') }}"
                                        class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Fit micro corduroy shirt</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">$ 59.0</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg"
                            data-setbg="{{ asset('users/assets/img/product/product-6.jpg') }}">
                            <div class="label sale">Sale</div>
                            <ul class="product__hover">
                                <li><a href="{{ asset('users/assets/img/product/product-6.jpg') }}"
                                        class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Tropical Kimono</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">$ 49.0 <span>$ 59.0</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic">
                    <div class="product__item">
                        <div class="product__item__pic set-bg"
                            data-setbg="{{ asset('users/assets/img/product/product-7.jpg') }}">
                            <ul class="product__hover">
                                <li><a href="{{ asset('users/assets/img/product/product-7.jpg') }}"
                                        class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Contrasting sunglasses</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">$ 59.0</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg"
                            data-setbg="{{ asset('users/assets/img/product/product-8.jpg') }}">
                            <div class="label">Sale</div>
                            <ul class="product__hover">
                                <li><a href="{{ asset('users/assets/img/product/product-8.jpg') }}"
                                        class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Water resistant backpack</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">$ 49.0 <span>$ 59.0</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Product Section End -->
@endsection
