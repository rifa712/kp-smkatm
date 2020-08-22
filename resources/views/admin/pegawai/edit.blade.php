@extends('template_admin.home')
@section('sub-judul','Edit Pegawai')
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

<form action="{{ route('pegawai.update',$pegawai->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    
    <div class="form-group">
        <label>Foto</label>
        <input type="file" name="foto" class="form-control"> 
    </div>

    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama" value="{{ $pegawai->nama }}">
    </div>

    <div class="form-group">
        <label>Jabatan</label>
        <input type="text" class="form-control" name="jabatan" value="{{ $pegawai->jabatan }}">
    </div>

    <div class="form-group">
        <label>NIP</label>
        <input type="text" class="form-control" name="nip" value="{{ $pegawai->nip }}">
    </div>
    
    <div class="form-group">
        <button class="btn btn-primary btn-block">Update</button>
    </div>
</form>

@endsection