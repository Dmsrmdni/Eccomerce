@extends('user.layouts.users')

@section('content')
<section class="spad">
    @if (count($prosess))
    <div class="row">
        <div class="container">
            <h3 class="related-title">Dalam Proses</h3>
            @foreach ($prosess as $proses)
            <div class="card">
                <div class="row">
                    <div class="col">
                        <div class="testimonial__text">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="{{ asset($proses->keranjang->produk->image[0]->gambar_produk) }}" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>{{ $proses->transaksi->kode_transaksi }}</h5>
                                    <p class="text-break">{{ $proses->keranjang->produk->nama_produk }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-5">
                        <a href="" class="btn btn-primary mx-2">selesai</a>
                        <a href="" class="btn btn-danger">refund</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="container">
            {{-- {{ $prosess->links() }} --}}
        </div>
    </div>
    @endif
</section>
@endsection