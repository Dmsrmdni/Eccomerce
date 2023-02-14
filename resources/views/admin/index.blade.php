@extends('admin.layouts.admin')

@section('content')
<div class="row mb-3">
    <div class="col-lg-2">
        <div class="card">
            <select id="defaultSelect" class="form-select btn-secondary"
                onChange="document.location.href=this.options[this.selectedIndex].value;">
                <option selected hidden>Filter Tahun</option>
                <option value="/admin/dashboard?tahun=2021">2021</option>
                <option value="/admin/dashboard?tahun=2022">2022</option>
                <option value="/admin/dashboard?tahun=2023">2023</option>
                <option value="/admin/dashboard?tahun=2024">2024</option>
                <option value="/admin/dashboard?tahun=2025">2025</option>
            </select>
        </div>
    </div>
</div>
<div class="row mb">
    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card p-3">
            <figure class="p-3 mb-0">
                <blockquote class="blockquote">
                    <h5>Pendapatan Voucher</h5>
                </blockquote>
                <figcaption class="blockquote-footer mb-0 text-success float-end fs-5">
                    RP. {{ number_format($pendapatan_voucher, 0, ',', '.') }}
                </figcaption>
            </figure>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card p-3">
            <figure class="p-3 mb-0">
                <blockquote class="blockquote">
                    <h5>Pendapatan Transaksi</h5>
                </blockquote>
                <figcaption class="blockquote-footer mb-0 text-success float-end fs-5">
                    RP. {{ number_format($pendapatan_transaksi, 0, ',', '.') }}
                </figcaption>
            </figure>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card p-3">
            <figure class="p-3 mb-0">
                <blockquote class="blockquote">
                    <h5>Total Pendapatan</h5>
                </blockquote>
                <figcaption class="blockquote-footer mb-0 text-success float-end fs-5">
                    RP. {{ number_format($total_pendapatan, 0, ',', '.') }}
                </figcaption>
            </figure>
        </div>
    </div>
</div>

<div class="row mb-4">
    {{-- Data Transaksi --}}
    <div class="col-xl-6">
        <div class="card p-3 mb-0">
            <h5 class="m-0 me-2">Data Pembelian Produk/bulan</h5>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <canvas id="pembelian_produk"></canvas>
                </div>
            </div>
        </div>
    </div>
    {{-- EndData Transaksi --}}

    {{-- Data Transaksi --}}
    <div class="col-xl-6">
        <div class="card p-3 mb-0">
            <h5 class="m-0 me-2">Data Pembelian Voucher/bulan</h5>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <canvas id="pembelian_voucher"></canvas>
                </div>
            </div>
        </div>
    </div>
    {{-- EndData Transaksi --}}
</div>

<div class="row mb-3">
    <div class="col-xl-8">
        <div class="card">
            <div class="row row-bordered g-0">
                <div class="col-md-8">
                    <h5 class="card-header m-0 me-2 pb-3">Barang Masuk dan Keluar/Bulan</h5>
                    <canvas id="histori_barang_bulan" style="margin: 10px"></canvas>
                </div>
                <div class="col-md-4">
                    <canvas style="margin: 20px 10px 0px" id="histori_barang"></canvas>
                    <h5 class="card-title mx-2 my-3 pb-3">Barang Masuk/Keluar</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card p-3">
            <h5 class="card-title m-2">History</h5>
            <div class="card-body">
                <ul class="p-0 m-0">
                    <li class="d-flex mb-4">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-secondary"><i class="bx bxs-user"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">User Register</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">{{ number_format($users, 0, ',', '.') }}</h6>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-info"><i class="bx bx-closet"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Produk Terjual</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">{{ number_format($produks, 0, ',', '.') }}</h6>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-3">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-danger"><i class="bx bx-recycle"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Refund Produk</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">{{ number_format($refunds, 0, ',', '.') }}</h6>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    {{-- EndData Transaksi --}}
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

{{-- PembelianProduk --}}
<script>
    const pembelian_produk = document.getElementById('pembelian_produk');
        const produk = new Chart(pembelian_produk, {
            type: 'line',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                    'Oktober', 'November', 'Desember'
                ],
                datasets: [{
                    label: 'Jumlah Pembelian',
                    data: [
                        {{ $pembelian_produk_jan }},
                        {{ $pembelian_produk_feb }},
                        {{ $pembelian_produk_mar }},
                        {{ $pembelian_produk_apr }},
                        {{ $pembelian_produk_mei }},
                        {{ $pembelian_produk_jun }},
                        {{ $pembelian_produk_jul }},
                        {{ $pembelian_produk_agu }},
                        {{ $pembelian_produk_sep }},
                        {{ $pembelian_produk_okt }},
                        {{ $pembelian_produk_nov }},
                        {{ $pembelian_produk_des }}
                    ],
                    backgroundColor: [
                        'rgba(95 158 160)',
                    ],
                    borderColor: [
                        'rgba(70 130 180)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
</script>
{{-- EndPembelianProduk --}}

{{-- PembelianVoucher --}}
<script>
    const pembelian_voucher = document.getElementById('pembelian_voucher');
        const voucher = new Chart(pembelian_voucher, {
            type: 'line',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                    'Oktober', 'November', 'Desember'
                ],
                datasets: [{
                    label: 'Jumlah Pembelian',
                    data: [
                        {{ $pembelian_voucher_jan }},
                        {{ $pembelian_voucher_feb }},
                        {{ $pembelian_voucher_mar }},
                        {{ $pembelian_voucher_apr }},
                        {{ $pembelian_voucher_mei }},
                        {{ $pembelian_voucher_jun }},
                        {{ $pembelian_voucher_jul }},
                        {{ $pembelian_voucher_agu }},
                        {{ $pembelian_voucher_sep }},
                        {{ $pembelian_voucher_okt }},
                        {{ $pembelian_voucher_nov }},
                        {{ $pembelian_voucher_des }}
                    ],
                    backgroundColor: [
                        'rgba(95 158 160)',
                    ],
                    borderColor: [
                        'rgba(70 130 180)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
</script>
{{-- EndPembelianVoucher --}}

{{-- BarangMasukKeluarBulan --}}
<script>
    const histori_barang_bulan = document.getElementById('histori_barang_bulan');
        const histori__bulan = new Chart(histori_barang_bulan, {
            type: 'bar',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                    'Oktober', 'November', 'Desember'
                ],
                datasets: [{
                        label: 'Barang Masuk',
                        data: [
                            {{ $barang_masuk_bulan_jan }},
                            {{ $barang_masuk_bulan_feb }},
                            {{ $barang_masuk_bulan_mar }},
                            {{ $barang_masuk_bulan_apr }},
                            {{ $barang_masuk_bulan_mei }},
                            {{ $barang_masuk_bulan_jun }},
                            {{ $barang_masuk_bulan_jul }},
                            {{ $barang_masuk_bulan_agu }},
                            {{ $barang_masuk_bulan_sep }},
                            {{ $barang_masuk_bulan_okt }},
                            {{ $barang_masuk_bulan_nov }},
                            {{ $barang_masuk_bulan_des }}
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                        ],
                        borderWidth: 1
                    },
                    {
                        label: 'Barang Keluar',
                        data: [
                            {{ $barang_keluar_bulan_jan }},
                            {{ $barang_keluar_bulan_feb }},
                            {{ $barang_keluar_bulan_mar }},
                            {{ $barang_keluar_bulan_apr }},
                            {{ $barang_keluar_bulan_mei }},
                            {{ $barang_keluar_bulan_jun }},
                            {{ $barang_keluar_bulan_jul }},
                            {{ $barang_keluar_bulan_agu }},
                            {{ $barang_keluar_bulan_sep }},
                            {{ $barang_keluar_bulan_okt }},
                            {{ $barang_keluar_bulan_nov }},
                            {{ $barang_keluar_bulan_des }}
                        ],
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.2)',
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                        ],
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
</script>
{{-- endBarangMasukKeluarBulan --}}

{{-- BarangMasukKeluar --}}
<script>
    const histori_barang_masuk_keluar = document.getElementById('histori_barang');
        const histori_barang = new Chart(histori_barang_masuk_keluar, {
            type: 'doughnut',
            data: {
                labels: ['Barang Masuk', 'Barang Keluar'],
                datasets: [{
                    label: '# of Votes',
                    data: [{{ $barang_masuk }}, {{ $barang_keluar }}],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
            }
        });
</script>
{{-- endBarangMasukKeluar --}}
@endsection