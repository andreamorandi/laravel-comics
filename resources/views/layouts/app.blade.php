<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laravel DC Comics</title>
    @vite('resources/js/app.js')
</head>

<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.banner')

    @include('partials.footer')
</body>

</html>
