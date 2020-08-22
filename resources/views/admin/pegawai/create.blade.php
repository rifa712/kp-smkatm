@extends('template_admin.home')
@section('sub-judul','Tambah Pegawai')
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

    <form action="{{ route('pegawai.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Foto (max:2MB)</label>
            <input type="file" name="foto" class="form-control"> 
        </div>

        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Jabatan</label>
            <input type="text" class="form-control" name="jabatan" autocomplete="off">
        </div>
        <div class="form-group">
            <label>NIP</label>
            <input type="text" class="form-control" name="nip" autocomplete="off">
        </div>

        <div class="form-group">
            <button class="btn btn-primary btn-block">Tambah Pegawai</button>
        </div>
    </form>
@endsection