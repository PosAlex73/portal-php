<!doctype html>
<html lang="en">
<head>
@include('components.front.base.header')
<title>{{ Set::get('site_title') }}</title>
</head>
<body>
@include('components.front.base.toolbar')
<div class="container">
    @yield('content')
</div>
</body>
@include('components.front.base.footer')
@include('components.front.base.scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
