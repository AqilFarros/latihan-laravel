@extends('admin.parent')

@section('content')

<div class="card p4">

    <label for="">Name</label>
    <input type="text" value="{{ $category->name }}" class="form-control" disabled>

    <label for="">Id</label>
    <input type="text" value="{{ $category->id }}" class="form-control" disabled>

</div>

name: {{ $category->name }}
id: {{ $category->id }}

@endsection