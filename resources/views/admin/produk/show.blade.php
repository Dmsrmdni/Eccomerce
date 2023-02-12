@extends('admin.layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-7">
        <div class="card mb-4 shadow-lg rounded card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Data Produk</h4>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <input type="text" name="kategori_id"
                        class="form-control mb-2  @error('kategori_id') is-invalid @enderror" placeholder="Nama Produk"
                        value="{{ $produks->kategori->name }}" readonly>
                    @error('kategori_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Sub Kategori</label>
                    <input type="text" name="subKategori_id"
                        class="form-control mb-2  @error('subKategori_id') is-invalid @enderror"
                        placeholder="Nama Produk" value="{{ $produks->subKategori->name }}" readonly>
                    @error('subKategori_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Produk</label>
                    <input type="text" name="nama_produk"
                        class="form-control mb-2  @error('nama_produk') is-invalid @enderror" placeholder="Nama Produk"
                        value="{{ $produks->nama_produk }}" readonly>
                    @error('nama_produk')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Hpp Produk</label>
                    <input type="number" name="hpp" class="form-control mb-2  @error('hpp') is-invalid @enderror"
                        placeholder="hpp Produk" value="{{ $produks->hpp }}" readonly>
                    @error('hpp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga Produk</label>
                    <input type="number" name="harga" class="form-control mb-2  @error('harga') is-invalid @enderror"
                        placeholder="Harga Produk" value="{{ $produks->harga }}" readonly>
                    @error('harga')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Stok Produk</label>
                    <input type="number" name="stok" class="form-control mb-2  @error('stok') is-invalid @enderror"
                        placeholder="stok Produk" value="{{ $produks->stok }}" readonly>
                    @error('stok')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Diskon Produk</label>
                    <div class="input-group mb-3">
                        <input type="number" name="diskon"
                            class="form-control mb-2  @error('diskon') is-invalid @enderror" placeholder="diskon Produk"
                            value="{{ $produks->diskon }}" readonly>
                        <button class="btn btn-secondary mb-2" type="button">%</button>
                        @error('diskon')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="required form-label">Deskripsi Produk</label>
                    {{-- <textarea name="deskripsi" cols="30" rows="7"
                        class="form-control mb-2  @error('deskripsi') is-invalid @enderror" placeholder="deskripsi"
                        readonly></textarea> --}}
                    {!! $produks->deskripsi !!}
                    @error('deskripsi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="d-flex float-start">
            <a href="/admin/produk" class="btn btn-danger me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                    fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
                </svg> Kembali</a>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="card mb-4 shadow-lg overflow-scroll rounded card" style="height: 500px">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Data Image Produk</h4>
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    @foreach ($images as $image)
                    <div class="col-md-6 col-lg-6 mb-4">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ asset($image->gambar_produk) }}" alt="Card image cap" />
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection