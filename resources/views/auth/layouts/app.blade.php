<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">


<title>@yield('title')</title>
<!-- BEGIN: Head-->
@include('auth.includes.head')

<!-- END: Head-->

<!-- BEGIN: Body-->

<body
    class="horizontal-layout horizontal-menu dark-layout 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page"
    data-open="hover" data-menu="horizontal-menu" data-col="1-column" data-layout="dark-layout">

    @yield('content')


     @include('auth.includes.foot')

</body>
<!-- END: Body-->

</html>
