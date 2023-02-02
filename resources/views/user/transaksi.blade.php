@extends('user.layouts.user')

@section('content')
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
                                <label class="form-label">Voucher</label>
                                <select name="voucher_id" class="form-select @error('voucher_id') is-invalid @enderror">
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
                                    class="form-select @error('metodePembayaran_id') is-invalid @enderror">
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
    <!-- Checkout Section End -->
@endsection
