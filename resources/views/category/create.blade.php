@extends('admin.parent')

@section('content')
    <div class="card p-4">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1>Create Category</h1>

        <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Kesehatan" name="name">
                <label for="floatingInput">Name Category</label>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>

        </form>

    </div>
@endsection
