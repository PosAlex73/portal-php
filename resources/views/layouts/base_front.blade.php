<!doctype html>
<html lang="en">
<head>
@include('components.front.base.header')
<title>{{ Set::get('site_title') }}</title>
</head>
<body>
@include('components.front.base.toolbar')
@yield('content')
</body>
@include('components.front.base.footer')
@include('components.front.base.scripts')
</html>
