@extends('user.layouts.users')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shopping Cart</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <a href="./shop.html">Shop</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
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
                                    <form id="transaksi" action="{{ route('checkout.index') }}">
                                        @foreach ($keranjangs as $keranjang)
                                            @csrf
                                            <tr>
                                                <td>
                                                    <input type="checkbox" name="keranjang_id[]"
                                                        value="{{ $keranjang->id }}">
                                                </td>
                                                <td class="product__cart__item">
                                                    <div class="product__cart__item__pic">
                                                        <img src="{{ asset($keranjang->produk->image[0]->gambar_produk) }}"
                                                            alt="">
                                                    </div>
                                                    <div class="product__cart__item__text">
                                                        @if ($keranjang->produk->diskon > 0)
                                                            <h6> <a href="/produk/{{ $keranjang->produk_id }}">{{ $keranjang->produk->nama_produk }}
                                                                    / {{ $keranjang->produk->diskon }}%</a>
                                                            </h6>
                                                        @else
                                                            <h6> <a
                                                                    href="/produk/{{ $keranjang->produk_id }}">{{ $keranjang->produk->nama_produk }}</a>
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
                                                    <form id="delete{{ $keranjang->id }}"
                                                        action="{{ route('keranjang.destroy', $keranjang->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <a
                                                            onclick="event.preventDefault();
                                                    document.getElementById('delete{{ $keranjang->id }}').submit();">
                                                            <i class="fa fa-close"></i>
                                                        </a>
                                                    </form>
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
                                    <a
                                        onclick="event.preventDefault();
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
                            <li>jumlah <span>0</span></li>
                            <li>Total <span id="total">0</span></li>
                        </ul>
                        <a class="primary-btn"
                            onclick="event.preventDefault();
                                                    document.getElementById('transaksi').submit();">
                            Proceed to checkout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        function tugas2() {
            var jumlah = 0;
            var harga;

            // if (document.getElementById("menu1").checked) {
            //     harga = document.getElementById("menu1").value;
            //     jumlah = jumlah + parseInt(harga);
            // }
            document.getElementById("total").value = 1;
        }
    </script>
    <!-- Shopping Cart Section End -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{-- <script>
        $(document).ready(function() {
            $('#check').prop('checked', function() {
                var keranjang_id = $(this).val();
                $('#total').append(5);
            });
        });
    </script> --}}

    <script>
        $(document).ready(function() {
            $('input[type="checkbox"]').click(function() {
                var jumlah = 0;
                var keranjang_id = $(this).val();
                if ($(this).prop("checked") == true) {
                    total = jumlah + parseInt(1);
                    $('#total').append(total);
                } else if ($(this).prop("checked") == false) {
                    jumlah = jumlah - 1;
                    $('#total').append(jumlah);
                }
            });
        });
    </script>
@endsection
