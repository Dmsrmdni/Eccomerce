@extends('admin.layouts.admin')

@section('content')
    <div class="card shadow-lg rounded card p-2 mb-3">
        <div class="card-header" id="#atas">
            <span class="fs-4 fw-700">Detail Pembelian Produk
                {{ $detailTransaksis[0]->transaksi->kode_transaksi }}</span>
        </div>
        <div class="table-responsive text-nowrap">
            <div class="container">
                <table class="table table-hover table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th>NO</th>
                            {{-- <th>Kode Transaksi</th> --}}
                            <th>Pembeli</th>
                            <th>Produk</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Status</th>
                            {{-- <th>Metode Pembayaran</th> --}}
                            {{-- <th>Actions</th> --}}
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-1">
                        @if (count($detailTransaksis))
                            @foreach ($detailTransaksis as $detailTransaksi)
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            {{ $loop->iteration }}
                                        </div>
                                    </td>
                                    {{-- <td>
                                        <div class="d-flex">
                                            {{ $detailTransaksi->transaksi->kode_transaksi }}
                                        </div>
                                    </td> --}}
                                    <td>
                                        <div class="d-flex">
                                            {{ $detailTransaksi->transaksi->user->name }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            {{ $detailTransaksi->keranjang->produk->nama_produk }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            {{ $detailTransaksi->keranjang->jumlah }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            Rp. {{ number_format($detailTransaksi->keranjang->total_harga, 0, ',', '.') }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            @if ($detailTransaksi->status == 'sukses')
                                                <div class="badge rounded-pill bg-success w-100">
                                                    {{ $detailTransaksi->status }}
                                                </div>
                                            @elseif ($detailTransaksi->status == 'proses')
                                                <div class="badge rounded-pill bg-warning w-100">
                                                    {{ $detailTransaksi->status }}
                                                </div>
                                            @elseif ($detailTransaksi->status == 'dikembalikan')
                                                <div class="badge rounded-pill bg-danger w-100">
                                                    {{ $detailTransaksi->status }}
                                                </div>
                                            @elseif ($detailTransaksi->status == 'pengajuan refund')
                                                <div class="badge rounded-pill bg-secondary w-100">
                                                    {{ $detailTransaksi->status }}
                                                </div>
                                            @elseif ($detailTransaksi->status == 'ditolak')
                                                <div class="badge rounded-pill bg-primary w-100">
                                                    {{ $detailTransaksi->status }}
                                                </div>
                                            @endif
                                        </div>
                                    </td>
                                    {{-- <td>
                                        <div class="d-flex">
                                            {{ $detailTransaksi->transaksi->metodePembayaran->metodePembayaran }}
                                        </div>
                                    </td> --}}
                                    {{-- <td>
                                        <form action="{{ route('detailTransaksi.destroy', $detailTransaksi->id) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#modalCenter{{ $detailTransaksi->id }}"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                </svg>
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="modalCenter{{ $detailTransaksi->id }}"
                                                tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalCenterTitle">Apakah Anda
                                                                Yakin?
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">
                                                                Kembali
                                                            </button>
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </td> --}}
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                    <tfoot class="table-border-bottom-0">
                        <tr>
                            <th colspan="5">Total</th>
                            <th>Rp. {{ number_format($total_harga, 0, ',', '.') }}</th>
                        </tr>
                        @if (!$transaksis->voucher == '')
                            <tr>
                                <th colspan="5">voucher</th>
                                <th>({{ $transaksis->voucher->diskon }}% ) / Rp. {{ number_format($diskon, 0, ',', '.') }}
                                </th>
                            </tr>
                            <tr>
                                <th colspan="5">Total Harga</th>
                                <th>Rp. {{ number_format($total_bayar, 0, ',', '.') }}</th>
                            </tr>
                        @endif
                        <tr>
                            <th colspan="5">Metode Pembayaran</th>
                            <th>{{ $detailTransaksis[0]->transaksi->metodePembayaran->metodePembayaran }}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <div class="d-flex">
        <a href="{{ url('/admin/transaksi') }}" class="btn btn-danger me-3"><svg xmlns="http://www.w3.org/2000/svg"
                width="20" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
            </svg> Kembali</a>
    </div>
@endsection
