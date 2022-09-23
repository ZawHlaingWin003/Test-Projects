@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="/show-names?archieve">View archived names</a>
                </div>

                <div class="container">
                    <table class="table">
                        <tr>
                            <th>Names</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($names as $item)
                        <tr>
                            <td>{{ $item->name }}</td>

                            @if ($item->trashed())
                            <td>
                                <a href="{{ route('restore', $item->id) }}" onclick="return confirm('Are you sure?')" class="btn btn-success btn-sm">Restore</a>
                                <a href="{{ route('force-delete', $item->id) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete Forever</a>
                            </td>
                            @else
                            <td>
                                <a href="{{ route('delete-name', $item->id) }}" onclick="return confirm('Are you sure?')" class="btn btn-warning btn-sm">Delete</a>
                            </td>
                            @endif

                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
