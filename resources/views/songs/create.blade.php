@extends('layouts.sb-admin')

@section('content')
<div id="dashboard-content" class="container-fluid px-4">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow shadow-border rounded mb-5">
                <div class="card-header">
                    <h6 class="text-muted text-uppercase my-2">Add New Song</h6>
                </div>
                <div class="card-body">
                <form action="{{ url('/songs') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="artist">Artist</label>
                        <input type="text" class="form-control" id="artist" name="artist" required>
                    </div>
                    <div class="form-group">
                        <label for="lyrics">Lyrics</label>
                        <textarea rows="10" cols="50" class="form-control" id="lyrics" name="lyrics" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection