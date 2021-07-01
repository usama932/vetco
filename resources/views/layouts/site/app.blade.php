<!DOCTYPE html>
<html lang="en">

<head>

    @include('includes.site.head')

</head>
<body class="">

<div class="wrapper bg-white">

{{--    @include('includes.site.sidebar')--}}

    <div class="main-panel" style="width: 100%">

        @include('includes.site.header')

        @yield('content')

        @include('includes.site.footer')

{{--        @include('includes.site.extra')--}}

    </div>
</div>

@include('includes.site.script')

</body>

</html>

