@extends('layout.master')

@section('judul')
Registrasi Siswa
@endsection

@section('content')
<a href="/siswa/create" class="btn btn-primary my-2">Registrasi</a>
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Agama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($siswa as $key=>$value)
                    <tr>
                        <td>{{$key + 1}}</th>
                        <td>{{$value->nama_peserta_didik}}</td>
                        <td>{{ $value->tempat_lahir }}</td>
                        <td>{{ \Carbon\Carbon::parse($value->tanggal_lahir)->format('d-m-Y') }}</td>
                        <td>{{ $value->jenis_kelamin }}</td>
                        <td>{{ $value->agama->nama_agama }}</td> {{-- pastikan relasi 'agama' disiapkan di model --}}
                        <td>{{ $value->alamat }}</td>
                        <td>{{ $value->nomor_telepon }}</td>

                        <td>
                            <div class="btn-group" role="group">
                                <a href="/siswa/{{$value->id}}" class="btn btn-info btn-sm">Show</a>
                                <a href="/siswa/{{$value->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                                <form action="/siswa/{{$value->id}}" method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </td> 
                    </tr>
                @empty
                    <tr colspan="3">
                        <td>No data</td>
                    </tr>  
                @endforelse              
            </tbody>
        </table>
@endsection