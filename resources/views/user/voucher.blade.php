@extends('user.layouts.users')

@section('content')
    {{-- Male --}}
    {{-- <section class="spad">
    @if (count($vouchers))
    <div class="row">
        <div class="container">
            <h3 class="related-title">Dalam voucher</h3>
            @foreach ($vouchers as $voucher)
            <div class="card">
                <div class="row">
                    <div class="col">
                        <div class="testimonial__text">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="{{ asset('images/gambar_produk/1074rahara3.jpg') }}" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>{{ $voucher->kode_voucher }}</h5>
                                    <p class="text-break">{{ $voucher->harga }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-5">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#review{{ $voucher->id }}">
                            beli
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="review{{ $voucher->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="reviewLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="reviewLabel">{{ $voucher->kode_voucher }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('voucherSaya.store') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <input type="hidden" name="voucher_id" value="{{ $voucher->id }}">
                                            <div class="mb-3">
                                                <label class="form-label">Metode Pembayaran</label>
                                                <select name="metodePembayaran_id" id="provinsi"
                                                    class="form-select @error('metodePembayaran_id') is-invalid @enderror">
                                                    @foreach ($metodePembayarans as $metodePembayaran)
                                                    <option value="" hidden>Pilih metodePembayaran</option>
                                                    <option value="{{ $metodePembayaran->id }}">{{
                                                        $metodePembayaran->metodePembayaran }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                @error('metodePembayaran_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Kirim</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="container">
        </div>
    </div>
    @endif
</section> --}}
    {{-- endMale --}}

    {{-- male --}}
    {{-- <section class="shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop__sidebar">
                    <div class="shop__sidebar__search">
                        <form action="{{ url('/produk') }}" method="GET">
                            <input type="text" name="keyword" placeholder="Search..." value="{{ $keyword }}">
                            <button type="submit"><span class="icon_search"></span></button>
                        </form>
                    </div>
                    <div class="shop__sidebar__accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseOne">Kategori</a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__categories">
                                            <ul class="nice-scroll">
                                                @foreach ($kategoris as $kategori)
                                                <div class="card">
                                                    <a class="badge-dark col-5"
                                                        href="{{ url('/produk') }}?kategori={{ $kategori->id }}"
                                                        data-target="#kategori{{ $kategori->id }}">{{ $kategori->name
                                                        }}</a>
                                                    <div id="kategori{{ $kategori->id }}" class="collapse show">
                                                        <div class="card-body">
                                                            <div class="shop__sidebar__categories">
                                                                <ul class="nice-scroll">
                                                                    @foreach ($kategori->subKategori as $subKategori)
                                                                    <li><a
                                                                            href="/produk/{{ $kategori->name }}?subKategori={{ $subKategori->id }}">{{
                                                                            $subKategori->name }}</a>
                                                                    </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseThree">Filter Price</a>
                                </div>
                                <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__price">
                                            <ul>
                                                <li><a href="/produk/?min=0&max=100000">0 -
                                                        100.000</a></li>
                                                <li><a href="/produk/?min=100000&max=200000">100.000 -
                                                        200.000</a></li>
                                                <li><a href="/produk/?min=200000&max=300000">200.000 -
                                                        300.000</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a href="/produk/?diskon=true">on Diskon</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    @foreach ($produks as $produk)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item sale">
                            <div class="product__item__pic set-bg"
                                data-setbg="{{ asset($produk->image[0]->gambar_produk) }}">
                                @if ($produk->diskon > 0)
                                <span class="label">{{ $produk->diskon }}%</span>
                                @endif
                                <ul class="product__hover">
                                    <form id="wishlist{{ $produk->id }}" action="{{ route('wishlist.store') }}"
                                        method="POST">
                                        @csrf
                                        <input type="hidden" name="produk_id" value="{{ $produk->id }}">
                                        <li>
                                            <a
                                                onclick="event.preventDefault();
                                                                document.getElementById('wishlist{{ $produk->id }}').submit();">
                                                <img src="{{ asset('assets2/img/icon/heart.png') }}" alt="">
                                            </a>
                                        </li>
                                    </form>
                                    <li><a href="/detailProduk/{{ $produk->id }}"><img
                                                src="{{ asset('assets2/img/icon/search.png') }}" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>{{ $produk->nama_produk }}</h6>
                                @if ($produk->diskon > 0)
                                @php
                                $diskon = ($produk->diskon / 100) * $produk->harga;
                                $harga = $produk->harga - $diskon;
                                @endphp
                                <p>Rp.
                                    {{ number_format($harga, 0, ',', '.') }}<span class="diskon">{{
                                        number_format($produk->harga, 0, ',', '.') }}</span>
                                </p>
                                @else
                                <p>Rp. {{ number_format($produk->harga, 0, ',', '.') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{ $produks->links() }}
            </div>
        </div>
    </div>
</section> --}}
    {{-- endmale --}}

    {{-- Canvas --}}
    <div class="container clearfix">
        <div class="row">
            @if (count($vouchers))
                @foreach ($vouchers as $voucher)
                    <div class="col-lg-6">
                        <div class="promo promo-light promo-full mb-3">
                            <div class="row align-items-center">
                                <div class="col-lg-3">
                                    <img src="{{ asset('images/no_voucher.png') }}" width="300px" alt=""
                                        srcset="">
                                </div>
                                <div class="col-lg-6">
                                    <h4>
                                        <div class="d-inline">
                                            {{ $voucher->kode_voucher }}
                                        </div>
                                        <span class="text-danger">({{ $voucher->diskon }})%</span>
                                    </h4>
                                    <div style="margin-top:-30px">
                                        {{ $voucher->waktu_mulai }} -
                                        {{ $voucher->waktu_berakhir }}
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    @auth
                                        <form id="voucher{{ $voucher->id }}" action="/voucher/klaim" method="POST">
                                            @csrf
                                            <input type="hidden" name="voucher_id" value="{{ $voucher->id }}">
                                            <a onclick="event.preventDefault(); document.getElementById('voucher{{ $voucher->id }}').submit();"
                                                class="btn btn-primary">klaim</i></a>
                                        </form>
                                    @else
                                        <a id="auth" class="btn btn-primary">Klaim</a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="text-center">
                    <img src="{{ asset('images/no_review.png') }}" width="120px" alt="" srcset="">
                    <div class="fw-bold p-4">Belum ada Voucher</div>
                </div>
            @endif
        </div>
    </div>
    {{-- endCanvas --}}

@endsection
