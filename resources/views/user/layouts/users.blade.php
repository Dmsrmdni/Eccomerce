{{-- MaleTempalte --}}
{{--
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('user.layouts.components.top')
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    @include('admin.layouts.components.alert')

    @include('user.layouts.components.navbar')

    @yield('content')

    @include('user.layouts.components.footer')

    <!-- Js Plugins -->
    @include('user.layouts.components.bottom')
</body>

</html> --}}

{{-- Male Template --}}

{{-- Canvas --}}

<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('user.layouts.components.top')

</head>

<body class="stretched">

    @include('admin.layouts.components.alert')

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        {{-- Navbar --}}
        @include('user.layouts.components.navbar')
        {{-- EndNavbar --}}

        <!-- Content
  ============================================= -->
        <section id="content">
            <div class="content-wrap">
                @yield('content')
            </div>
        </section>
        <!-- #content end -->

        <!-- Footer-->
        @include('user.layouts.components.footer')
        <!-- #footer end -->

    </div>
    <!-- #wrapper end -->

    @include('user.layouts.components.bottom')

</body>

</html>

{{-- EndCanvas --}}
