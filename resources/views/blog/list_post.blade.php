@extends('template_blog.content')
@section('isi')
<div class="col-md-12 hot-post-left">
    @foreach($data as $list)
        <div class="post post-row">
            <a class="post-img" href="{{ route('blog.isi',$list->slug) }}"><img src="{{ asset($list->gambar) }}"></a>
                <div class="post-body">
                    <div class="post-category">
                        <a href="category.html">{{ $list->category->name }}</a>
                    </div>
                        <h3 class="post-title"><a href="blog-post.html">{{ $list->judul }}</a></h3>
                        <ul class="post-meta">
                            <li><a href="author.html">{{ $list->users->name }}</a></li>
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