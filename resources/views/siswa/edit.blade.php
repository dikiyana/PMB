@extends('layout.master')

@section('judul')
Edit Data Siswa
@endsection

@section('content')

<h2>Edit Siswa: {{ $siswa->nama_peserta_didik }}</h2>

<form action="/siswa/{{ $siswa->id }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Nama Peserta Didik</label>
        <input type="text" class="form-control" name="nama_peserta_didik" value="{{ old('nama_peserta_didik', $siswa->nama_peserta_didik) }}">
        @error('nama_peserta_didik')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Tempat Lahir</label>
        <input type="text" class="form-control" name="tempat_lahir" value="{{ old('tempat_lahir', $siswa->tempat_lahir) }}">
        @error('tempat_lahir')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" class="form-control" name="tanggal_lahir" value="{{ old('tanggal_lahir', $siswa->tanggal_lahir) }}">
        @error('tanggal_lahir')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-control">
            <option value="">-- Pilih Jenis Kelamin --</option>
            <option value="Laki-laki" {{ old('jenis_kelamin', $siswa->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
            <option value="Perempuan" {{ old('jenis_kelamin', $siswa->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
        </select>
        @error('jenis_kelamin')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Agama</label>
        <select name="agama_id" class="form-control">
            <option value="">-- Pilih Agama --</option>
            @foreach ($agama as $item)
                <option value="{{ $item->id }}" {{ old('agama_id', $siswa->agama_id) == $item->id ? 'selected' : '' }}>
                    {{ $item->nama_agama }}
                </option>
            @endforeach
        </select>
        @error('agama_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control">{{ old('alamat', $siswa->alamat) }}</textarea>
        @error('alamat')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Nomor Telepon</label>
        <input type="text" class="form-control" name="nomor_telepon" value="{{ old('nomor_telepon', $siswa->nomor_telepon) }}">
        @error('nomor_telepon')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
</form>

@endsection
