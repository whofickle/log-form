@extends('master')

@section('title')
    {{ $username }}'s Files
@endsection

@section('content')
<div class="container mt-5 userView">
    <div class="title text-center">
        <h1>{{ $username }}'s Uploaded Files</h1>
    </div>

    <div class="table-responsive logTable mt-3">
        <table class="table table-bordered table-striped">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Filename</th>
                    <th>Uploaded at</th>
                    <th>File Path</th>
                    <th>To File</th>
                </tr>
            </thead>
            <tbody>
                @foreach($files as $file)
                    <tr>
                        <td>{{ $file->log_id }}</td>
                        <td>{{ $file->name }}</td>
                        <td>{{ $file->created_at }}</td>
                        <td>{{ $file->file_path }}</td>
                        <td><a href="{{ url('/logs/'.$file->log_id) }}" class="btn btn-primary btn-sm">View File</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
