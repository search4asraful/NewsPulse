<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>NewsPulse</title>
    <meta name="description" content="NewsPulse">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS here -->
    @include('frontend.includes.style')
</head>
<body>

    <!-- Scroll-top -->
    @include('frontend.includes.backTop')
    <!-- Scroll-top-end-->

    <!-- header-area -->
        @include('frontend.includes.header')
   <!-- header-area-end -->


    <!-- main-area -->
    @yield('content')
    <!-- main-area-end -->


    <!-- footer-area -->
    @include('frontend.includes.footer')
    <!-- footer-area-end -->

    <!-- JS here -->
    @include('frontend.includes.script')
</body>
</html>