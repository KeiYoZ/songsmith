@extends('layouts.sb-admin')

@section('content')
<div id="dashboard-content" class="container-fluid px-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow shadow-border rounded mb-5">
                <div class="card-header">
                    <h4 class="text-muted text-uppercase my-2">{{$song->title}}</h4>
                    <h6>{{$song->artist}}</h6>
                </div>
                <div class="card-body">
                    <p style="white-space: pre-line">{{$song->lyrics}}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection