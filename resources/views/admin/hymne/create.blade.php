@extends('template_admin.home')
@section('sub-judul','Tambah Hymne')
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

    <form action="{{ route('hymne.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control" name="judul" autocomplete="off">
        </div>
        <div class="form-group">
                <label><h5>Lirik</h5></label>
                <textarea class="form-control" name="lirik" id="content"></textarea>
            </div>

        <div class="form-group">
            <button class="btn btn-primary btn-block">Tambah Hymne</button>
        </div>

        <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
            <script>
                CKEDITOR.replace( 'content' );
        </script>
    </form>
@endsection