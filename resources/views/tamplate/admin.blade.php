@include('tamplate.header')

@include('tamplate.menu_admin')

<!-- Hero Section Begin -->
@yield('content')
<!-- Blog Section End -->
<!-- Footer Section Begin -->
@include('tamplate.footer')
<!-- Footer Section End -->
@stack('script')
