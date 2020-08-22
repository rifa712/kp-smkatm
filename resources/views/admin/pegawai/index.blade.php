@extends('template_admin.home')
@section('sub-judul','Kepegawaian')
@section('content')

    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div>
    @endif
        <a href="{{route('pegawai.create')}}" class="btn btn-info btn-sm">Tambah</a>
        <br><br>

        <table class="table table-striped table-hover table-sm table-bordered text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>NIP</th>
                </tr>
            </thead>
            @foreach($pegawai as $result => $hasil)
            <tbody>
                <tr>
                    <td>{{ $result + $pegawai->firstitem() }}</td>
                    <td><img src='{{ asset( $hasil->foto ) }}' class="img-fluid" style="width:80px;"></td>
                    <td>{{ $hasil->nama }}</td>
                    <td>{{ $hasil->jabatan }}</td>
                    <td>{{ $hasil->nip }}</td>
                    
                    <td>
                        <form action="{{ route('pegawai.destroy',$hasil->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href=" {{ route('pegawai.edit' , $hasil->id) }} " class="btn btn-primary btn-sm"> Edit </a>
                                <button type="submit" class="btn btn-danger btn-sm"> Delete </button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        
@endsection()