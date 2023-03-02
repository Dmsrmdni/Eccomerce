@extends('user.layouts.users')

@section('content')

{{-- Male --}}
{{--
<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__items set-bg" data-setbg="{{ asset('assets2/img/hero/hero-1.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6>Summer Collection</h6>
                            <h2>Fall - Winter Collections 2030</h2>
                            <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                commitment to exceptional quality.</p>
                            <a href="/shop" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__items set-bg" data-setbg="{{ asset('assets2/img/hero/hero-2.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6>Summer Collection</h6>
                            <h2>Fall - Winter Collections 2030</h2>
                            <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                commitment to exceptional quality.</p>
                            <a href="/shop" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Banner Section Begin -->
<section class="banner spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 offset-lg-4">
                <div class="banner__item">
                    <div class="banner__item__pic">
                        <img src="{{ asset('assets2/img/banner/banner-1.jpg') }}" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Clothing Collections 2030</h2>
                        <a href="/shop">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner__item banner__item--middle">
                    <div class="banner__item__pic">
                        <img src="{{ asset('assets2/img/banner/banner-2.jpg') }}" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Accessories</h2>
                        <a href="/shop">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="banner__item banner__item--last">
                    <div class="banner__item__pic">
                        <img src="{{ asset('assets2/img/banner/banner-3.jpg') }}" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Shoes Spring 2030</h2>
                        <a href="/shop">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Instagram Section Begin -->
<section class="instagram spad mb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="instagram__pic">
                    <div class="instagram__pic__item set-bg"
                        data-setbg="{{ asset('assets2/img/instagram/instagram-1.jpg') }}"></div>
                    <div class="instagram__pic__item set-bg"
                        data-setbg="{{ asset('assets2/img/instagram/instagram-2.jpg') }}"></div>
                    <div class="instagram__pic__item set-bg"
                        data-setbg="{{ asset('assets2/img/instagram/instagram-3.jpg') }}"></div>
                    <div class="instagram__pic__item set-bg"
                        data-setbg="{{ asset('assets2/img/instagram/instagram-4.jpg') }}"></div>
                    <div class="instagram__pic__item set-bg"
                        data-setbg="{{ asset('assets2/img/instagram/instagram-5.jpg') }}"></div>
                    <div class="instagram__pic__item set-bg"
                        data-setbg="{{ asset('assets2/img/instagram/instagram-6.jpg') }}"></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="instagram__text">
                    <h2>Instagram</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                    <h3>/shopMale_Fashion</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Instagram Section End --> --}}

{{-- EndMale --}}

{{-- Canvas --}}

<div class="container clearfix">
    <div class="row align-items-center col-mb-50">
        <div class="col-md-4 center">
            <img data-animate="fadeInLeft" src="{{ asset('assets2/img/banner/banner-1.jpg') }}" alt="Iphone">
        </div>

        <div class="col-md-8 text-center text-md-start">
            <div class="heading-block border-bottom-0">
                <h3>Tentang gakuniq</h3>
            </div>
            <p class="fs-5">gakuniq merupakan perusahan yang berjalan di bidang pakaian, perusahaan ini telah berdiri
                sejak tahun
                2000
                hingga sekarang </p>
            <p class="fs-5"> produk yang di hasilkan dari perusahaan ini terdiri dari pakaian pria,wanita maupun anak
                anak dengan
                model yang berbeda beda. produk ini menggunakan bahan yang berkualitas tinggi dengan harga yang
                terjangkau.</p>

            <a href="#" class="button button-border button-dark button-rounded button-large ms-0 topmargin-sm">Belanja
                Sekarang</a>
        </div>
    </div>
</div>

{{-- <div class="container clearfix">

    <div class="heading-block topmargin-lg center">
        <h2>Even more Feature Rich</h2>
        <span class="mx-auto">Philanthropy convener livelihoods, initiative end hunger gender rights
            local. John Lennon storytelling; advocate, altruism impact catalyst.</span>
    </div>

    <div class="row align-items-center col-mb-50 mb-4">
        <div class="col-lg-4 col-md-6">

            <div class="feature-box flex-md-row-reverse text-md-end" data-animate="fadeIn">
                <div class="fbox-icon">
                    <a href="#"><i class="icon-line-heart"></i></a>
                </div>
                <div class="fbox-content">
                    <h3>Boxed &amp; Wide Layouts</h3>
                    <p>Stretch your Website to the Full Width or make it boxed to surprise your
                        visitors.</p>
                </div>
            </div>

            <div class="feature-box flex-md-row-reverse text-md-end mt-5" data-animate="fadeIn" data-delay="200">
                <div class="fbox-icon">
                    <a href="#"><i class="icon-line-paper"></i></a>
                </div>
                <div class="fbox-content">
                    <h3>Extensive Documentation</h3>
                    <p>We have covered each &amp; everything in our Docs including Videos &amp;
                        Screenshots.</p>
                </div>
            </div>

            <div class="feature-box flex-md-row-reverse text-md-end mt-5" data-animate="fadeIn" data-delay="400">
                <div class="fbox-icon">
                    <a href="#"><i class="icon-line-layers"></i></a>
                </div>
                <div class="fbox-content">
                    <h3>Parallax Support</h3>
                    <p>Display your Content attractively using Parallax Sections with HTML5 Videos.</p>
                </div>
            </div>

        </div>

        <div class="col-lg-4 d-md-none d-lg-block text-center">
            <img src="{{asset('user/assets/images/services/iphone7.png')}}" alt="iphone 2">
        </div>

        <div class="col-lg-4 col-md-6">

            <div class="feature-box" data-animate="fadeIn">
                <div class="fbox-icon">
                    <a href="#"><i class="icon-line-power"></i></a>
                </div>
                <div class="fbox-content">
                    <h3>HTML5 Video</h3>
                    <p>Canvas provides support for Native HTML5 Videos that can be added to a
                        Background.</p>
                </div>
            </div>

            <div class="feature-box mt-5" data-animate="fadeIn" data-delay="200">
                <div class="fbox-icon">
                    <a href="#"><i class="icon-line-check"></i></a>
                </div>
                <div class="fbox-content">
                    <h3>Endless Possibilities</h3>
                    <p>Complete control on each &amp; every element that provides endless customization.
                    </p>
                </div>
            </div>

            <div class="feature-box mt-5" data-animate="fadeIn" data-delay="400">
                <div class="fbox-icon">
                    <a href="#"><i class="icon-bulb"></i></a>
                </div>
                <div class="fbox-content">
                    <h3>Light &amp; Dark Color Schemes</h3>
                    <p>Change your Website's Primary Scheme instantly by simply adding the dark class.
                    </p>
                </div>
            </div>

        </div>
    </div>

</div> --}}

{{-- EndCanvas --}}
@endsection