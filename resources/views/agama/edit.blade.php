@extends('layout.master')

@section('judul')
Edit Agama
@endsection

@section('content')

<h2>Edit Agama {{ $agama->id }}</h2>
<form action="/agama/{{ $agama->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Nama Agama</label>
        <input type="text" class="form-control" name="nama_agama" value="{{ $agama->nama_agama }}" placeholder="Masukkan Nama Agama">
        @error('nama_agama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection
