
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard Template · Bootstrap v5.1</title>
    @include('components.admin.base.header')
</head>
<body>
@include('components.admin.base.toolbar')
<div class="container-fluid d-flex">
        @include('components.admin.base.menu')
        <div class="container-fluid">
            @yield('content')
        </div>
</div>
@include('components.admin.base.scripts')
</body>
</html>
