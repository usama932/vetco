<!DOCTYPE html>
<html lang="en">

<head>

    @include('includes.auth.head')

</head>
<body class="">

<div class="wrapper bg-white">

    {{--    @include('includes.auth.sidebar')--}}

    <div class="main-panel" style="width: 100%">

        @include('includes.auth.header')

        @yield('content')

        @include('includes.auth.footer')

        {{--        @include('includes.auth.extra')--}}

    </div>
</div>

@include('includes.auth.script')

@yield('page-script')

</body>

</html>
