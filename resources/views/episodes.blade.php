@extends('generic.app')

@section('content')
    <div id="episodes-content" style="margin: 50px 50px;">
        <h1>Backtrack History Episodes</h1>
        <hr>
        @foreach($episodes as $episode)

        @endforeach
    </div>
@endsection
