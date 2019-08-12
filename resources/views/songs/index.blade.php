@extends('layouts.sb-admin')

@section('content')
<div id="dashboard-content" class="container-fluid px-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-white">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><strong>Songs</strong></li>
        </ol>
    </nav>

    <a href="{{url('songs/create')}}" class="btn btn-primary mb-3"><i class="fa fa-plus" aria-hidden="true"></i> Add New Song</a>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-light">
            <tr>
                <th>Title</th>
                <th>Artist</th>
                <th>Date Created</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($songs as $song)
            <tr>
                
                <td>{{$song->title}}</td>
                <td>{{$song->artist}}</td>
                <td>{{ date('Y-m-d', strtotime($song->created_at))}}</td>
                <td>
                    <a href="{{url('songs/'.$song->id)}}" title="View Song Details"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    <a href="{{url('songs/'.$song->id.'/edit')}}" title="Edit Song Details"><i class="fa fa-edit" aria-hidden="true"></i></a>
                    <a href="{{url('songs/'.$song->id.'/delete')}}" style="color:red;" title="Delete Song"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
