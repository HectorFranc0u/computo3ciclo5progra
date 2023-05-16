<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white">
        <a class="nav-link" href="{{ URL::to('pet') }}">{{ __('Pets') }}</a>
    </nav>

    <div class="continer">
        @yield('content')
    </div>
</body>
</html>