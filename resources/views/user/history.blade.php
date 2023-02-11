@extends('user.layouts.users')

@section('content')
<section class="spad">
    @if (count($historis))
    <div class="row">
        <div class="container">
            <h3 class="related-title">History Pembelian</h3>
            @foreach ($historis as $histori)
            <div class="card">
                <div class="row">
                    <div class="col">
                        <div class="testimonial__text">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="{{ asset($histori->keranjang->produk->image[0]->gambar_produk) }}" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>{{ $histori->transaksi->kode_transaksi }}</h5>
                                    <p class="text-break">{{ $histori->keranjang->produk->nama_produk }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-5">
                        <a href="" class="btn btn-primary">Review</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="container">
            {{-- {{ $historis->links() }} --}}
        </div>
    </div>
    @endif
</section>
@endsection