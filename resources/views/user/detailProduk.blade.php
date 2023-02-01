@extends('user.layouts.user')

@section('content')
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__left product__thumb nice-scroll">
                            <a class="pt active" href="#{{ $images[0]->id }}">
                                <img src="{{ asset($images[0]->gambar_produk) }}" alt="">
                            </a>
                            @foreach ($images->skip(1) as $image)
                                <a class="pt" href="#{{ $image->id }}">
                                    <img src="{{ asset($image->gambar_produk) }}" alt="">
                                </a>
                            @endforeach
                        </div>
                        <div class="product__details__slider__content">
                            <div class="product__details__pic__slider owl-carousel">
                                <img data-hash="{{ $images[0]->id }}" class="product__big__img"
                                    src="{{ asset($images[0]->gambar_produk) }}" alt="">
                                @foreach ($images->skip(1) as $image)
                                    <img data-hash="{{ $image->id }}" class="product__big__img"
                                        src="{{ asset($image->gambar_produk) }}" alt="">
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <h3>{{ $produks->nama_produk }}</h3>
                        @if ($produks->diskon > 0)
                            @php
                                $diskon = ($produks->diskon / 100) * $produks->harga;
                                $harga = $produks->harga - $diskon;
                            @endphp
                            <div class="product__details__price">Rp.
                                {{ number_format($harga, 0, ',', '.') }}<span>{{ number_format($produks->harga, 0, ',', '.') }}</span>
                            </div>
                        @else
                            <div class="product__details__price">{{ number_format($produks->harga, 0, ',', '.') }}
                            </div>
                        @endif
                        <p>{{ $produks->deskripsi }}</p>
                        <form action="">
                            <div class="product__details__button">
                                <div class="mb-3">
                                    <label class="form-label">Ukuran Produk</label>
                                    <select name="ukuran" class="form-select @error('ukuran') is-invalid @enderror">
                                        <option value="" hidden>Pilih Size</option>
                                        <option value="S">S</option>
                                        <option value="L">L</option>
                                        <option value="X">X</option>
                                        <option value="XL">XL</option>
                                    </select>
                                    @error('ukuran')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">jumlah Produk</label>
                                    <input type="number" name="jumlah"
                                        class="form-control mb-2  @error('jumlah') is-invalid @enderror"
                                        placeholder="jumlah" value="1">
                                    @error('jumlah')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <a href="#" class="cart-btn"><span class="icon_bag_alt"></span> Add to cart</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12 col-md-8 my-5">
                    <div class="blog__details__comment">
                        <h5>3 Komen</h5>
                        <a href="#" class="leave-btn">Lihat Semua Komen</a>
                        <div class="blog__comment__item">
                            <div class="blog__comment__item__pic">
                                <img src="{{ asset('users/assets/img/blog/details/comment-1.jpg') }}" alt="">
                            </div>
                            <div class="blog__comment__item__text">
                                <h6>Brandon Kelley</h6>
                                <p>Duis voluptatum. Id vis consequat consetetur dissentiet, ceteros commune perpetua
                                    mei et. Simul viderer facilisis egimus tractatos splendi.</p>
                            </div>
                        </div>
                        <div class="blog__comment__item">
                            <div class="blog__comment__item__pic">
                                <img src="{{ asset('users/assets/img/blog/details/comment-3.jpg') }}" alt="">
                            </div>
                            <div class="blog__comment__item__text">
                                <h6>Brandon Kelley</h6>
                                <p>Duis voluptatum. Id vis consequat consetetur dissentiet, ceteros commune perpetua
                                    mei et. Simul viderer facilisis egimus tractatos splendi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="related__title">
                        <h5>PRODUK LAINNYA</h5>
                    </div>
                </div>
                <div class="row property__gallery">
                    @if (count($produk_lainnya))
                        @foreach ($produk_lainnya as $produk)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg"
                                        data-setbg="{{ asset($produk->image[0]->gambar_produk) }}">
                                        <div class="label sale float-end">-{{ $produk->diskon }}%</div>
                                        <ul class="product__hover">
                                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                            <li><a href="#"><span class="arrow_expand"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6 class="mb-2"><a href="#">{{ $produk->nama_produk }}</a>
                                        </h6>
                                        @php
                                            $diskon = ($produk->diskon / 100) * $produk->harga;
                                            $harga = $produk->harga - $diskon;
                                        @endphp
                                        <div class="product__price">Rp.
                                            {{ number_format($harga, 0, ',', '.') }}<span>
                                                {{ number_format($produk->harga, 0, ',', '.') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
    </section>
@endsection
