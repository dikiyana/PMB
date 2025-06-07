@extends('layout.master')

@section('judul')
Detail Siswa
@endsection

@section('content')

<h2>Detail Siswa: {{ $siswa->nama_peserta_didik }}</h2>

<table class="table table-bordered">
    <tr>
        <th>Nama Peserta Didik</th>
        <td>{{ $siswa->nama_peserta_didik }}</td>
    </tr>
    <tr>
        <th>Tempat Lahir</th>
        <td>{{ $siswa->tempat_lahir }}</td>
    </tr>
    <tr>
        <th>Tanggal Lahir</th>
        <td>{{ $siswa->tanggal_lahir }}</td>
    </tr>
    <tr>
        <th>Jenis Kelamin</th>
        <td>{{ $siswa->jenis_kelamin }}</td>
    </tr>
    <tr>
        <th>Agama</th>
        <td>{{ $siswa->agama->nama_agama ?? '-' }}</td>
    </tr>
    <tr>
        <th>Alamat</th>
        <td>{{ $siswa->alamat }}</td>
    </tr>
    <tr>
        <th>Nomor Telepon</th>
        <td>{{ $siswa->nomor_telepon }}</td>
    </tr>
</table>

<a href="/siswa/{{ $siswa->id }}/edit" class="btn btn-primary">Edit</a>
<form action="/siswa/{{ $siswa->id }}" method="POST" style="display: inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Hapus</button>
</form>

@endsection
