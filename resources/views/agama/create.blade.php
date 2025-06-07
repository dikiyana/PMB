@extends('layout.master')

@section('judul')
Tambah Agama
@endsection

@section('content')
        <form action="/agama" method="POST">
            @csrf
            <div class="form-group">
                <label>Nama Agama</label>
                <input type="text" class="form-control" name="nama_agama" placeholder="Masukkan Nama Agama">
                @error('nama_agama')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
@endsection