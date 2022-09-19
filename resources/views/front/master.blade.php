<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.themefisher.com/biztrox/homepage-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Mar 2022 08:07:02 GMT -->
<head>
    <meta charset="utf-8">
    <title>BIZTROX</title>


    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    @include('front.includes.style')
</head>

<body>


<!-- preloader start -->
<div class="preloader">
    <img src="{{ asset('/')}}frontend/images/preloader.gif" alt="preloader">
</div>
<!-- preloader end -->
@include('front.includes.header')
<!-- /navigation -->
@yield('body')
<!-- footer -->
@include('front.includes.footer')
<!-- /footer -->

@include('front.includes.scripts')

</body>

<!-- Mirrored from demo.themefisher.com/biztrox/homepage-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Mar 2022 08:07:05 GMT -->
</html>
