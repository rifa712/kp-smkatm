@extends('template_blog.content')
@section('isi')
    @foreach($data as $isi)
    <center>
        <h1>{{ $isi->judul }}</h1>
    </center>
    <i class="fa fa-calendar"></i> {{ $isi->created_at->diffForHumans() }}
    <i class="fa fa-clipboard"></i> {{ $isi->category->name }}
    <br>
    <br>
    <div class="section-row">
        <img src=" {{ asset($isi->gambar) }} " alt="" class="img-fluid" style="width: 100%;height: auto;max-height:660px;">
        
    </div>
    <br>
        {!! $isi->content !!}
        
    @endforeach
@endsection