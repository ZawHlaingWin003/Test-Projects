@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (session('success'))
                    <p class="alert alert-success">{{ session('success') }}</p>
                @endif

                <div class="card-header"><a href="/show-names">Back</a></div>

                <div class="container">
                    <table class="table">
                        <tr>
                            <th>Names</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($deletedNames as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>
                                <a href="{{ route('restore', $item->id) }}" onclick="return confirm('Are you sure?')" class="btn btn-success btn-sm">Restore</a>
                                <a href="{{ route('force-delete', $item->id) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete Forever</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
