@extends('admin.layouts.base')

@section('mainContent')
    {{-- @if (session('deleted'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {!! session('deleted') !!}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
    @endif --}}
    <h1>Posts</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>titolo</th>
                <th>genere</th>
                <th>copertina</th>
                <th>console</th>
                <th>store</th>
                <th class="actions">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($games as $game)
                <tr data-id="{{ $game->slug }}">
                    <td>{{ $game->id }}</td>
                    <td>{{ $game->titolo }}</td>
                    <td>{{ $game->genere }}</td>
                    <td><img src="{{$game->copertina}}" alt=""></td>
                    <td>{{ $game->console }}</td>
                    <td>{{ $game->store}}</td>
                    

                    <td class="actions">
                        {{-- <a href="{{ route('admin.create', ['game' => $game]) }}" class="btn btn-primary">Create new game</a> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $games->links() }}

    {{-- <section class="overlay d-none">
        <form class="popup" data-action="{{ route('admin.posts.destroy', ['post' => '*****']) }}" method="post">
            @csrf
            @method('DELETE')

            <h1>Sei sicuro?</h1>
            <button type="submit" class="btn btn-warning js-yes">Yes</button>
            <button type="button" class="btn btn-danger js-no">No</button>
        </form>
    </section> --}}
@endsection