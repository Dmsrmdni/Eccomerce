@extends('user.profil')

@section('profil')
    <div class="tabs tabs-bb clearfix" id="tab-9">

        <ul class="tab-nav clearfix">
            <li><a href="#tabs-semua">Semua</a></li>
            <li><a href="#tabs-proses">Sedang diproses</a></li>
            <li><a href="#tabs-selesai">Selesai</a></li>
            <li><a href="#tabs-pengajuan_refund">Pengajuan refund</a></li>
            <li><a href="#tabs-dikembalikan">dikembalikan</a></li>
        </ul>

        <div class="tab-container">

            <div class="tab-content clearfix" id="tabs-semua">
                @if (count($pesanan_all))
                    @foreach ($pesanan_all as $pesanan)
                        <div class="col-lg-12 mb-3">
                            <div class="promo promo-light promo-full">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <img src="{{ asset($pesanan->keranjang->produk->image[0]->gambar_produk) }}"
                                            width="150px" height="150px" alt="" srcset="">
                                    </div>
                                    <div class="col-lg-10">
                                        <h4 class="mt-4">
                                            <div class="d-inline">
                                                {{ $pesanan->keranjang->produk->nama_produk }}
                                            </div>
                                            <span class="text-danger float-end mx-4">{{ $pesanan->status }}</span>
                                        </h4>
                                        <div style="margin-top:-25px">
                                            Ukuran : {{ $pesanan->keranjang->ukuran }} ,
                                            Jumlah : ({{ $pesanan->keranjang->jumlah }})
                                        </div>
                                        @php
                                            if ($pesanan->transaksi->voucher_id == '') {
                                                $diskon = 0;
                                            } else {
                                                $diskon = ($pesanan->transaksi->voucher->diskon / 100) * $pesanan->keranjang->total_harga;
                                            }
                                            $total_bayar = $pesanan->keranjang->total_harga - $diskon;
                                        @endphp
                                        <div style="margin-top:-20px" class="float-end mx-4">
                                            Rp.{{ number_format($total_bayar, 0, ',', '.') }}
                                        </div>
                                        <div class="mt-3">
                                            <button class="float-end mx-2 btn btn-danger inline">Detail pesanan</button>
                                            @if ($pesanan->status == 'sukses')
                                                {{-- @if (empty($pesanan->reviewProduk)) --}}
                                                <button class="float-end btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#review{{ $pesanan->id }}">review</button>
                                                <div class="modal fade modal-lg" id="review{{ $pesanan->id }}"
                                                    data-bs-backdrop="static" tabindex="-1" role="dialog"
                                                    aria-labelledby="review" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <form action="/histori/review" method="post">
                                                            @csrf
                                                            <input type="hidden" name="detailTransaksi_id"
                                                                value="{{ $pesanan->id }}">
                                                            @csrf
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Review Produk</h4>
                                                                    <button type="button" class="btn-close btn-sm"
                                                                        data-bs-dismiss="modal" aria-hidden="true"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    @csrf
                                                                    <div class="col-12 mb-3">
                                                                        <label for="komen">rating
                                                                        </label>
                                                                        <div class="rating-css">
                                                                            <div class="star-icon">
                                                                                <input type="radio" value="1"
                                                                                    name="rating" checked id="rating1">
                                                                                <label for="rating1"
                                                                                    class="icon-star3"></label>
                                                                                <input type="radio" value="2"
                                                                                    name="rating" id="rating2">
                                                                                <label for="rating2"
                                                                                    class="icon-star3"></label>
                                                                                <input type="radio" value="3"
                                                                                    name="rating" id="rating3">
                                                                                <label for="rating3"
                                                                                    class="icon-star3"></label>
                                                                                <input type="radio" value="4"
                                                                                    name="rating" id="rating4">
                                                                                <label for="rating4"
                                                                                    class="icon-star3"></label>
                                                                                <input type="radio" value="5"
                                                                                    name="rating" id="rating5">
                                                                                <label for="rating5"
                                                                                    class="icon-star3"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mb-3">
                                                                        <label for="komen">komen
                                                                        </label>
                                                                        <textarea class="required form-control" id="komen" name="komen" rows="5" cols="30" placeholder="komen"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">kirim</button>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </form>
                                                    </div><!-- /.modal-dialog -->
                                                </div>
                                                {{-- @endif --}}
                                            @elseif ($pesanan->status == 'pengajuan refund')
                                                <button class="float-end btn btn-danger">menunggu konfirmasi</button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="text-center mt-3">
                        <img src="{{ asset('images/no_review.png') }}" width="100px" alt="" srcset="">
                        <div class="fw-bold p-4">Belum ada Pesanan</div>
                    </div>
                @endif
            </div>
            <div class="tab-content clearfix" id="tabs-proses">
                @if (count($pesanan_proses))
                    @foreach ($pesanan_proses as $pesanan)
                        <div class="col-lg-12 mb-3">
                            <div class="promo promo-light promo-full">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <img src="{{ asset($pesanan->keranjang->produk->image[0]->gambar_produk) }}"
                                            width="150px" height="150px" alt="" srcset="">
                                    </div>
                                    <div class="col-lg-10">
                                        <h4 class="mt-4">
                                            <div class="d-inline">
                                                {{ $pesanan->keranjang->produk->nama_produk }}
                                            </div>
                                            <span class="text-danger float-end mx-4">{{ $pesanan->status }}</span>
                                        </h4>
                                        <div style="margin-top:-25px">
                                            Ukuran : {{ $pesanan->keranjang->ukuran }} ,
                                            Jumlah : ({{ $pesanan->keranjang->jumlah }})
                                        </div>
                                        @php
                                            if ($pesanan->transaksi->voucher_id == '') {
                                                $diskon = 0;
                                            } else {
                                                $diskon = ($pesanan->transaksi->voucher->diskon / 100) * $pesanan->keranjang->total_harga;
                                            }
                                            $total_bayar = $pesanan->keranjang->total_harga - $diskon;
                                        @endphp
                                        <div style="margin-top:-20px" class="float-end mx-4">
                                            Rp.{{ number_format($total_bayar, 0, ',', '.') }}
                                        </div>
                                        <form action="/histori/konfirmasi/{{ $pesanan->id }}" method="post">
                                            @csrf
                                            <div class="mt-3">
                                                <button type="submit" class="float-end mx-2 btn btn-danger inline"
                                                    name="konfirmasi" value="sukses">Selesai</button>
                                                <button type="button" class="float-end btn btn-danger" name="konfirmasi"
                                                    value="pengajuan refund" data-bs-toggle="modal"
                                                    data-bs-target="#refund{{ $pesanan->id }}">Refund</button>
                                            </div>
                                        </form>
                                        <div class="modal fade modal-lg" id="refund{{ $pesanan->id }}"
                                            data-bs-backdrop="static" tabindex="-1" role="dialog"
                                            aria-labelledby="refund" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <form action="/histori/refund" method="post">
                                                    <input type="hidden" name="detailTransaksi_id"
                                                        value="{{ $pesanan->id }}">
                                                    @csrf
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Refund Produk</h4>
                                                            <button type="button" class="btn-close btn-sm"
                                                                data-bs-dismiss="modal" aria-hidden="true"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @csrf
                                                            <div class="col-12 mb-3">
                                                                <label for="alasan">Alasan
                                                                </label>
                                                                <textarea class="required form-control" id="alasan" name="alasan" rows="5" cols="30"
                                                                    placeholder="Alasan"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">kirim</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </form>
                                            </div><!-- /.modal-dialog -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="text-center mt-3">
                        <img src="{{ asset('images/no_review.png') }}" width="100px" alt="" srcset="">
                        <div class="fw-bold p-4">Belum ada Pesanan</div>
                    </div>
                @endif
            </div>
            <div class="tab-content clearfix" id="tabs-selesai">
                @if (count($pesanan_selesai))
                    @foreach ($pesanan_selesai as $pesanan)
                        <div class="col-lg-12 mb-3">
                            <div class="promo promo-light promo-full">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <img src="{{ asset($pesanan->keranjang->produk->image[0]->gambar_produk) }}"
                                            width="150px" height="150px" alt="" srcset="">
                                    </div>
                                    <div class="col-lg-10">
                                        <h4 class="mt-4">
                                            <div class="d-inline">
                                                {{ $pesanan->keranjang->produk->nama_produk }}
                                            </div>
                                            <span class="text-danger float-end mx-4">{{ $pesanan->status }}</span>
                                        </h4>
                                        <div style="margin-top:-25px">
                                            Ukuran : {{ $pesanan->keranjang->ukuran }} ,
                                            Jumlah : ({{ $pesanan->keranjang->jumlah }})
                                        </div>
                                        @php
                                            if ($pesanan->transaksi->voucher_id == '') {
                                                $diskon = 0;
                                            } else {
                                                $diskon = ($pesanan->transaksi->voucher->diskon / 100) * $pesanan->keranjang->total_harga;
                                            }
                                            $total_bayar = $pesanan->keranjang->total_harga - $diskon;
                                        @endphp
                                        <div style="margin-top:-20px" class="float-end mx-4">
                                            Rp.{{ number_format($total_bayar, 0, ',', '.') }}
                                        </div>
                                        <div class="mt-3">
                                            <button class="float-end mx-2 btn btn-danger inline">Detail pesanan</button>
                                            <button class="float-end btn btn-danger">review</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="text-center mt-3">
                        <img src="{{ asset('images/no_review.png') }}" width="100px" alt="" srcset="">
                        <div class="fw-bold p-4">Belum ada Pesanan</div>
                    </div>
                @endif
            </div>
            <div class="tab-content clearfix" id="tabs-pengajuan_refund">
                @if (count($pesanan_pengajuan_refund))
                    @foreach ($pesanan_pengajuan_refund as $pesanan)
                        <div class="col-lg-12 mb-3">
                            <div class="promo promo-light promo-full">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <img src="{{ asset($pesanan->keranjang->produk->image[0]->gambar_produk) }}"
                                            width="150px" height="150px" alt="" srcset="">
                                    </div>
                                    <div class="col-lg-10">
                                        <h4 class="mt-4">
                                            <div class="d-inline">
                                                {{ $pesanan->keranjang->produk->nama_produk }}
                                            </div>
                                            <span class="text-danger float-end mx-4">{{ $pesanan->status }}</span>
                                        </h4>
                                        <div style="margin-top:-25px">
                                            Ukuran : {{ $pesanan->keranjang->ukuran }} ,
                                            Jumlah : ({{ $pesanan->keranjang->jumlah }})
                                        </div>
                                        @php
                                            if ($pesanan->transaksi->voucher_id == '') {
                                                $diskon = 0;
                                            } else {
                                                $diskon = ($pesanan->transaksi->voucher->diskon / 100) * $pesanan->keranjang->total_harga;
                                            }
                                            $total_bayar = $pesanan->keranjang->total_harga - $diskon;
                                        @endphp
                                        <div style="margin-top:-20px" class="float-end mx-4">
                                            Rp.{{ number_format($total_bayar, 0, ',', '.') }}
                                        </div>
                                        <div class="mt-3">
                                            <button class="float-end mx-2 btn btn-danger inline">Detail pesanan</button>
                                            @if ($pesanan->status == 'pengajuan refund')
                                                <button class="float-end btn btn-danger">Menunggu Konfirmasi</button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="text-center mt-3">
                        <img src="{{ asset('images/no_review.png') }}" width="100px" alt="" srcset="">
                        <div class="fw-bold p-4">Belum ada Pesanan</div>
                    </div>
                @endif
            </div>
            <div class="tab-content clearfix" id="tabs-dikembalikan">
                @if (count($pesanan_dikembalikan))
                    @foreach ($pesanan_dikembalikan as $pesanan)
                        <div class="col-lg-12 mb-3">
                            <div class="promo promo-light promo-full">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <img src="{{ asset($pesanan->keranjang->produk->image[0]->gambar_produk) }}"
                                            width="150px" height="150px" alt="" srcset="">
                                    </div>
                                    <div class="col-lg-10">
                                        <h4 class="mt-4">
                                            <div class="d-inline">
                                                {{ $pesanan->keranjang->produk->nama_produk }}
                                            </div>
                                            <span class="text-danger float-end mx-4">{{ $pesanan->status }}</span>
                                        </h4>
                                        <div style="margin-top:-25px">
                                            Ukuran : {{ $pesanan->keranjang->ukuran }} ,
                                            Jumlah : ({{ $pesanan->keranjang->jumlah }})
                                        </div>
                                        @php
                                            if ($pesanan->transaksi->voucher_id == '') {
                                                $diskon = 0;
                                            } else {
                                                $diskon = ($pesanan->transaksi->voucher->diskon / 100) * $pesanan->keranjang->total_harga;
                                            }
                                            $total_bayar = $pesanan->keranjang->total_harga - $diskon;
                                        @endphp
                                        <div style="margin-top:-20px" class="float-end mx-4">
                                            Rp.{{ number_format($total_bayar, 0, ',', '.') }}
                                        </div>
                                        <div class="mt-3">
                                            <button class="float-end mx-2 btn btn-danger inline">Detail pesanan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="text-center mt-3">
                        <img src="{{ asset('images/no_review.png') }}" width="100px" alt="" srcset="">
                        <div class="fw-bold p-4">Belum ada Pesanan</div>
                    </div>
                @endif
            </div>

        </div>

    </div>
@endsection
