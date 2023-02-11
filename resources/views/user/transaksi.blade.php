@extends('user.layouts.users')

@section('content')
{{--
<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <form action="{{ route('checkout.store') }}" class="checkout__form" method="POST">
            @csrf
            <div class="row mx-auto">
                <div class="col-lg-12">
                    <div class="checkout__order">
                        <h5>Your order</h5>
                        <div class="checkout__order__product">
                            <ul>
                                <li>
                                    <span class="top__text">Product</span>
                                    <span class="top__text__right">Total</span>
                                </li>
                                @foreach ($keranjangs as $keranjang)
                                <li>{{ $keranjang->produk->nama_produk }} x {{ $keranjang->jumlah }}
                                    / {{ $keranjang->ukuran }} <span>Rp.
                                        {{ number_format($keranjang->total_harga) }}</span></li>
                                <input type="hidden" name="keranjang_id[]" value="{{ $keranjang->id }}">
                                @endforeach
                            </ul>
                        </div>
                        <div class="checkout__order__total">
                            <ul>
                                <li>Total <span>Rp. {{ number_format($total_harga) }} </span></li>
                            </ul>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">alamats</label>
                            <select name="alamat_id" class="form-control @error('alamat_id') is-invalid @enderror">
                                @foreach ($alamats as $alamat)
                                <option value="" hidden>Pilih Alamat</option>
                                <option value="{{ $alamat->id }}">{{ $alamat->nama_lengkap }}
                                </option>
                                @endforeach
                            </select>
                            @error('alamat_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Voucher</label>
                            <select name="voucher_id" class="form-control @error('voucher_id') is-invalid @enderror">
                                <option value="" selected hidden>Pilih Voucher</option>
                                @foreach ($vouchers as $voucher)
                                <option value="{{ $voucher->id }}">{{ $voucher->kode_voucher }}
                                </option>
                                @endforeach
                                @if (count($voucherUsers))
                                @foreach ($voucherUsers as $voucherUser)
                                <option value="{{ $voucherUser->voucher->id }}">
                                    {{ $voucherUser->voucher->kode_voucher }}
                                </option>
                                @endforeach
                                @endif
                            </select>
                            @error('voucher_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Metode Pembayaran</label>
                            <select name="metodePembayaran_id"
                                class="form-control @error('metodePembayaran_id') is-invalid @enderror">
                                @foreach ($metodePembayarans as $metodePembayaran)
                                <option value="" hidden>Pilih Metode Pembayaran</option>
                                <option value="{{ $metodePembayaran->id }}">
                                    {{ $metodePembayaran->metodePembayaran }}
                                </option>
                                @endforeach
                            </select>
                            @error('metodePembayaran_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="site-btn">Place oder</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Checkout Section End --> --}}


<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Check Out</h4>
                    <div class="breadcrumb__links">
                        <a href="./index.html">Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Check Out</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <form action="{{ route('checkout.store') }}" method="POST">
                @csrf
                <div class="row">
                    {{-- <div class="col-lg-8 col-md-6">
                        <h6 class="checkout__title">Billing Details</h6>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Fist Name<span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Last Name<span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Country<span>*</span></p>
                            <input type="text">
                        </div>
                        <div class="checkout__input">
                            <p>Address<span>*</span></p>
                            <input type="text" placeholder="Street Address" class="checkout__input__add">
                            <input type="text" placeholder="Apartment, suite, unite ect (optinal)">
                        </div>
                        <div class="checkout__input">
                            <p>Town/City<span>*</span></p>
                            <input type="text">
                        </div>
                        <div class="checkout__input">
                            <p>Country/State<span>*</span></p>
                            <input type="text">
                        </div>
                        <div class="checkout__input">
                            <p>Postcode / ZIP<span>*</span></p>
                            <input type="text">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Phone<span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-12 col-md-6">
                        <div class="checkout__order">
                            <h4 class="order__title">Your order</h4>
                            <div class="checkout__order__products">Product <span>Total</span></div>
                            <ul class="checkout__total__products">
                                @foreach ($keranjangs as $keranjang)
                                <li>{{ $keranjang->produk->nama_produk }}
                                    ({{ $keranjang->ukuran }})
                                    / {{ $keranjang->jumlah }}<span>Rp.
                                        {{ number_format($keranjang->total_harga, 0, ',', '.') }} </span>
                                </li>
                                <input type="hidden" name="keranjang_id[]" value="{{ $keranjang->id }}">
                                @endforeach
                            </ul>
                            <ul class="checkout__total__all">
                                <li>Total <span>Rp.
                                        {{ number_format($total_harga, 0, ',', '.') }}</span></li>
                            </ul>
                            <div class="mb-3">
                                <select name="alamat_id" class="form-select @error('alamat_id') is-invalid @enderror">
                                    @foreach ($alamats as $alamat)
                                    <option value="" hidden>Pilih Alamat</option>
                                    <option value="{{ $alamat->id }}">{{ $alamat->nama_lengkap }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('alamat_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <select name="voucher_id"
                                    class="form-control @error('voucher_id') is-invalid @enderror">
                                    <option value="" selected hidden>Pilih Voucher</option>
                                    @foreach ($vouchers as $voucher)
                                    <option value="{{ $voucher->id }}">{{ $voucher->kode_voucher }}
                                    </option>
                                    @endforeach
                                    @if (count($voucherUsers))
                                    @foreach ($voucherUsers as $voucherUser)
                                    <option value="{{ $voucherUser->voucher->id }}">
                                        {{ $voucherUser->voucher->kode_voucher }}
                                    </option>
                                    @endforeach
                                    @endif
                                </select>
                                @error('voucher_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <select name="metodePembayaran_id"
                                    class="form-control @error('metodePembayaran_id') is-invalid @enderror">
                                    <option value="" hidden>Pilih Metode Pembayaran</option>
                                    @foreach ($metodePembayarans as $metodePembayaran)
                                    <option value="{{ $metodePembayaran->id }}">
                                        {{ $metodePembayaran->metodePembayaran }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('metodePembayaran_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <button type="submit" class="site-btn">PLACE ORDER</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->

@endsection