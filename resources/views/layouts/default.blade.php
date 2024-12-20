<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Todo App')</title>
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    @yield('style') <!-- Section for page-specific styles -->
</head>

<body class="d-flex flex-column h-100">
    @include("include.header")
    @yield("content") <!-- Section for page-specific content -->
    @include("include.footer")
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
</body>
</html>