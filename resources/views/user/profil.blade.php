@extends('user.layouts.users')

@section('content')
    <style>
        .rating-css input {
            display: none;
        }

        .rating-css input+label {
            font-size: 25px;
            color: yellow;
            text-shadow: 1px 1px 0 grey;
            cursor: pointer;
        }

        .rating-css input:checked+label~label {
            color: #b4afaf;
        }

        .rating-css label:active {
            transform: scale(0.8);
            transition: 0.3s ease;
        }
    </style>
    {{-- Male --}}
    {{-- <style>
        html * {
            -webkit-font-smoothing: antialiased;
        }

        .h6,
        h6 {
            font-size: .75rem !important;
            font-weight: 500;
            font-family: Roboto, Helvetica, Arial, sans-serif;
            line-height: 1.5em;
            text-transform: uppercase;
        }

        .name h6 {
            margin-top: 10px;
            margin-bottom: 10px;
        }


        a .material-icons {
            vertical-align: middle;
        }

        .fixed-top {
            position: fixed;
            left: 0;
            right: 0;
        }

        .profile-page .page-header {
            height: 380px;
            background-position: center;
        }

        .page-header {
            height: 100vh;
            background-size: cover;
            margin: 0;
            padding: 0;
            border: 0;
            display: flex;
            align-items: center;
        }

        .header-filter:after,
        .header-filter:before {
            position: absolute;
            width: 100%;
            height: 100%;
            display: block;
            left: 0;
            top: 0;
            content: "";
        }

        .header-filter::before {
            background: rgba(0, 0, 0, .5);
        }

        .main-raised {
            margin: 0px 30px 0;
            border-radius: 6px;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, .14), 0 6px 30px 5px rgba(0, 0, 0, .12), 0 8px 10px -5px rgba(0, 0, 0, .2);
        }

        .main {
            background: #FFF;
            position: relative;
        }

        .profile-page .profile {
            text-align: center;
        }

        .profile-page .profile img {
            /* max-width: 160px; */
            width: 10%;
            margin: 0 auto;
            -webkit-transform: translate3d(0, -50%, 0);
            -moz-transform: translate3d(0, -50%, 0);
            -o-transform: translate3d(0, -50%, 0);
            -ms-transform: translate3d(0, -50%, 0);
            transform: translate3d(0, -50%, 0);
        }

        .img-raised {
            box-shadow: 0 5px 15px -8px rgba(0, 0, 0, .24), 0 8px 10px -5px rgba(0, 0, 0, .2);
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        .img-fluid,
        .img-thumbnail {
            max-width: 100%;
            height: auto;
        }

        .title {
            margin-top: 30px;
            margin-bottom: 25px;
            min-height: 32px;
            color: #3C4858;
            font-weight: 700;
            font-family: "Roboto Slab", "Times New Roman", serif;
        }

        .profile-page .description {
            margin: 1.071rem auto 0;
            max-width: 600px;
            color: #999;
            font-weight: 300;
        }

        p {
            font-size: 14px;
            margin: 0 0 10px;
        }

        .profile-page .profile-tabs {
            margin-top: 4.284rem;
        }

        .nav-pills,
        .nav-tabs {
            border: 0;
            border-radius: 3px;
            padding: 0 15px;
        }

        .nav .nav-item {
            position: relative;
            margin: 0 2px;
        }

        .nav-pills.nav-pills-icons .nav-item .nav-link {
            border-radius: 4px;
        }

        .nav-pills .nav-item .nav-link.active {
            color: #fff;
            background-color: #9c27b0;
            box-shadow: 0 5px 20px 0 rgba(0, 0, 0, .2), 0 13px 24px -11px rgba(156, 39, 176, .6);
        }

        .nav-pills .nav-item .nav-link {
            line-height: 24px;
            font-size: 12px;
            font-weight: 500;
            min-width: 100px;
            color: #555;
            transition: all .3s;
            border-radius: 30px;
            padding: 10px 15px;
            text-align: center;
        }

        .nav-pills .nav-item .nav-link:not(.active):hover {
            background-color: rgba(200, 200, 200, .2);
        }


        .nav-pills .nav-item i {
            display: block;
            font-size: 30px;
            padding: 15px 0;
        }

        .tab-space {
            padding: 20px 0 50px;
        }

        .profile-page .gallery {
            margin-top: 3.213rem;
            padding-bottom: 50px;
        }

        .profile-page .gallery img {
            width: 100%;
            margin-bottom: 2.142rem;
        }

        .profile-page .profile .name {
            margin-top: -80px;
        }

        img.rounded {
            border-radius: 6px !important;
        }

        .tab-content>.active {
            display: block;
        }

        /*buttons*/
        /* .btn {
                                                                                                                                                                                    position: relative;
                                                                                                                                                                                    padding: 12px 30px;
                                                                                                                                                                                    margin: .3125rem 1px;
                                                                                                                                                                                    font-size: .75rem;
                                                                                                                                                                                    font-weight: 400;
                                                                                                                                                                                    line-height: 1.428571;
                                                                                                                                                                                    text-decoration: none;
                                                                                                                                                                                    text-transform: uppercase;
                                                                                                                                                                                    letter-spacing: 0;
                                                                                                                                                                                    border: 0;
                                                                                                                                                                                    border-radius: .2rem;
                                                                                                                                                                                    outline: 0;
                                                                                                                                                                                    transition: box-shadow .2s cubic-bezier(.4, 0, 1, 1), background-color .2s cubic-bezier(.4, 0, .2, 1);
                                                                                                                                                                                    will-change: box-shadow, transform;
                                                                                                                                                                                }

                                                                                                                                                                                .btn.btn-just-icon {
                                                                                                                                                                                    font-size: 20px;
                                                                                                                                                                                    height: 41px;
                                                                                                                                                                                    min-width: 41px;
                                                                                                                                                                                    width: 41px;
                                                                                                                                                                                    padding: 0;
                                                                                                                                                                                    overflow: hidden;
                                                                                                                                                                                    position: relative;
                                                                                                                                                                                    line-height: 41px;
                                                                                                                                                                                }

                                                                                                                                                                                .btn.btn-just-icon fa {
                                                                                                                                                                                    margin-top: 0;
                                                                                                                                                                                    position: absolute;
                                                                                                                                                                                    width: 100%;
                                                                                                                                                                                    transform: none;
                                                                                                                                                                                    left: 0;
                                                                                                                                                                                    top: 0;
                                                                                                                                                                                    height: 100%;
                                                                                                                                                                                    line-height: 41px;
                                                                                                                                                                                    font-size: 20px;
                                                                                                                                                                                }

                                                                                                                                                                                .btn.btn-link {
                                                                                                                                                                                    background-color: transparent;
                                                                                                                                                                                    color: #999;
                                                                                                                                                                                } */
    </style>

    <div class="container spad">
        <div class="main main-raised">
            <div class="profile-content">
                <div class="container-fluid">
                    <div class="row mb-4">
                        <div class="col-md-6 ml-auto mr-auto">
                            <div class="profile w-50 mx-auto my-3">
                                <div class="avatar">
                                    <img src="{{ asset($users->profile) }}" alt="Circle Image"
                                        class="img-raised rounded-circle img-fluid">
                                </div>
                                <div class="name">
                                    <h3 class="title">{{ $users->name }}</h3>
                                    <h5>{{ $users->email }}</h5>
                                    <h5>Saldo : Rp. {{ number_format($users->saldo, 0, ',', '.') }}</h5>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#profil">
                                            Edit Profil
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="profil" tabindex="-1" role="dialog"
                                            aria-labelledby="profilLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="profilLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{ route('profil.update', $users->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('put');
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="recipient-name"
                                                                    class="col-form-label">Nama:</label>
                                                                <input type="text" class="form-control" name="name"
                                                                    value="{{ $users->name }}">
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
                                    <div class="col">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal">
                                            Top up
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{ route('topUps.store') }}" method="POST">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="recipient-name"
                                                                    class="col-form-label">Nama:</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $users->name }}" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name"
                                                                    class="col-form-label">Saldo:</label>
                                                                <input type="radio" name="jumlah_saldo"
                                                                    value="50000">50.000
                                                                <input type="radio" name="jumlah_saldo"
                                                                    value="100000">100.000
                                                                <input type="radio" name="jumlah_saldo"
                                                                    value="150000">150.000
                                                                <input type="radio" name="jumlah_saldo"
                                                                    value="200000">200.000
                                                                <input type="radio" name="jumlah_saldo"
                                                                    value="300000">300.000
                                                            </div>
                                                            <div class="mb-3">
                                                                <select name="metodePembayaran_id"
                                                                    class="form-control @error('metodePembayaran_id') is-invalid @enderror">
                                                                    <option value="" hidden>Pilih Metode Pembayaran
                                                                    </option>
                                                                    @foreach ($metodePembayarans as $metodePembayaran)
                                                                    <option value="{{ $metodePembayaran->id }}">
                                                                        {{ $metodePembayaran->metodePembayaran }}
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
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto mb-4">
                            <a href="/histori" class="btn btn-primary m-1">history barang</a>
                            <a href="/histori/proses" class="btn btn-primary m-1">dalam proses</a>
                            <a href="/histori/refund" class="btn btn-primary m-1">refund produk</a>
                            <a href="/alamat" class="btn btn-primary m-1">alamat</a>
                            <a href="/voucherSaya" class="btn btn-primary m-1">Voucher Saya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- EndMale --}}

    {{-- Canvas --}}
    {{-- <div class="container clearfix">

        <div class="row clearfix">
            <div class="tabs side-tabs mb-0 clearfix">

                <div class="col-lg-8" style="margin-right:50px">

                    <img src="{{ asset($users->profile) }}" class="alignleft img-circle img-thumbnail my-0" alt="Avatar"
                        style="max-width: 84px;">

                    <div class="heading-block border-0">
                        <h3>{{ $users->name }}</h3>
                        <span style="margin-top:-7px">{{ $users->email }}</span>
                    </div>

                    <div class="tab-container" style="margin-top: -35px">

                        <div class="tab-content clearfix" id="tabs-profil">
                            <form action="{{ route('profil.update', $users->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-process">
                                    <div class="css3-spinner">
                                        <div class="css3-spinner-scaler"></div>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-12 form-group">
                                    <label>Name:</label>
                                    <input type="text" name="name" class="form-control required"
                                        value="{{ $users->name }}">
                                </div>
                                <div class="col-12 form-group">
                                    <label>Email:</label>
                                    <input type="email" name="email" class="form-control required"
                                        value="{{ $users->email }}">
                                </div>
                                <div class="col-12 form-group">
                                    <label>No telepon</label>
                                    <input type="number" min="0" name="no_telepon"
                                        class="form-control numbers required" value="{{ $users->no_telepon }}">
                                </div>
                                <div class="col-12 form-group">
                                    <label>Jenis Kelamin</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input required" id="Laki-laki" type="radio"
                                            name="jenis_kelamin" value="Laki-laki"
                                            {{ $users->jenis_kelamin == 'Laki-laki' ? 'checked' : null }}>
                                        <label class="form-check-label nott ms-2" for="Laki-laki">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="Perempuan" type="radio" name="jenis_kelamin"
                                            value="Perempuan" {{ $users->jenis_kelamin == 'Perempuan' ? 'checked' : null }}>
                                        <label class="form-check-label nott ms-2" for="Perempuan">Perempuan</label>
                                    </div>
                                </div>
                                <div class="col-12 form-group">
                                    <label>tanggal lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control required"
                                        value="{{ $users->tanggal_lahir }}">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="button button-black">simpan</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-content clearfix" id="tabs-alamat">

                            <a class="button button-circle button-black mb-3 button-small" data-bs-toggle="modal"
                                data-bs-target="#alamatCreate">tambah alamat</a>

                            <div class="modal fade modal-lg" id="alamatCreate" data-bs-backdrop="static" tabindex="-1"
                                role="dialog" aria-labelledby="alamatCreate" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="{{ route('alamat.store') }}" method="post">
                                        @csrf
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Tambah Alamat</h4>
                                                <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal"
                                                    aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-6 mb-3">
                                                        <label for="nama_lengkap">Nama Lengkap</label>
                                                        <div class="input-group">
                                                            <input type="text" id="nama_lengkap" name="nama_lengkap"
                                                                placeholder="Nama Lengkap" class="form-control required" />
                                                        </div>
                                                    </div>

                                                    <div class="col-6 mb-3">
                                                        <label for="no_telepon">No telepon</label>
                                                        <div class="input-group">
                                                            <input type="number" id="no_telepon" min="0"
                                                                name="no_telepon" placeholder="No telepon"
                                                                class="required form-control numbers" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="w-100"></div>

                                                <div class="col-12 mb-3">
                                                    <label for="provinsi">Provinsi</label>
                                                    <select id="provinsi" name="provinsi_id" class="form-select">
                                                        <option value="" selected hidden>Pilih provinsi
                                                        </option>
                                                        @foreach ($provinsis as $provinsi)
                                                            <option value="{{ $provinsi->id }}">{{ $provinsi->provinsi }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="w-100"></div>

                                                <div class="col-12 mb-3">
                                                    <label for="kota">Kota/Kabupaten</label>
                                                    <select id="kota" name="kota_id" class="form-select">
                                                        <option value="" hidden>Pilih Provinsi lebih dulu</option>
                                                    </select>
                                                </div>

                                                <div class="w-100"></div>

                                                <div class="col-12 mb-3">
                                                    <label for="kecamatan">Kecamatan</label>
                                                    <select id="kecamatan" name="kecamatan_id" class="form-select">
                                                        <option value="" hidden>Pilih Kota/Kabupaten lebih dulu
                                                        </option>
                                                    </select>
                                                </div>

                                                <div class="w-100"></div>

                                                <div class="col-12 mb-3">
                                                    <label for="alamat_lengkap">Alamat Lengkap
                                                    </label>
                                                    <textarea class="required form-control" id="alamat_lengkap" name="alamat_lengkap" rows="3" cols="30"
                                                        placeholder="Nama jalan, Gedung, No.Rumah"></textarea>
                                                </div>

                                                <div class="w-100"></div>

                                                <div class="col-12 mb-3">
                                                    <label for="detail_lainnya">Detail Lainnya</label>
                                                    <div class="input-group">
                                                        <input type="text" id="detail_lainnya" name="detail_lainnya"
                                                            placeholder="Detail lainnya (cth:Blok/Patokan)"
                                                            class="form-control" />
                                                    </div>
                                                </div>

                                                <div class="w-100"></div>
                                                <div class="col-12">
                                                    <label class="d-block">Tandai Sebagai</label>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input required" id="Rumah"
                                                            type="radio" name="label_alamat" value="Rumah">
                                                        <label class="form-check-label nott ms-2"
                                                            for="Rumah">Rumah</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" id="Kantor" type="radio"
                                                            name="label_alamat" value="Kantor">
                                                        <label class="form-check-label nott ms-2"
                                                            for="Kantor">Kantor</label>
                                                    </div>
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
                            @if (count($alamats))
                                @foreach ($alamats as $alamat)
                                    <div class="promo promo-light promo-full p-3 mb-3">
                                        <div class="container">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg">
                                                    <h4>
                                                        <div id="nama_lengkap" class="d-inline">
                                                            {{ $alamat->nama_lengkap }}
                                                        </div> <span id="no_telepon">
                                                            {{ $alamat->no_telepon }}</span>
                                                    </h4>
                                                    <div style="margin-top:-10px" id="alamat_lengkap">
                                                        {{ $alamat->alamat_lengkap }}</div>

                                                    @if ($alamat->detail_lainnya != '')
                                                        <div>({{ $alamat->detail_lainnya }})</div>
                                                    @endif

                                                </div>
                                                <div class="col-12 col-lg-auto mt-4 mt-lg-0">
                                                    <form id="deleteAlamat{{ $alamat->id }}"
                                                        action="{{ route('alamat.destroy', $alamat->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <a data-bs-toggle="modal"
                                                            data-bs-target="#alamatEdit{{ $alamat->id }}"
                                                            class="button button-circle button-black button-small m-0 mx-1">Ubah</a>
                                                        <a id="btnDeleteAlamat" data-id="{{ $alamat->id }}"
                                                            class="button button-circle button-black button-small m-0">Hapus</a>
                                                    </form>

                                                    <div class="modal fade modal-lg" id="alamatEdit{{ $alamat->id }}"
                                                        data-bs-backdrop="static" tabindex="-1" role="dialog"
                                                        aria-labelledby="alamatEdit" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <form action="{{ route('alamat.update', $alamat->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('put')
                                                                @php
                                                                    $kotas = App\Models\Kota::where('provinsi_id', $alamat->provinsi_id)->get();
                                                                    $kecamatans = App\Models\Kecamatan::where('kota_id', $alamat->kota_id)->get();
                                                                @endphp
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">Edit Alamat</h4>
                                                                        <button type="button" class="btn-close btn-sm"
                                                                            data-bs-dismiss="modal"
                                                                            aria-hidden="true"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        @csrf
                                                                        <div class="row">
                                                                            <div class="col-6 mb-3">
                                                                                <label for="nama_lengkap">Nama
                                                                                    Lengkap</label>
                                                                                <div class="input-group">
                                                                                    <input type="text"
                                                                                        id="nama_lengkap"
                                                                                        name="nama_lengkap"
                                                                                        value="{{ $alamat->nama_lengkap }}"
                                                                                        class="form-control required" />
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-6 mb-3">
                                                                                <label for="no_telepon">No telepon</label>
                                                                                <div class="input-group">
                                                                                    <input type="number" id="no_telepon"
                                                                                        min="0" name="no_telepon"
                                                                                        value="{{ $alamat->no_telepon }}"
                                                                                        class="required form-control numbers" />
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="w-100"></div>

                                                                        <div class="col-12 mb-3">
                                                                            <label for="provinsi">Provinsi</label>
                                                                            <select id="provinsiEdit" name="provinsi_id"
                                                                                class="form-select">
                                                                                <option value="" selected hidden>
                                                                                    Pilih provinsi
                                                                                </option>
                                                                                @foreach ($provinsis as $provinsi)
                                                                                    @if (old('provinsi_id', $provinsi->id) == $alamat->provinsi_id)
                                                                                        <option
                                                                                            value="{{ $provinsi->id }}"
                                                                                            selected hidden>
                                                                                            {{ $provinsi->provinsi }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $provinsi->id }}">
                                                                                            {{ $provinsi->provinsi }}
                                                                                        </option>
                                                                                    @endif
                                                                                @endforeach
                                                                            </select>
                                                                        </div>

                                                                        <div class="w-100"></div>

                                                                        <div class="col-12 mb-3">
                                                                            <label for="kota">Kota/Kabupaten</label>
                                                                            <select id="kotaEdit" name="kota_id"
                                                                                class="form-select">
                                                                                @foreach ($kotas as $kota)
                                                                                    @if (old('kota_id', $kota->id) == $alamat->kota_id)
                                                                                        <option
                                                                                            value="{{ $kota->id }}"
                                                                                            selected hidden>
                                                                                            {{ $kota->kota }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $kota->id }}">
                                                                                            {{ $kota->kota }}</option>
                                                                                    @endif
                                                                                @endforeach
                                                                            </select>
                                                                        </div>

                                                                        <div class="w-100"></div>

                                                                        <div class="col-12 mb-3">
                                                                            <label for="kecamatan">Kecamatan</label>
                                                                            <select id="kecamatanEdit" name="kecamatan_id"
                                                                                class="form-select">
                                                                                @foreach ($kecamatans as $kecamatan)
                                                                                    @if (old('kecamatan_id', $kecamatan->id) == $alamat->kecamatan_id)
                                                                                        <option
                                                                                            value="{{ $kecamatan->id }}"
                                                                                            selected hidden>
                                                                                            {{ $kecamatan->kecamatan }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $kecamatan->id }}">
                                                                                            {{ $kecamatan->kecamatan }}
                                                                                        </option>
                                                                                    @endif
                                                                                @endforeach
                                                                            </select>
                                                                        </div>

                                                                        <div class="w-100"></div>

                                                                        <div class="col-12 mb-3">
                                                                            <label for="alamat_lengkap">Alamat Lengkap
                                                                            </label>
                                                                            <textarea class="required form-control" id="alamat_lengkap" name="alamat_lengkap" rows="3" cols="30"
                                                                                placeholder="Nama jalan, Gedung, No.Rumah">{{ $alamat->alamat_lengkap }}</textarea>
                                                                        </div>

                                                                        <div class="w-100"></div>

                                                                        <div class="col-12 mb-3">
                                                                            <label for="detail_lainnya">Detail
                                                                                Lainnya</label>
                                                                            <div class="input-group">
                                                                                <input type="text" id="detail_lainnya"
                                                                                    name="detail_lainnya"
                                                                                    value="{{ $alamat->detail_lainnya }}"
                                                                                    class="form-control" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="w-100"></div>
                                                                        <div class="col-12">
                                                                            <label class="d-block">Tandai Sebagai</label>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input required"
                                                                                    id="Rumah" type="radio"
                                                                                    name="label_alamat" value="Rumah"
                                                                                    {{ $alamat->label_alamat == 'Rumah' ? 'checked' : null }}>
                                                                                <label class="form-check-label nott ms-2"
                                                                                    for="Rumah">Rumah</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input"
                                                                                    id="Kantor" type="radio"
                                                                                    name="label_alamat" value="Kantor"
                                                                                    {{ $alamat->label_alamat == 'Kantor' ? 'checked' : null }}>
                                                                                <label class="form-check-label nott ms-2"
                                                                                    for="Kantor">Kantor</label>
                                                                            </div>
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="text-center">
                                    <img src="{{ asset('images/no_review.png') }}" width="100px" alt=""
                                        srcset="">
                                    <div class="fw-bold p-4">Belum ada alamat</div>
                                </div>
                            @endif
                        </div>
                        <div class="tab-content clearfix" id="tabs-voucher">
                            <div class="row">
                                @if (count($vouchers))
                                    @foreach ($vouchers as $voucher)
                                        <div class="col-lg-6">
                                            <div class="promo promo-light promo-full mb-3">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-4">
                                                        <img src="{{ asset('images/no_voucher.png') }}" width="300px"
                                                            alt="" srcset="">
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <h4>
                                                            <div class="d-inline">
                                                                {{ $voucher->voucher->kode_voucher }}
                                                            </div>
                                                            <span
                                                                class="text-danger">({{ $voucher->voucher->diskon }})%</span>
                                                        </h4>
                                                        <div style="margin-top:-30px">
                                                            {{ $voucher->voucher->waktu_mulai }} -
                                                            {{ $voucher->voucher->waktu_berakhir }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="text-center">
                                        <img src="{{ asset('images/no_review.png') }}" width="120px" alt=""
                                            srcset="">
                                        <div class="fw-bold p-4">Belum ada Voucher</div>
                                    </div>
                                @endif
                            </div>
                        </div>

                    </div>

                </div>
                <div class="w-100 line d-block d-md-none"></div>

                <div class="col-lg-3">
                    <ul class="tab-nav tab-nav2 clearfix">
                        <li><a href="#tabs-profil"><i class="icon-home2"></i>Akun saya</a></li>
                        <li><a href="#tabs-alamat">Alamat</a></li>
                        <li><a href="#tabs-voucher">Voucher Saya</a></li>
                        <li class="hidden-phone"><a href="#tabs-24">Aenean lacinia</a></li>
                    </ul>
                </div>

            </div>

        </div>
    </div> --}}
    <div class="container clearfix">

        @php
            $users = App\Models\User::where('id', Auth::user()->id)->first();
        @endphp

        <div class="row clearfix">

            <div class="col-md-9">

                <img src="{{ asset($users->profile) }}" class="alignleft img-circle img-thumbnail my-0" alt="Avatar"
                    style="max-width: 84px;">

                <div class="heading-block border-0">
                    <h3>{{ $users->name }}</h3>
                    <span style="margin-top:-7px">{{ $users->email }}</span>
                </div>

                <div class="clear"></div>

                @yield('profil')
            </div>


            <div class="w-100 line d-block d-md-none"></div>

            <div class="col-md-3">

                <div class="list-group">
                    <a href="/profil/akun" class="list-group-item list-group-item-action d-flex justify-content-between">
                        <div>Akun saya</div><i class="icon-user"></i>
                    </a>
                    <a href="/profil/alamat" class="list-group-item list-group-item-action d-flex justify-content-between">
                        <div>Alamat saya</div><i class="icon-laptop2"></i>
                    </a>
                    <a href="/profil/voucher" class="list-group-item list-group-item-action d-flex justify-content-between">
                        <div>Voucher</div><i class="icon-envelope2"></i>
                    </a>
                    <a href="/profil/pesanan" class="list-group-item list-group-item-action d-flex justify-content-between">
                        <div>Pesanan saya</div><i class="icon-credit-cards"></i>
                    </a>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="list-group-item list-group-item-action d-flex justify-content-between">
                        <div>Logout</div><i class="icon-line2-logout"></i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>

        </div>

    </div>

    <script>
        $(document).ready(function() {
            $('#provinsi').on('change', function() {
                var provinsi_id = $(this).val();
                if (provinsi_id) {
                    $.ajax({
                        url: '/getKota/' + provinsi_id,
                        type: "GET",
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        dataType: "json",
                        success: function(data) {
                            if (data) {
                                $('#kota').empty();
                                $('#kota').append(
                                    '<option hidden>Pilih Kota</option>');
                                $.each(data, function(key, kotas) {
                                    $('select[name="kota_id"]').append(
                                        '<option value="' + kotas.id + '">' +
                                        kotas.kota + '</option>');
                                });
                            } else {
                                $('#kota').empty();
                            }
                        }
                    });
                } else {
                    $('#kota').empty();
                }
            });

            $('#kota').on('change', function() {
                var kota_id = $(this).val();
                if (kota_id) {
                    $.ajax({
                        url: '/getKecamatan/' + kota_id,
                        type: "GET",
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        dataType: "json",
                        success: function(data) {
                            if (data) {
                                $('#kecamatan').empty();
                                $('#kecamatan').append(
                                    '<option hidden>Pilih kecamatan</option>');
                                $.each(data, function(key, kecamatans) {
                                    $('select[name="kecamatan_id"]').append(
                                        '<option value="' + kecamatans.id + '">' +
                                        kecamatans.kecamatan + '</option>');
                                });
                            } else {
                                $('#kecamatan').empty();
                            }
                        }
                    });
                } else {
                    $('#kecamatan').empty();
                }
            });

            $('#provinsiEdit').on('change', function() {
                var provinsi_id = $(this).val();
                if (provinsi_id) {
                    $.ajax({
                        url: '/getKota/' + provinsi_id,
                        type: "GET",
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        dataType: "json",
                        success: function(data) {
                            if (data) {
                                $('#kotaEdit').empty();
                                $('#kotaEdit').append(
                                    '<option hidden>Pilih Kota</option>');
                                $.each(data, function(key, kotas) {
                                    $('select[name="kota_id"]').append(
                                        '<option value="' + kotas.id + '">' +
                                        kotas.kota + '</option>');
                                });
                            } else {
                                $('#kotaEdit').empty();
                            }
                        }
                    });
                } else {
                    $('#kotaEdit').empty();
                }
            });

            $('#kotaEdit').on('change', function() {
                var kota_id = $(this).val();
                if (kota_id) {
                    $.ajax({
                        url: '/getKecamatan/' + kota_id,
                        type: "GET",
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        dataType: "json",
                        success: function(data) {
                            if (data) {
                                $('#kecamatanEdit').empty();
                                $('#kecamatanEdit').append(
                                    '<option hidden>Pilih kecamatan</option>');
                                $.each(data, function(key, kecamatans) {
                                    $('select[name="kecamatan_id"]').append(
                                        '<option value="' + kecamatans.id + '">' +
                                        kecamatans.kecamatan + '</option>');
                                });
                            } else {
                                $('#kecamatanEdit').empty();
                            }
                        }
                    });
                } else {
                    $('#kecamatanEdit').empty();
                }
            });
        });
    </script>
@endsection
