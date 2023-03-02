<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    @include('user.layouts.components.top')

</head>

<body class="stretched">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">

        {{-- Navbar --}}
        @include('user.layouts.components.navbar')
        {{-- EndNavbar --}}

        <section id="slider"
            class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header">
            <div class="slider-inner">

                <div class="swiper-container swiper-parent">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide dark">
                            <div class="container">
                                <div class="slider-caption slider-caption-center">
                                    <h2 data-animate="fadeInUp">Welcome to Canvas</h2>
                                    <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Create just
                                        what you need for your Perfect Website. Choose from a wide range of Elements
                                        &amp; simply put them on your own Canvas.</p>
                                </div>
                            </div>
                            <div class="swiper-slide-bg"
                                style="background-image: url({{asset('user/assets/images/slider/swiper/1.jpg')}});">
                            </div>
                        </div>
                        <div class="swiper-slide dark">
                            <div class="container">
                                <div class="slider-caption slider-caption-center">
                                    <h2 data-animate="fadeInUp">Beautifully Flexible</h2>
                                    <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Looks
                                        beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with
                                        Responsive functionality that can be adapted to any screen size.</p>
                                </div>
                            </div>
                            <div class="video-wrap">
                                <video id="slide-video"
                                    poster="{{asset('user/assets/images/videos/explore-poster.jpg')}}" preload="auto"
                                    loop autoplay muted>
                                    <source src="{{asset('user/assets/images/videos/explore.webm')}}"
                                        type='video/webm' />
                                    <source src="{{asset('user/assets/images/videos/explore.mp4')}}" type='video/mp4' />
                                </video>
                                <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="container">
                                <div class="slider-caption">
                                    <h2 data-animate="fadeInUp">Great Performance</h2>
                                    <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">You'll be
                                        surprised to see the Final Results of your Creation &amp; would crave for more.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide-bg"
                                style="background-image: url({{asset('user/assets/images/slider/swiper/3.jpg')}}); background-position: center top;">
                            </div>
                        </div>
                    </div>
                    <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
                    <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
                </div>

                <a href="#" data-scrollto="#content" data-offset="100" class="one-page-arrow dark"><i
                        class="icon-angle-down infinite animated fadeInDown"></i></a>

            </div>
        </section>

        <!-- Content
		============================================= -->
        <section id="content">
            <div class="content-wrap">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-5">
                            <div class="heading-block">
                                <h1>Welcome to Canvas.<br>MultiPurpose Template.</h1>
                            </div>
                            <p class="lead">Create a website that you are gonna be proud of. Be it Business, Portfolio,
                                Agency, Photography, eCommerce &amp; much more.</p>
                        </div>

                        <div class="col-lg-7 align-self-end">

                            <div class="position-relative overflow-hidden">
                                <img src="{{asset('user/assets/images/services/main-fbrowser.png')}}"
                                    data-animate="fadeInUp" data-delay="100" alt="Chrome">
                                <img src="{{asset('user/assets/images/services/main-fmobile.png')}}"
                                    style="top: 0; left: 0; min-width: 100%; min-height: 100%;" data-animate="fadeInUp"
                                    data-delay="400" alt="iPhone" class="position-absolute">
                            </div>

                        </div>

                    </div>
                </div>

                <div class="container clearfix">

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

                            <div class="feature-box flex-md-row-reverse text-md-end mt-5" data-animate="fadeIn"
                                data-delay="200">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-line-paper"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Extensive Documentation</h3>
                                    <p>We have covered each &amp; everything in our Docs including Videos &amp;
                                        Screenshots.</p>
                                </div>
                            </div>

                            <div class="feature-box flex-md-row-reverse text-md-end mt-5" data-animate="fadeIn"
                                data-delay="400">
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

                </div>


                <div class="container clearfix">

                    <div class="row align-items-center col-mb-50">
                        <div class="col-md-4 center">
                            <img data-animate="fadeInLeft" src="{{asset('user/assets/images/services/iphone6.png')}}"
                                alt="Iphone">
                        </div>

                        <div class="col-md-8 text-center text-md-start">
                            <div class="heading-block border-bottom-0">
                                <h3>Optimized for Mobile &amp; Touch Enabled Devices.</h3>
                            </div>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quod consequuntur
                                quibusdam, enim expedita sed quia nesciunt incidunt accusamus necessitatibus modi
                                adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosam!</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti vero, animi suscipit
                                id facere officia. Aspernatur, quo, quos nisi dolorum aperiam fugiat deserunt velit
                                rerum laudantium cum magnam.</p>

                            <a href="#"
                                class="button button-border button-dark button-rounded button-large ms-0 topmargin-sm">Learn
                                more</a>
                        </div>
                    </div>

                </div>

                {{-- <div class="container clearfix">

                    <div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="60"
                        data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2"
                        data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6">

                        <div class="oc-item"><a href="#"><img src="{{asset('user/assets/images/clients/1.png')}}"
                                    alt="Clients"></a></div>
                        <div class="oc-item"><a href="#"><img src="{{asset('user/assets/images/clients/2.png')}}"
                                    alt="Clients"></a></div>
                        <div class="oc-item"><a href="#"><img src="{{asset('user/assets/images/clients/3.png')}}"
                                    alt="Clients"></a></div>
                        <div class="oc-item"><a href="#"><img src="{{asset('user/assets/images/clients/4.png')}}"
                                    alt="Clients"></a></div>
                        <div class="oc-item"><a href="#"><img src="{{asset('user/assets/images/clients/5.png')}}"
                                    alt="Clients"></a></div>
                        <div class="oc-item"><a href="#"><img src="{{asset('user/assets/images/clients/6.png')}}"
                                    alt="Clients"></a></div>
                        <div class="oc-item"><a href="#"><img src="{{asset('user/assets/images/clients/7.png')}}"
                                    alt="Clients"></a></div>
                        <div class="oc-item"><a href="#"><img src="{{asset('user/assets/images/clients/8.png')}}"
                                    alt="Clients"></a></div>
                        <div class="oc-item"><a href="#"><img src="{{asset('user/assets/images/clients/9.png')}}"
                                    alt="Clients"></a></div>
                        <div class="oc-item"><a href="#"><img src="{{asset('user/assets/images/clients/10.png')}}"
                                    alt="Clients"></a></div>

                    </div>


                </div> --}}
            </div>
        </section><!-- #content end -->

        <!-- Footer
		============================================= -->
        <footer id="footer" class="dark">
            <div class="container">

                <!-- Footer Widgets
				============================================= -->
                <div class="footer-widgets-wrap">

                    <div class="row col-mb-50">
                        <div class="col-lg-8">

                            <div class="row col-mb-50">
                                <div class="col-md-4">

                                    <div class="widget clearfix">

                                        <img src="{{asset('user/assets/images/footer-widget-logo.png')}}" alt="Image"
                                            class="footer-logo">

                                        <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp;
                                            <strong>Flexible</strong> Design Standards.
                                        </p>

                                        <div
                                            style="background: url({{asset('user/assets/images/world-map.png')}} no-repeat center center; background-size: 100%;">
                                            <address>
                                                <strong>Headquarters:</strong><br>
                                                795 Folsom Ave, Suite 600<br>
                                                San Francisco, CA 94107<br>
                                            </address>
                                            <abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547
                                            632521<br>
                                            <abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>
                                            <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="widget widget_links clearfix">

                                        <h4>Blogroll</h4>

                                        <ul>
                                            <li><a href="https://codex.wordpress.org/">Documentation</a></li>
                                            <li><a
                                                    href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a>
                                            </li>
                                            <li><a href="https://wordpress.org/extend/plugins/">Plugins</a></li>
                                            <li><a href="https://wordpress.org/support/">Support Forums</a></li>
                                            <li><a href="https://wordpress.org/extend/themes/">Themes</a></li>
                                            <li><a href="https://wordpress.org/news/">Canvas Blog</a></li>
                                            <li><a href="https://planet.wordpress.org/">Canvas Planet</a></li>
                                        </ul>

                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="widget clearfix">
                                        <h4>Recent Posts</h4>

                                        <div class="posts-sm row col-mb-30" id="post-list-footer">
                                            <div class="entry col-12">
                                                <div class="grid-inner row">
                                                    <div class="col">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a>
                                                            </h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li>10th July 2021</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="entry col-12">
                                                <div class="grid-inner row">
                                                    <div class="col">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a>
                                                            </h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li>10th July 2021</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="entry col-12">
                                                <div class="grid-inner row">
                                                    <div class="col">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Debitis nihil placeat, illum est nisi</a>
                                                            </h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li>10th July 2021</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4">

                            <div class="row col-mb-50">
                                <div class="col-md-4 col-lg-12">
                                    <div class="widget clearfix" style="margin-bottom: -20px;">

                                        <div class="row">
                                            <div class="col-lg-6 bottommargin-sm">
                                                <div class="counter counter-small"><span data-from="50"
                                                        data-to="15065421" data-refresh-interval="80" data-speed="3000"
                                                        data-comma="true"></span></div>
                                                <h5 class="mb-0">Total Downloads</h5>
                                            </div>

                                            <div class="col-lg-6 bottommargin-sm">
                                                <div class="counter counter-small"><span data-from="100" data-to="18465"
                                                        data-refresh-interval="50" data-speed="2000"
                                                        data-comma="true"></span></div>
                                                <h5 class="mb-0">Clients</h5>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-5 col-lg-12">
                                    <div class="widget subscribe-widget clearfix">
                                        <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing
                                            Offers &amp; Inside Scoops:</h5>
                                        <div class="widget-subscribe-form-result"></div>
                                        <form id="widget-subscribe-form" action="include/subscribe.php" method="post"
                                            class="mb-0">
                                            <div class="input-group mx-auto">
                                                <div class="input-group-text"><i class="icon-email2"></i></div>
                                                <input type="email" id="widget-subscribe-form-email"
                                                    name="widget-subscribe-form-email"
                                                    class="form-control required email" placeholder="Enter your Email">
                                                <button class="btn btn-success" type="submit">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-md-3 col-lg-12">
                                    <div class="widget clearfix" style="margin-bottom: -20px;">

                                        <div class="row">
                                            <div class="col-6 col-md-12 col-lg-6 clearfix bottommargin-sm">
                                                <a href="#" class="social-icon si-dark si-colored si-facebook mb-0"
                                                    style="margin-right: 10px;">
                                                    <i class="icon-facebook"></i>
                                                    <i class="icon-facebook"></i>
                                                </a>
                                                <a href="#"><small style="display: block; margin-top: 3px;"><strong>Like
                                                            us</strong><br>on Facebook</small></a>
                                            </div>
                                            <div class="col-6 col-md-12 col-lg-6 clearfix">
                                                <a href="#" class="social-icon si-dark si-colored si-rss mb-0"
                                                    style="margin-right: 10px;">
                                                    <i class="icon-rss"></i>
                                                    <i class="icon-rss"></i>
                                                </a>
                                                <a href="#"><small
                                                        style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to
                                                        RSS Feeds</small></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div><!-- .footer-widgets-wrap end -->

            </div>
        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    @include('user.layouts.components.bottom')

</body>

</html>