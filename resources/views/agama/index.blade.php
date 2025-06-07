@extends('layout.master')

@section('judul')
List Agama
@endsection

@section('content')
<a href="/agama/create" class="btn btn-primary my-2">Tambah</a>
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Agama</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($agama as $key=>$value)
                    <tr>
                        <td>{{$key + 1}}</th>
                        <td>{{$value->nama_agama}}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="/agama/{{$value->id}}" class="btn btn-info btn-sm">Show</a>
                                <a href="/agama/{{$value->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                                <form action="/agama/{{$value->id}}" method="POST" style="display:inline">
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