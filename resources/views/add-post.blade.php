@extends('generic.app')

@section('content')
    <div class="container">
        <div id="app">
            <form method="POST" id="postForm" action="{{route('initial-post')}}">
                @csrf
                <add-post></add-post>
            </form>
        </div>
    </div>
@endsection
