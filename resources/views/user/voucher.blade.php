@extends('user.layouts.users')

@section('content')
<section class="spad">
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
            {{-- {{ $vouchers->links() }} --}}
        </div>
    </div>
    @endif
</section>
@endsection