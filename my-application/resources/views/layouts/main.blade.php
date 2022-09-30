<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Project | {{ $title }}</title>
    @vite('resources/css/app.css')
</head>
<body>

    @include('partials.navbar');

    <div class="container mt-4">
        @yield('container')
    </div>
</body>
</html>