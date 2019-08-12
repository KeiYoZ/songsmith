@extends('layouts.sb-admin')

@section('content')
<div id="dashboard-content" class="container-fluid px-4">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow shadow-border rounded mb-5">
                <div class="card-header">
                    <h6 class="text-muted text-uppercase my-2">Edit Song Detail</h6>
                </div>
                <div class="card-body">
                <form action="{{ url('/songs/'.$song->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$song->title}}" required>
                    </div>
                    <div class="form-group">
                        <label for="artist">Artist</label>
                        <input type="text" class="form-control" id="artist" name="artist" value="{{$song->artist}}" required>
                    </div>
                    <div class="form-group">
                        <label for="lyrics">Lyrics</label>
                        <textarea rows="10" cols="50" class="form-control" id="lyrics" name="lyrics" required>{{$song->lyrics}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection