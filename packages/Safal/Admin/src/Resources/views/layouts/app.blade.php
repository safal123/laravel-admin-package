<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="{{ asset('vendor/safal/admin/assets/css/admin.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    @include('admin::partials.navbar')
    <div class="flex ">
        @include('admin::partials.left-nav')
        <div class="w-full lg:w-5/6">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
