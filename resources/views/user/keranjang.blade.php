@extends('user.layouts.users')

@section('content')
    {{-- Male --}}
    <!-- Breadcrumb Section Begin -->
    {{-- <section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Shopping Cart</h4>
                    <div class="breadcrumb__links">
                        <a href="/">Home</a>
                        <a href="/produk">Produk</a>
                        <span>Keranjang</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    {{-- <section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shopping__cart__table shadow p-4 bg-white rounded">
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Product</th>
                                <th>ukuran</th>
                                <th>jumlah</th>
                                <th>Harga</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($keranjangs))
                            <form id="transaksi" method="GET" action="{{ route('checkout.index') }}">
                                @foreach ($keranjangs as $keranjang)
                                <tr>
                                    <td class="p-2">
                                        <input type="checkbox" data-harga="{{ $keranjang->total_harga }}"
                                            name="keranjang_id[]" value="{{ $keranjang->id }}" required>
                                    </td>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img src="{{ asset($keranjang->produk->image[0]->gambar_produk) }}" alt="">
                                        </div>
                                        <div class="product__cart__item__text">
                                            @if ($keranjang->produk->diskon > 0)
                                            <h6> <a href="/produk/{{ $keranjang->produk_id }}">{{
                                                    $keranjang->produk->nama_produk }}
                                                    / {{ $keranjang->produk->diskon }}%</a>
                                            </h6>
                                            @else
                                            <h6> <a href="/produk/{{ $keranjang->produk_id }}">{{
                                                    $keranjang->produk->nama_produk }}</a>
                                            </h6>
                                            @endif
                                            <h5> Rp. {{ number_format($keranjang->produk->harga, 0, ',', '.') }}
                                            </h5>
                                        </div>
                                    </td>
                                    <td class="cart__price">{{ $keranjang->ukuran }}</td>
                                    <td class="cart__price">
                                        {{ number_format($keranjang->jumlah, 0, ',', '.') }}
                                    </td>
                                    <td class="cart__price">Rp.
                                        {{ number_format($keranjang->total_harga, 0, ',', '.') }}</td>
                                    <td class="cart__close">
                                        <a href="/keranjang/{{ $keranjang->id }}/delete">
                                            <i class="fa fa-close"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </form>
                            @else
                            <tr>
                                <td colspan="5" class="text-center">
                                    <div class="alert alert-dark" role="alert">
                                        Keranjang Kosong
                                    </div>
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 ">
                        <div class="continue__btn">
                            <a href="/produk">Continue Shopping</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn update__btn">
                            <form id="deleteAll" action="/deleteAllKeranjang">
                                @csrf
                                <a onclick="event.preventDefault();
                                                    document.getElementById('deleteAll').submit();">
                                    Delete All Keranjang
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart__total shadow p-4 bg-white rounded">
                    <h6>Cart total</h6>
                    <ul>
                        <li>jumlah <span id="jumlah">0</span></li>
                        <li>Total(Rp)<span id="total">0</span></li>
                    </ul>
                    <div class="continue__btn update__btn">
                        <a onclick="event.preventDefault();
                                                        document.getElementById('transaksi').submit();">
                            Proceed to checkout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
    <!-- Shopping Cart Section End -->

    {{-- EndMale --}}

    <div class="container">
        <form id="transaksi" method="GET" action="{{ route('checkout.index') }}">
            <input type="hidden" name="voucher_id" id="voucher_id">
            <div class="row">
                <div class="col-lg-8">
                    <table class="table cart mb-5">
                        <thead>
                            <tr>
                                <th class="cart-product-check">
                                    <input id="allCheck" class="checkbox-style" name="allCheck" type="checkbox">
                                    <label for="allCheck" class="checkbox-style-3-label checkbox-small"></label>
                                </th>
                                <th class=" cart-product-thumbnail">Product</th>
                                <th class="cart-product-price">Ukuran</th>
                                <th class="cart-product-quantity">Jumlah</th>
                                <th class="cart-product-subtotal">Total</th>
                                <th class="cart-product-remove">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($keranjangs))
                                @foreach ($keranjangs as $keranjang)
                                    <tr class="cart_item">
                                        <td class="cart-product-check">
                                            <input id="{{ $keranjang->id }}" class="checkbox-style check"
                                                data-harga="{{ $keranjang->total_harga }}" name="keranjang_id[]"
                                                value="{{ $keranjang->id }}" type="checkbox">
                                            <label for="{{ $keranjang->id }}"
                                                class="checkbox-style-3-label checkbox-small"></label>
                                        </td>

                                        <td class="cart-product-thumbnail">
                                            <div class="row">
                                                <div class="col-4">
                                                    <a href="#"><img width="64" height="64"
                                                            src="{{ asset($keranjang->produk->image[0]->gambar_produk) }}"
                                                            alt="{{ $keranjang->produk->nama_produk }}"></a>
                                                </div>
                                                <div class="col mt-2 ">
                                                    <div class="cart-product-name">{{ $keranjang->produk->nama_produk }}
                                                    </div>
                                                    @php
                                                        $diskon = ($keranjang->produk->diskon / 100) * $keranjang->produk->harga;
                                                        $harga = $keranjang->produk->harga - $diskon;
                                                    @endphp
                                                    <h5>Rp. {{ number_format($harga, 0, ',', '.') }}</h5>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="cart-product-subtotal">
                                            {{ $keranjang->ukuran }}
                                        </td>

                                        <td class="cart-product-quantity">
                                            <div class="quantity">
                                                <input type="button" value="-" class="minus">
                                                <input type="button" name="jumlah" readonly
                                                    value="{{ $keranjang->jumlah }}" min="1" class="qty" />
                                                <input type="button" value="+" class="plus">
                                            </div>
                                        </td>

                                        <td class="cart-product-subtotal">
                                            Rp. {{ number_format($keranjang->total_harga, 0, ',', '.') }}
                                        </td>

                                        <td class="cart-product-remove">
                                            <a href="/keranjang/{{ $keranjang->id }}/delete" class="remove"
                                                title="Haous produk ini"><i class="icon-line-delete icon-lg"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" class="text-center">
                                        <div class="my-3">
                                            <img src="{{ asset('images/no_review.png') }}" width="80px" alt=""
                                                srcset="">
                                            <div class="fw-bold p-4">keranjang kosong</div>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                            <tr class="cart_item">
                                <td colspan="6">
                                    <form id="deleteAll" action="/deleteAllKeranjang">
                                        <a href="/produk" class="button button-3d button-black m-0 m-0 mx-2">Lanjut
                                            Belanja</a>
                                        @if (count($keranjangs))
                                            <a id="btnDeleteAll"
                                                class="button button-3d button-black m-0 mt-2 mt-sm-0 me-0">Hapus
                                                all
                                                keranjang</a>
                                        @else
                                            <a id="keranjang"
                                                class="button button-3d button-black m-0 mt-2 mt-sm-0 me-0">Hapus
                                                all
                                                keranjang</a>
                                        @endif
                                    </form>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </div>
                <div class="col-lg-4">
                    <h4>Cart Totals</h4>

                    <div class="col-lg-auto ps-lg-0 mb-3">
                        <div class="row">
                            <div class="col-md-8 m-0">
                                <input id="kode_voucher" class="sm-form-control text-center text-md-start" readonly
                                    placeholder="Enter Coupon Code.." />
                            </div>
                            <div class="col-md-4 mt-3 mt-md-0">
                                <a data-bs-toggle="modal" data-bs-target="#voucher"
                                    class="button button-3d button-black m-0">Apply Coupon</a>

                                <!-- Scrollable modal -->
                                <div class="modal fade bs-example-modal-scrollable" id="voucher" tabindex="-1"
                                    role="dialog" aria-labelledby="scrollableModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Voucher Saya</h4>
                                                <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal"
                                                    aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                @if (count($voucher_users))
                                                    @foreach ($voucher_users as $voucher_user)
                                                        <div class="card mb-2">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <img src="{{ asset('images/no_voucher.png') }}"
                                                                        width="300px" alt="" srcset="">
                                                                </div>
                                                                <div class="col-lg-6 mt-2">
                                                                    <div class="fw-bold fs-6">
                                                                        {{ $voucher_user->voucher->kode_voucher }}</div>
                                                                    <div class="p-0">diskon :
                                                                        {{ $voucher_user->voucher->diskon }}%
                                                                    </div>
                                                                    <div class="p-0">
                                                                        {{ $voucher_user->voucher->waktu_mulai }} -
                                                                        {{ $voucher_user->voucher->waktu_berakhir }}</div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <button type="button"
                                                                        class="mt-4 button button-circle button-black m-0 select select"
                                                                        data-id="{{ $voucher_user }}">Pakai</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <div class="text-center">
                                                        <img src="{{ asset('images/no_review.png') }}" width="80px"
                                                            alt="" srcset="">
                                                        <div class="fw-bold p-4">Keranjang kosong</div>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">kembali</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table cart cart-totals">
                            <tbody>
                                <tr class="cart_item">
                                    <td class="cart-product-name">
                                        <strong>Jumlah</strong>
                                    </td>

                                    <td class="cart-product-name">
                                        <span id="jumlah" style="margin-left:190px">0</span>
                                    </td>
                                </tr>
                                <tr class="cart_item">
                                    <td class="cart-product-name">
                                        <strong>Total</strong>
                                    </td>

                                    <td class="cart-product-name">
                                        <div style="margin-left:180px">Rp. <span id="total">0</span> </div>
                                        <input type="hidden" id="total_harga" value="0">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-auto pe-lg-0 mt-3 float-end" style="margin-right: -50px">
                        <a onclick="event.preventDefault(); document.getElementById('transaksi').submit();"
                            class="button button-3d mt-2 mt-sm-0 me-0">Proceed to Checkout</a>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <script>
        //     let selects = document.querySelectorAll('#select');
        //     // select voucher
        //     for (const select of selects) {
        //     select.addEventListener("click", function(event){
        //     var kode_voucher = $(this).data(kode_voucher);
        //     // console.log(kode_voucher);
        //     var kode_id = document.getElementById('id_voucher');
        //     kode_id.value = kode_voucher.id.id;
        //     var value_kode = document.getElementById('kode_voucher');
        //     value_kode.value = kode_voucher.id.voucher.kode_voucher;
        //     // console.log(value_kode.value);

        //     let modal = document.getElementById('exampleModalCenter');
        //     // document.getElementById('close').click();
        //     $("#exampleModalCenter").modal("hide");
        //     });
        // }

        $(document).ready(function() {
            $('#allCheck').click(function() {
                $('.check').prop("checked", $(this).prop('checked'))
                var jumlah = 0;
                var total_harga = 0;
                $('.check').each(function() {
                    if ($(this).prop("checked") == true) {
                        jumlah++;
                        var keranjang = $(this).data('harga');
                        total_harga += parseInt(keranjang);
                    }
                });
                $('#jumlah').html(jumlah);
                $('#total').html(total_harga.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.'));
            });

            $('.check').click(function() {
                var jumlah = 0;
                var total_harga = 0;
                $('.check').each(function() {
                    if ($(this).prop("checked") == true) {
                        jumlah++;
                        var keranjang = $(this).data('harga');
                        total_harga += parseInt(keranjang);
                    }
                });
                $('#jumlah').html(jumlah);
                $('#total_harga').val(total_harga);
                $('#total').html(total_harga.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.'));
            });
        });

        $('.select').click(function() {
            var kode_voucher = $(this).data(kode_voucher);
            $('#kode_voucher').val(kode_voucher.id.voucher.kode_voucher);
            $('#voucher_id').val(kode_voucher.id.id);
            var total = $('#total_harga').val();
            var diskon = total * (kode_voucher.id.voucher.diskon / 100);
            var total_harga = total - diskon;
            $('#total').html(total_harga.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.'));
            // CloseModal
            $("#voucher").modal("hide");
        });
    </script>
@endsection
