@extends('generic.app')

@section('content')
    <form method="POST" action="{{route('add-audio')}}">
        @csrf
        <div class="container">
            <div style="margin-top: 50px;">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-header">Upload Audio</div>
                            <div class="card-body">
                                <file-upload episode-id="{{$episodeId}}" url="{{route('add-audio')}}"></file-upload>
                                <div class="form-group row mb-0">
                                    <div class="float-left" style="margin-left: 14px; margin-top: 10px;">
                                        <a href="/post/finish/{{$episodeId}}" class="btn btn-primary">
                                            Continue
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                &nbsp;
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%;">75%</div>
                </div>
            </div>
        </div>
    </form>
@endsection
