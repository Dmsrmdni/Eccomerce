@extends('user.layouts.user')

@section('content')
    <!-- Shop Cart Section Begin -->
    <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Diskon</th>
                                    <th>Ukuran</th>
                                    <th>Jumlah</th>
                                    <th>Total Harga</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($keranjangs as $keranjang)
                                    <tr>
                                        <td><input type="checkbox" name="keranjang_id" value="{{ $keranjang->id }}"></td>
                                        <td class="cart__product__item">
                                            <img src="{{ asset($keranjang->produk->image[0]->gambar_produk) }}"
                                                class="w-25" alt="">
                                            <div class="cart__product__item__title my-5">
                                                <h6>{{ $keranjang->produk->nama_produk }}</h6>
                                            </div>
                                        </td>
                                        <td class="cart__price">Rp. {{ number_format($keranjang->produk->harga) }}</td>
                                        <td>{{ $keranjang->produk->diskon }}%</td>
                                        <td>{{ $keranjang->ukuran }}</td>
                                        <td>{{ $keranjang->jumlah }}</td>
                                        <td>Rp. {{ number_format($keranjang->total_harga) }}</td>
                                        {{-- <td>
                                            <form action="{{ route('keranjang.destroy', $keranjang->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#modalCenter{{ $keranjang->id }}"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn">
                        <a href="#">Continue Shopping</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn update__btn">
                        <a href="#"><span class="icon_loading"></span> Update cart</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="cart__total__procced">
                    <h6>Cart total</h6>
                    <ul>
                        <li>Total <span>$ 750.0</span></li>
                    </ul>
                    {{-- <button type="submit" class="btn-danger float-end">checkout</button> --}}
                    <a href="/checkout" class="primary-btn">checkout</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Cart Section End -->
@endsection
