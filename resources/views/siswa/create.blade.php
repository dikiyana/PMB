@extends('layout.master')

@section('judul')
Formulir Siswa
@endsection

@section('content')
        <form action="/siswa" method="POST">
            @csrf
            <div class="form-group">
                <label>Nama Siswa</label>
                <input type="text" class="form-control" name="nama_peserta_didik" placeholder="Masukkan Nama Siswa">
                @error('nama_peserta_didik')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukkan Tempat Lahir">
                @error('tempat_lahir')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir">
                @error('tanggal_lahir')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

        <div class="form-group">
            <label>Jenis Kelamin</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="Laki-laki">
                <label class="form-check-label" for="laki">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
                <label class="form-check-label" for="perempuan">Perempuan</label>
            </div>
            @error('jenis_kelamin')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

            <div class="form-group">
                <label>Agama</label>
                <select name="agama_id" class="form-control">
                    <option value="">-- Pilih Agama --</option>
                    @foreach($agama as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_agama }}</option>
                    @endforeach
                </select>
                @error('agama_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" placeholder="Masukkan Alamat Lengkap"></textarea>
                @error('alamat')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Nomor Telepon</label>
                <input type="text" class="form-control" name="nomor_telepon" placeholder="08xxxxxxxxxx">
                @error('nomor_telepon')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
@endsection