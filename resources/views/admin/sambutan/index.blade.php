@extends('template_admin.home')
@section('sub-judul','Sambutan Kepala Sekolah')
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

<form action="{{ route('sambutan.update',$sambutan->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    
    <img src='{{ asset( $sambutan->foto_sambutan ) }}' class="img-fluid" style="width:120px;">
    <div class="form-group">
        <label>Ubah Foto</label>
        <input type="file" name="foto_sambutan" class="form-control">
    </div>

    <div class="form-group">
        <label>Isi Sambutan</label>
        <textarea class="form-control" name="isi_sambutan" id="content">{{ $sambutan->isi_sambutan }}</textarea>
    </div>
    
    <div class="form-group">
        <button class="btn btn-primary btn-block">Update</button>
    </div>

    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content' );
    </script>
</form>

@endsection