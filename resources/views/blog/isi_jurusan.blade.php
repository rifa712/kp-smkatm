@extends('template_blog.content')
@section('isi')
    @foreach($data as $isi)
    <center>
        <h1>{{ $isi->nama_jurusan }}</h1>
    </center>
    <br>
    <div class="section-row">
        <img src=" {{ asset($isi->gambar_jurusan) }} " alt="" class="img-thumbnail" style="width: 100%;height: auto;max-height:660px;border:none;">
        
    </div>
    <br>
        {!! $isi->deskripsi !!}
    <br>
    <h2 class="text-center">VISI</h2>
    <p class="text-center">{!! $isi->visi !!}</p>
    <h2 class="text-center">MISI</h2>
    <p class="text-center">{!! $isi->misi !!}</p>
    @endforeach
@endsection