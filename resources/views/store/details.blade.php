@extends('layout')

@section('content')

<h2>{{ $album->title }}</h2>

<p>
    <img alt="Titulo" src="http://rymimg.com/lk/f/s/170f4f03dc7dc86ca1703c177c8051c7/4602065.jpg" />
</p>

<div id="album-details">
    <p>
        <em>Género:</em>
        {{ $album->genre->name }}
    </p>
    <p>
        <em>Artista:</em>
        {{ $album->artist }}
    </p>
    <p>
        <em>Precio:</em>
       $ {{ $album->price }}
    </p>
    <p class="button">
    	<a href="/cart/add/{{ $album->id }}">Agregar al carrito</a>
    </p>
</div>

@endsection