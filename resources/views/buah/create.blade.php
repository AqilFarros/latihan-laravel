@extends('admin.parent')

@section('content')
    <div class="card p-4">

        <h1>Create Buah</h1>

        <form action="{{ route('buah.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-floating mb-3">
                <div class="row my-3">
                    <label for="floatingInput">Nama Buah</label>
                    <input type="text" class="form-control" id="floatingInput" placeholder="Nama Buah" name="name">
                </div>

                <div class="row my-3">
                    <label for="hargaBuah">Harga</label>
                    <input type="number" class="form-control" id="hargaBuah" placeholder="Harga" name="harga">
                </div>

                <div class="row my-3">
                    <label for="warnaBuah">Warna</label>
                    <input type="text" class="form-control" id="warnaBuah" placeholder="Warna" name="warna">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>

        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>
@endsection
