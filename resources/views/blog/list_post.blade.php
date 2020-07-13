@extends('template_blog.content')
@section('isi')
<div class="col-md-12 hot-post-left">
    @foreach($data as $list)
        <div class="post post-row">
            <a class="post-img" href="{{ route('blog.isi',$list->slug) }}"><img src="{{ asset($list->gambar) }}"></a>
                <div class="post-body">
                    <div class="post-category">
                        <a href="{{ route('blog.category',$list->category) }}">{{ $list->category->name }}</a>
                    </div>
                        <h3 class="post-title"><a href="{{ route('blog.isi',$list->slug) }}">{{ $list->judul }}</a></h3>
                        <ul class="post-meta">
                            <li>{{ $list->users->name }}</li>
                            <li>{{ $list->created_at->diffForHumans() }}</li>
                        </ul>
                    </div>
            </div>
            @endforeach
            <center>
                {{ $data->links() }}
            </center>
            
        </div>
@endsection