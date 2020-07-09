@extends('template_admin.home')
@section('sub-judul','POST')
@section('content')

    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div>
    @endif
        <a href="{{route('post.create')}}" class="btn btn-info btn-sm">Tambah Post</a>
        <br><br>

        <table class="table table-striped table-hover table-sm table-bordered text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Post</th>
                    <th>Kategori</th>
                    <th>Tags</th>
                    <th>Author</th>
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
                                <h6><span class="badge badge-primary">{{ $tag->name }}</span></h6>
                        @endforeach
                    </td>
                    <td>{{ $hasil->users->name }}</td>
                    <td><img src='{{ asset( $hasil->gambar ) }}' class="img-fluid" style="width:80px;"></td>
                    <td>
                        <form action="{{ route('post.destroy',$hasil->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href=" {{ route('post.edit' , $hasil->id) }} " class="btn btn-primary btn-sm"> Edit </a>
                                <button type="submit" class="btn btn-danger btn-sm"> Delete </button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        {{ $post->links() }}
@endsection()