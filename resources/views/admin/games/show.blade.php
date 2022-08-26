@extends('admin.layouts.base')

@section('mainContent')
    <h1>{{ $game->titolo }}</h1>
    <h2> {{ $game->genere }}</h2>
    <img src="{{ asset($game->copertina) }}" alt="{{$game->titolo}}">
    <h3>Game store: {{ $game->store }}</h3>
    <p>{{ $game->console }}</p>
@endsection