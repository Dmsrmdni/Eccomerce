@extends('user.layouts.users')

@section('content')
    {{-- Canvas --}}
    <div class="container clearfix">
        <div class="row align-items-center col-mb-50">
            <div class="col-md-5 center">
                <img data-animate="fadeInLeft"
                    src="https://im.uniqlo.com/global-cms/spa/resed6e80a95f6df2fda0fba1ed69c53297fr.jpg" class="rounded"
                    style="width: 700px" alt="Iphone">
            </div>

            <div class="col-md-7 text-center text-md-start">
                <div class="heading-block border-bottom-0">
                    <h3>Tentang gakuniq</h3>
                </div>
                <p class="fs-5" style="margin-top: -50px">gakuniq adalah salah satu brand fashion asal indonesia yang
                    mengedepankan kualitas dan
                    desain produknya yang cocok baik untuk kegiatan sehari-hari maupun traveling</p>
                <p class="fs-5">kami berupaya menginspirasi generasi muda indonesia agar semakin mencintai budaya dan
                    produk dalam negri </p>

                <a href="/produk" class="button button-black button-rounded button-large" style="margin-top: -100px">Belanja
                    Sekarang</a>
            </div>
        </div>
    </div>
    {{-- EndCanvas --}}
@endsection
