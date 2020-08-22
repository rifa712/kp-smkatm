@extends('template_admin.home')
@section('sub-judul','Jurusan')
@section('content')

    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div>
    @endif
        <a href="{{ route('jurusan.create') }}" class="btn btn-info btn-sm">Tambah Jurusan</a>
        <br><br>

        <table class="table table-striped table-hover table-sm table-bordered text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach($jurusan as $result => $hasil)
            <tbody>
                <tr>
                    <td>{{ $result + $jurusan->firstitem() }}</td>
                    <td><img src='{{ asset( $hasil->gambar_jurusan ) }}' class="img-fluid" style="width:80px;"></td>
                    <td>{{ $hasil->nama_jurusan }}</td>
                    
                    <td>
                        <form action="{{ route('jurusan.destroy',$hasil->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href=" {{ route('jurusan.edit' , $hasil->id) }} " class="btn btn-primary btn-sm"> Edit </a>
                                <button type="submit" class="btn btn-danger btn-sm"> Delete </button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        
@endsection()