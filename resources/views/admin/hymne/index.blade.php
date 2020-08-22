@extends('template_admin.home')
@section('sub-judul','HYMNE')
@section('content')

    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div>
    @endif
        <a href="{{route('hymne.create')}}" class="btn btn-info btn-sm">Tambah Hymne</a>
        <br><br>

        <table class="table table-striped table-hover table-sm table-bordered text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                </tr>
            </thead>
            @foreach($hymne as $result => $hasil)
            <tbody>
                <tr>
                    <td>{{ $result + $hymne->firstitem() }}</td>
                    <td>{{ $hasil->judul }}</td>
                    
                    <td>
                        <form action="{{ route('hymne.destroy',$hasil->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href=" {{ route('hymne.edit' , $hasil->id) }} " class="btn btn-primary btn-sm"> Edit </a>
                                <button type="submit" class="btn btn-danger btn-sm"> Delete </button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        
@endsection()