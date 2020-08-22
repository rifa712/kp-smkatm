@extends('template_admin.home')
@section('sub-judul','Edit Jurusan')
@section('content')
    
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
        @endforeach
    @endif

    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div>
    @endif

<form action="{{ route('jurusan.update',$jurusan->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    
    <div class="form-group">
        <label>Nama jurusan</label>
        <input type="text" class="form-control" name="nama_jurusan" value="{{ $jurusan->nama_jurusan }}">
    </div>

    <div class="form-group">
        <label>Gambar</label>
        <input type="file" name="gambar_jurusan" class="form-control"> 
    </div>

    <div class="form-group">
        <label>Deskripsi</label>
        <textarea class="form-control" name="deskripsi" id="content">{{ $jurusan->deskripsi }}</textarea>
    </div>

    <div class="form-group">
        <label>Visi</label>
        <textarea class="form-control" name="visi" id="content2">{{ $jurusan->visi }}</textarea>
    </div>

    <div class="form-group">
        <label>Misi</label>
        <textarea class="form-control" name="misi" id="content3">{{ $jurusan->misi }}</textarea>
    </div>
    
    <div class="form-group">
        <button class="btn btn-primary btn-block">Update</button>
    </div>
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
            <script>
                CKEDITOR.replace( 'content' );
                CKEDITOR.replace( 'content2' );
                CKEDITOR.replace( 'content3' );
            </script>
</form>

@endsection