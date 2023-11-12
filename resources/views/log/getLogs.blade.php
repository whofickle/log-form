@extends('master')

@section('title')
    All Logs
@endsection

@section('content')
    
<div class="container mt-5 logsView">
    <div class="title text-center">
        <h1>All Logs</h1>
    </div>

    <div class="table-responsive logTable mt-3">
        <table class="table table-bordered table-striped">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Filename</th>
                    <th>Uploaded by</th>
                    <th>Uploaded at</th>
                    <th>File Path</th>
                    <th>To File</th>
                </tr>
            </thead>
            <tbody>
                @foreach($logs as $log)
                    <tr>
                        <td>{{ $log->log_id }}</td>
                        <td>{{ $log->name }}</td>
                        <td><a href="{{ url('/users/'.$log->user_id) }}">{{ $log->user_id }}</a></td>
                        <td>{{ $log->created_at }}</td>
                        <td>{{ $log->file_path }}</td>
                        <td><a href="{{ url('/logs/'.$log->log_id) }}" class="btn btn-primary btn-sm">View File</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
