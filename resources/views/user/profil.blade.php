@extends('user.layouts.users')

@section('content')
{{--

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet"
        href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
        integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesgeet"
        href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">
</head> --}}

{{--

<body class="profile-page"> --}}
    {{-- <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg "
        color-on-scroll="100" id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="https://demos.creative-tim.com/material-kit/index.html"
                    target="_blank">Material Kit </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
                            <i class="material-icons">apps</i> Components
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="../index.html" class="dropdown-item">
                                <i class="material-icons">layers</i> All Components
                            </a>

                            <a href="https://demos.creative-tim.com/material-kit/docs/2.0/getting-started/introduction.html"
                                class="dropdown-item">
                                <i class="material-icons">content_paste</i> Documentation
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">
                            <i class="material-icons">cloud_download</i> Download
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://twitter.com/CreativeTim" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.facebook.com/CreativeTim" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> --}}

    <style>
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

    <div class="container">
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
                                                            {{-- <div class="form-group">
                                                                <label for="message-text"
                                                                    class="col-form-label">Message:</label>
                                                                <textarea class="form-control"
                                                                    id="message-text"></textarea>
                                                            </div> --}}
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
                            <a href="" class="btn btn-primary m-1">history barang</a>
                            <a href="" class="btn btn-primary m-1">dalam proses</a>
                            <a href="" class="btn btn-primary m-1">refund produk</a>
                            <a href="" class="btn btn-primary m-1">alamat</a>
                            <a href="" class="btn btn-primary m-1">Voucher Saya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
        integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"
        integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous">
    </script> --}}




    {{--
</body> --}}
@endsection