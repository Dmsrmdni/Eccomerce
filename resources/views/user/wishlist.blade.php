@extends('user.layouts.users')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>My Wishlist</h4>
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

    <section class="shopping-wishlist spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="shopping__wishlist__table shadow p-4 bg-white rounded">
                        <table class="">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Harga</th>
                                    <th>Diskon</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($wishlists))
                                    @foreach ($wishlists as $wishlist)
                                        <tr>
                                            <td class="product__wishlist__item">
                                                <div class="product__wishlist__item__pic">
                                                    <img src="{{ asset($wishlist->produk->image[0]->gambar_produk) }}"
                                                        class="rounded" alt="">
                                                </div>
                                                <div class="product__wishlist__item__text">
                                                    <h6><a
                                                            href="/produk/{{ $wishlist->produk_id }}">{{ $wishlist->produk->nama_produk }}</a>
                                                    </h6>
                                                </div>
                                            </td>
                                            <td class="cart__price">
                                                Rp. {{ number_format($wishlist->produk->harga, 0, ',', '.') }}</td>
                                            <td class="cart__diskon">{{ $wishlist->produk->diskon }}%</td>
                                            <td class="cart__close">
                                                <form id="delete{{ $wishlist->id }}"
                                                    action="{{ route('wishlist.destroy', $wishlist->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <a
                                                        onclick="event.preventDefault();
                                                    document.getElementById('delete{{ $wishlist->id }}').submit();">
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            <div class="alert alert-dark" role="alert">
                                                Wishlist Kosong
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="/produk">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <form id="deleteAll" action="/deleteAllWishlist">
                                    @csrf
                                    <a
                                        onclick="event.preventDefault();
                                                    document.getElementById('deleteAll').submit();">
                                        Delete All Wishlist
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <img class="shadow rounded-lg p-0" src="{{ asset('images/logo.png') }}" alt="...">
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
@endsection
