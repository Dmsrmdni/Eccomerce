@extends('admin.layouts.admin')

@section('content')
<form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-lg-12">
        <div class="card mb-4 shadow-lg rounded card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Data Produk</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Name Kategori</label>
                            <select name="kategori_id" id="kategori"
                                class="form-select @error('kategori_id') is-invalid @enderror">
                                @foreach ($kategoris as $kategori)
                                <option value="" hidden>Pilih Kategori</option>
                                <option value="{{ $kategori->id }}">{{ $kategori->name }}
                                </option>
                                @endforeach
                            </select>
                            @error('kategori_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Sub Kategori</label>
                            <select name="sub_kategori_id" id="sub_kategori"
                                class="form-select @error('sub_kategori_id') is-invalid @enderror">
                                <option value="" hidden>Pilih Kategori Terlebih dulu</option>
                            </select>
                            @error('sub_kategori_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" name="nama_produk"
                                class="form-control mb-2  @error('nama_produk') is-invalid @enderror"
                                placeholder="Nama Produk" value="{{ old('name_produk') }}">
                            @error('nama_produk')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Ukuran</label>
                            <select name="ukuran[]" id="ukuran"
                                class="form-control w-100 @error('kategori_id') is-invalid @enderror"
                                data-placeholder="Pilih Ukuran" data-allow-clear="true" multiple="multiple">
                                @foreach ($ukurans as $ukuran)
                                <option value="{{ $ukuran->id }}">{{ $ukuran->ukuran }}
                                </option>
                                @endforeach
                            </select>
                            @error('ukuran')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Hpp Produk</label>
                            <input type="number" name="hpp"
                                class="form-control numbers mb-2  @error('hpp') is-invalid @enderror"
                                placeholder="hpp Produk" value="0" min="0">
                            @error('hpp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Harga Produk</label>
                            <input type="number" name="harga"
                                class="form-control numbers mb-2  @error('harga') is-invalid @enderror"
                                placeholder="Harga Produk" value="0" min="0">
                            @error('harga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Stok Produk</label>
                            <input type="number" name="stok"
                                class="form-control numbers mb-2  @error('stok') is-invalid @enderror"
                                placeholder="stok Produk" value="0" min="0">
                            @error('stok')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Diskon Produk</label>
                            <div class="input-group mb-3">
                                <input type="number" name="diskon"
                                    class="form-control numbers mb-2  @error('diskon') is-invalid @enderror"
                                    placeholder="diskon Produk" value="0" min="0" max="100">
                                <button class="btn btn-secondary mb-2" type="button">%</button>
                                @error('diskon')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="required form-label">Deskripsi Produk</label>
                    <input id="deskripsi" value="{{ old('deskripsi') }}" type="hidden" name="deskripsi">
                    <trix-editor input="deskripsi"></trix-editor>
                    @error('deskripsi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">gambar produk</label>
                    <input type="file" class="form-control mb-2  @error('gambar_produk') is-invalid @enderror"
                        name="gambar_produk[]" value="{{ old('gambar_produk') }}" multiple>
                    @error('gambar_produk')
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
        <div class="d-flex float-end">
            <div class="col">
                <button type="reset" class="btn btn-secondary mx-3">
                    <span class="indicator-label"><svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor"
                            class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
                            <path
                                d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
                        </svg> Reset </span>
                </button>
                <button type="submit" class="btn btn-primary">
                    <span class="indicator-label"><svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor"
                            class="bi bi-send-fill" viewBox="0 0 16 16">
                            <path
                                d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z" />
                        </svg> Kirim </span>
                </button>
            </div>
        </div>
    </div>
</form>

<script>
    $(document).ready(function() {
            $('#kategori').on('change', function() {
                var kategori_id = $(this).val();
                if (kategori_id) {
                    $.ajax({
                        url: '/admin/getSub_kategori/' + kategori_id,
                        type: "GET",
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        dataType: "json",
                        success: function(data) {
                            if (data) {
                                $('#sub_kategori').empty();
                                $('#sub_kategori').append(
                                    '<option hidden>Pilih Sub Kategori</option>');
                                $.each(data, function(key, sub_kategori) {
                                    $('select[name="sub_kategori_id"]').append(
                                        '<option value="' + sub_kategori.id + '">' +
                                        sub_kategori.name + '</option>');
                                });
                            } else {
                                $('#sub_kategori').empty();
                            }
                        }
                    });
                } else {
                    $('#sub_kategori').empty();
                }
            });
        });
</script>

<script>
    $(document).ready(function() {
        $('#ukuran').select2({
        });
    });
</script>
@endsection