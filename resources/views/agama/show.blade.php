@extends('layout.master')

@section('judul')
Detail Agama
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Detail Agama</h4>
    </div>
    <div class="card-body">
        <p><strong>ID:</strong> {{ $agama->id }}</p>
        <p><strong>Nama Agama:</strong> {{ $agama->nama_agama }}</p>
        <p><strong>Dibuat pada:</strong> {{ $agama->created_at->format('d-m-Y H:i') }}</p>
        <p><strong>Diperbarui pada:</strong> {{ $agama->updated_at->format('d-m-Y H:i') }}</p>
    </div>
    <div class="card-footer">
        <a href="{{ url('/agama') }}" class="btn btn-secondary">Kembali</a>
        <a href="{{ url('/agama/'.$agama->id.'/edit') }}" class="btn btn-warning">Edit</a>
    </div>
</div>
@endsection
