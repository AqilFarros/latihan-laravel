@extends('admin.parent')

@section('content')
    <div class="card p4">

        <form action="{{ route("category.update", $category->id) }}" method="post">
            @csrf
            @method('PUT')

            {{-- METHOD POST = CREATE --}}
            {{-- METHOD DELETE = DELETE --}}
            {{-- METHOD PUT = UPDATE --}}
            {{-- METHOD PATCH = UPDATE --}}

            <label for="">Name</label>
            <input type="text" value="{{ $category->name }}" class="form-control" name="name">
        
            <button type="submit" class="btn btn-warning">Tutor Laravel!!!</button>
        </form>

    </div>

    name: {{ $category->name }}
    id: {{ $category->id }}
@endsection
