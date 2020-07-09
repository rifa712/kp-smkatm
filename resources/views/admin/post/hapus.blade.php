@extends('template_admin.home')
@section('sub-judul','Trash Post (action delete akan menghapus post secara permanen)')
@section('content')

    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div>
    @endif
        <table class="table table-striped table-hover table-sm table-bordered text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Post</th>
                    <th>Kategori</th>
                    <th>Tags</th>
                    <th>Thumbnail</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach($post as $result => $hasil)
            <tbody>
                <tr>
                    <td>{{ $result + $post->firstitem() }}</td>
                    <td>{{ $hasil->judul }}</td>
                    <td>{{ $hasil->category->name }}</td>
                    <td>@foreach($hasil->tags as $tag)
                                    [ {{ $tag->name }} ]
                        @endforeach
                    </td>
                    <td><img src='{{ asset( $hasil->gambar ) }}' class="img-fluid" style="width:80px;"></td>
                    <td>
                        <form action="{{ route('post.kill',$hasil->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href=" {{ route('post.restore' , $hasil->id) }} " class="btn btn-info btn-sm"> Restore </a>
                                <button type="submit" class="btn btn-danger btn-sm"> Delete </button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        {{ $post->links() }}
@endsection()