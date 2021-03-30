<meta name="csrf-token" content="{{ csrf_token() }}">
<meta charset="utf-8">
<link href="{{ asset('backend/dist/images/logo.svg') }}" rel="shortcut icon">
<meta name="description" content="@yield('meta_description','Text text Text')">
<meta name="keywords" content="@yield('meta_keywords','apol, apolbd, profile')">
<meta name="author" content="@yield('meta_author','Apol')">
<!-- BEGIN: CSS Assets-->
<link rel="stylesheet" href="{{ asset('backend/dist/css/app.css') }}" />

@yield('extraVendorCSS')
