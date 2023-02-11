@extends('user.layouts.users')

@section('content')
    <!-- Shop Details Section Begin -->
    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="product__details__breadcrumb">
                            <a href="/">Home</a>
                            <a href="/produk">produk</a>
                            <span>Detail Produk</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <ul class="nav nav-tabs" style="max-height:400px; width:140px; overflow:auto" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs{{ $images[0]->id }}"
                                    role="tab">
                                    <div class="product__thumb__pic set-bg"
                                        data-setbg="{{ asset($images[0]->gambar_produk) }}">
                                    </div>
                                </a>
                            </li>
                            @foreach ($images->skip(1) as $image)
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs{{ $image->id }}" role="tab">
                                        <div class="product__thumb__pic set-bg"
                                            data-setbg="{{ asset($image->gambar_produk) }}">
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs{{ $images[0]->id }}" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="{{ asset($images[0]->gambar_produk) }}" alt="">
                                </div>
                            </div>
                            @foreach ($images->skip(1) as $image)
                                <div class="tab-pane" id="tabs{{ $image->id }}" role="tabpanel">
                                    <div class="product__details__pic__item">
                                        <img src="{{ asset($image->gambar_produk) }}" alt="">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product__details__content">
                            <div class="container-fluid">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-10 card w-100 p-5 rounded shadow">
                                        <div class="product__details__text">
                                            <h4>{{ $produks->nama_produk }}</h4>
                                            @if ($produks->diskon > 0)
                                                @php
                                                    $diskon = ($produks->diskon / 100) * $produks->harga;
                                                    $harga = $produks->harga - $diskon;
                                                @endphp
                                                <h3>Rp.{{ number_format($harga, 0, ',', '.') }}<span>{{ number_format($produks->harga, 0, ',', '.') }}</span>
                                                </h3>
                                            @else
                                                <h3>Rp.{{ number_format($produks->harga, 0, ',', '.') }}</h3>
                                            @endif
                                            <p style="text-align: justify; max-height:400px; overflow:auto">
                                                {{ $produks->deskripsi }}</p>
                                            <form id="tambahKeranjang" action="{{ route('keranjang.store') }}"
                                                method="POST">
                                                @csrf
                                                <input type="hidden" name="produk_id" value="{{ $produks->id }}">
                                                <div class="product__details__option">
                                                    <div class="product__details__option__size">
                                                        <span>Size:</span>
                                                        <label for="xl">xl
                                                            <input type="radio" name="ukuran" value="xl">
                                                        </label>
                                                        <label for="l">l
                                                            <input type="radio" name="ukuran" value="l">
                                                        </label>
                                                        <label for="m">M
                                                            <input type="radio" name="ukuran" value="m">
                                                        </label>
                                                        <label for="sm">s
                                                            <input type="radio" name="ukuran" value="s">
                                                        </label>
                                                    </div>
                                                </div>
                                                {{-- <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="ukuran"
                                                        id="exampleRadios1" value="x" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Default radio
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="ukuran"
                                                        id="exampleRadios2" value="xl">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Second default radio
                                                    </label>
                                                </div> --}}
                                                <div class="product__details__cart__option">
                                                    <div class="quantity">
                                                        <div class="pro-qty">
                                                            <input type="number" name="jumlah" min="1"
                                                                max="{{ $produks->stok }}" value="1">
                                                        </div>
                                                    </div>
                                                    <div class="primary-btn">
                                                        <a
                                                            onclick="event.preventDefault();
                                                        document.getElementById('tambahKeranjang').submit();">
                                                            add to cart
                                                        </a>
                                                    </div>
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
        </div>
        @if (count($review_produks))
            <div class="row">
                <div class="container-fluid">
                    <h3 class="related-title">Ulasan</h3>
                    @foreach ($review_produks as $review_produk)
                        <div class="col-lg-9 p-0">
                            <div class="testimonial__text">
                                <div class="testimonial__author">
                                    <div class="testimonial__author__pic">
                                        <img src="{{ asset($review_produk->user->profile) }}" alt="">
                                    </div>
                                    <div class="testimonial__author__text">
                                        <h5>{{ $review_produk->user->name }}</h5>
                                        <p class="text-break">{{ $review_produk->komen }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="text-center">
                        <a href="/ulasan/{{ $produks->id }}" class="primary-btn">Semua Ulasan</a>
                    </div>
                </div>
            </div>
        @endif
    </section>
    <!-- Shop Details Section End -->

    <!-- Related Section Begin -->
    <section class="related spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-title">Produk Lainnya</h3>
                </div>
            </div>
            <div class="row">
                @foreach ($produk_lainnya as $produk)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                        <div class="product__item sale">
                            <div class="product__item__pic set-bg"
                                data-setbg="{{ asset($produk->image[0]->gambar_produk) }}">
                                @if ($produk->diskon > 0)
                                    <span class="label">{{ $produk->diskon }}%</span>
                                @endif
                                <ul class="product__hover">
                                    <li><a href="#"><img src="{{ asset('assets2/img/icon/heart.png') }}"
                                                alt=""></a></li>
                                    <li><a href="/produk/{{ $produk->id }}"><img
                                                src="{{ asset('assets2/img/icon/search.png') }}" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>Piqué Biker Jacket</h6>
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
        </div>
    </section>
    <!-- Related Section End -->
@endsection
