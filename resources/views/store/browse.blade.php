@extends('layout')

@section('content')
 
<div class="genre">
    <h3>Albums de <em>{{ $genre->name }}</em></h3>
 
    <ul id="album-list">
        @if (count($albums) > 0)
            @foreach ($albums as $album)
                <li>
                    <a href="/store/details/{{ $album->id }}">
                        <img alt="{{ $album->title }}" src="/images/placeholder.gif" />
                        <span>{{ $album->title }}</span>
                    </a>
                </li>
            @endforeach
        @else
            <p>No existen albums en esta categoría.... aún ;)</p>
        @endif
    </ul>
</div>

@endsection
