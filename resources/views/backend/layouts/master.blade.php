<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- BEGIN: Head -->
<head>
    <title>@yield('title') - {{ config('app.name', 'Apple') }}</title>
    @include('backend.layouts._head')
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="app">
<!-- BEGIN: Mobile Menu -->
@include('backend.layouts._mobileNav')
<!-- END: Mobile Menu -->
<div class="flex">
    <!-- BEGIN: Side Menu -->
    @include('backend.layouts._sideNav')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        @include('backend.layouts._topBar')
        <!-- END: Top Bar -->
        <div class="grid grid-cols-12 gap-6 mt-8">

            <div class="col-span-12 lg:col-span-12 xxl:col-span-12">
                <!-- BEGIN: Inbox Filter -->
{{--                @include('backend.layouts._indexFilter')--}}
                <!-- END: Inbox Filter -->

                <!-- BEGIN: Inbox Content -->
                @yield('mainContent')
                <!-- END: Inbox Content -->
            </div>
        </div>
    </div>
    <!-- END: Content -->
</div>
<!-- BEGIN: JS Assets-->
@include('backend.layouts._footerScript')
<!-- END: JS Assets-->
</body>
</html>

