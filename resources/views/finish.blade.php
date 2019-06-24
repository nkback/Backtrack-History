@extends('generic.app')

@section('content')
    <form method="POST" action="{{route('add-audio')}}">
        @csrf
        <div class="container">
            <div style="margin-top: 50px;">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-header">Upload Complete!</div>
                            <div class="card-body">
                                Your upload for "{{$episode->title}}" has been completed. You can see it with the other episodes. Good job Stubies.
                                <div class="form-group row mb-0">
                                    <div class="float-left" style="margin-left: 14px; margin-top: 10px;">
                                        <a href="/" class="btn btn-primary">
                                            Home
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                &nbsp;
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%;">100%</div>
                </div>
            </div>
        </div>
    </form>
@endsection
