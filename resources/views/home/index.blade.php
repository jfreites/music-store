@extends('layout')

@section('content')

	<div id="promotion">
	</div>

	<h3>Sacado del <em>horno</em></h3>

	<ul id="album-list">
		@foreach($latest as $album)
	        <li><a href="/store/details/{{ $album->id }}">
	            <img alt="Titulo" src="/images/placeholder.gif" />
	            <span><?= $album->title ?></span> </a>
	        </li>
	    @endforeach
	</ul>
@endsection

