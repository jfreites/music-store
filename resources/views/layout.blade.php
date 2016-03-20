<!DOCTYPE html>
<html>
<head>
    <title>Laravel Music Store</title>
    <link href="/css/site.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-1.12.1.min.js" type="text/javascript"></script>
</head>
<body>
    <div id="header">
        <h1><a href="/">LARAVEL MUSIC STORE</a></h1>
        <ul id="navlist">
            <li class="first"><a href="/" id="current">Inicio</a></li>
            <li><a href="/store">Tienda</a></li>
            <li><a href="/cart">Carrito</a></li>
            <li><a href="/admin">Admin</a></li>
        </ul>        
    </div>

    <ul id="categories">
    @foreach ($genresList as $genre)
        <li><a href="/store/browse/{{ $genre->id }}">{{ $genre->name }}</a></li>
    @endforeach
    </ul>

    <div id="main">
        @if (session('flash_message'))
            <div class="alert alert-success">
                {{ session('flash_message') }}
            </div>
        @endif

        @yield('content')
    </div>

    <div id="footer">
        Proyecto web de una tienda musical usando <a href="http://laravel.com">Laravel 5.2</a>
    </div>
</body>
</html>