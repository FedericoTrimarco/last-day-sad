<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- scss --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <div id="app">
        @include('partials.header')
    
        <main>
            @yield('main-content')
        </main>
    
        <footer>footer here</footer>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>