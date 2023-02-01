@extends('user.layouts.user')

@section('content')
    <section class="my-3">
        <div class="container-fluid">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://th.bing.com/th/id/R.7bc591414923dbf9442552ea28db1bc7?rik=fYDkNGqV%2bKeMjQ&riu=http%3a%2f%2fwww.sariska.co.uk%2fimages%2fmodules%2fpromo_units%2f1437644437-32326800.jpg&ehk=gAXR0%2bVxcNQVoBl0c7pJ99uzctWB7QkbE5ATcnd2ADw%3d&risl=&pid=ImgRaw&r=0"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://cdn.shopify.com/s/files/1/0384/2861/t/3/assets/slideshow_2.jpg?v=13206176803647885722"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://th.bing.com/th/id/R.7bc591414923dbf9442552ea28db1bc7?rik=fYDkNGqV%2bKeMjQ&riu=http%3a%2f%2fwww.sariska.co.uk%2fimages%2fmodules%2fpromo_units%2f1437644437-32326800.jpg&ehk=gAXR0%2bVxcNQVoBl0c7pJ99uzctWB7QkbE5ATcnd2ADw%3d&risl=&pid=ImgRaw&r=0"
                            class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section>
        <div class="row m-3">
            @foreach ($kategoris as $kategori)
                <div class="col-lg-4 col-md-4 col-sm-6 p-0">
                    <div class="categories__item set-bg"
                        data-setbg="{{ asset('users/assets/img/categories/category-3.jpg') }}">
                        <div class="categories__text">
                            <h4>{{ $kategori->name }} fashion</h4>
                            <a href="/kategori/{{ $kategori->id }}">Shop now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- NewProduct Section Begin -->
    @if (count($produks))
        <section class="product spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="section-title">
                            <h4>All Produk</h4>
                        </div>
                    </div>
                </div>
                <div class="row property__gallery">
                    @foreach ($produks as $produk)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"
                                    data-setbg="{{ asset($produk->image[0]->gambar_produk) }}">
                                    @if ($produk->diskon > 0)
                                        <div class="label sale float-end">-{{ $produk->diskon }}%</div>
                                    @endif
                                    <ul class="product__hover">
                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                        <li><a href="/produk/{{ $produk->id }}"><span class="arrow_expand"></span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6 class="mb-2"><a href="#">{{ $produk->nama_produk }}</a></h6>
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
                </div>
            </div>
        </section>
    @endif
    <!-- NewProduct Section End -->
@endsection
