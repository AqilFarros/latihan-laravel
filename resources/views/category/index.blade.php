@extends('admin.parent')

@section('content')
    <div class="card p-4">
        <h1>Category Index</h1>

        <hr>

        <div class="container d-flex justify-content-end">
            <a href="{{ route('category.create') }}" class="btn btn-success">Create Category</a>
        </div>
    </div>
@endsection
