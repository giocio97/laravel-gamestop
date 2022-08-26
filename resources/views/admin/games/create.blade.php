@extends('admin.layouts.base')

@section('mainContent')

    <h1>Create new Game</h1>
    {{-- <form action="{{ route('admin.posts.store') }}" method="post" novalidate> --}}
    <form action="{{ route('admin.games.store') }}" method="post" novalidate enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label" for="titolo">Nome gioco</label>
            <input class="form-control @error('titolo') is-invalid @enderror" type="text" name="titolo" id="titolo" value="{{ old('titolo') }}">
            @error('titolo')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label" for="copertina">Copertina</label>
            <input class="form-control @error('copertina') is-invalid @enderror" type="file" name="copertina" id="copertina" accept="copertina/*">
            @error('copertina')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

            <img id="preview" class="img-fluid" src="">
        </div>

        <div class="mb-3">
            <label class="form-label" for="genere">Genere</label>
            <input class="form-control  @error('genere') is-invalid @enderror"  name="genere" id="genere" value="{{ old('genere') }}" type="text" >
            @error('genere')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label" for="console">Console</label>
            <input class="form-control  @error('console') is-invalid @enderror"  name="console" id="console" value="{{ old('console') }}" type="text" >
            @error('console')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>



        

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection