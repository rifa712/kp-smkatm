@extends('template_admin.home')
@section('sub-judul','Edit Hymne')
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

<form action="{{ route('hymne.update',$hymne->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="form-group">
        <label>Judul</label>
        <input type="text" class="form-control" name="judul" value="{{ $hymne->judul }}">
    </div>

    <div class="form-group">
        <label>Lirik</label>
        <textarea class="form-control" name="lirik" id="content">{{ $hymne->lirik }}</textarea>
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