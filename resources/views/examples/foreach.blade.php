@extends('layout')

@section('title', 'Ejemplo de Foreach')

@section('content')
    <h2>Ejemplo de Foreach</h2>
    <ul>
        @foreach ($nombres as $nombre)
            <li>{{ $nombre }}</li>
        @endforeach
    </ul>
@endsection
