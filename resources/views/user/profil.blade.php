@extends('user.layouts.user')

@section('content')
    <div class="container my-3">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="{{ asset($users->profile) }}" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4>{{ $users->name }}</h4>
                                <button class="btn btn-primary">Edit Image</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $users->email }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <a class="btn btn-primary " target="__blank"
                                    href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h3>Riwayat Transaksi</h3>
                    @foreach ($transaksis as $transaksi)
                        <div class="card">
                            <div class="card-body">
                                {{ $transaksi->transaksi->kode_transaksi }} /
                                {{ $transaksi->keranjang->produk->nama_produk }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
