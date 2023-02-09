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

</html>
