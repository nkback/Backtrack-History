@extends('generic.app')

@section('content')
    <div class="container">
        <div style="margin-top: 50px;">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">Add Short Description</div>
                        <div class="card-body">
                            <div class="form-group row">
                                <textarea class="form-control" placeholder="This is a headline summary of your episode." rows="6"></textarea>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="float-left" style="margin-left: 14px; margin-top: 10px;">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
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
@endsection
