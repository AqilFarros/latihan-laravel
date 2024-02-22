@extends('admin.parent')

@section('content')
    <div class="card p-4">
        <h1>Category Index</h1>

        <hr>

        <div class="container d-flex justify-content-end">
            <a href="{{ route('category.create') }}" class="btn btn-success">Create Category</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success mt-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Name</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->name }}</td>
                        <td>
                            <a href="{{ route('category.show', $row->id) }}" class="btn btn-info">Laravel Nih Boss!!!</a>
                            <a href="{{ route('category.edit', $row->id) }}" class="btn btn-warning">Laravel Update Boss!!!</a>
                            <form action="{{ route('category.destroy', $row->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    
                                    LARAVEL!!!
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
