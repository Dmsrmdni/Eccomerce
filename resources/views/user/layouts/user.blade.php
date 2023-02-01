<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('user.layouts.components.top')
</head>

<body>

    @include('admin.layouts.components.alert')

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    @include('user.layouts.components.navbar')
    <!-- Header Section End -->

    @yield('content')

    <!-- Footer Section Begin -->
    @include('user.layouts.components.footer')
    <!-- Footer Section End -->

    <!-- Search Begin -->
    {{-- <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div> --}}
    <!-- Search End -->

    <!-- Js Plugins -->
    @include('user.layouts.components.bottom')
</body>

</html>
