<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Todo App')</title>
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    @yield('style') <!-- Section for page-specific styles -->
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
    @yield('content') <!-- Section for page-specific content -->
    <script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>