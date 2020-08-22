    @extends('template_admin.home')
    @section('sub-judul','Tambah Jurusan')
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

        <form action="{{ route('jurusan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label><h5>Nama Jurusan</h5></label>
                <input type="text" class="form-control" name="nama_jurusan" autocomplete="off">
            </div>
            
            <div class="form-group">
                <label><h5>Gambar (max:2MB)</h5></label>
                <input type="file" name="gambar_jurusan" class="form-control"> 
            </div>

            

            <div class="form-group">
                <label><h5>Deskripsi</h5></label>
                <textarea class="form-control" name="deskripsi" id="content"></textarea>
            </div>

            <div class="form-group">
                <label><h5>Visi</h5></label>
                <textarea class="form-control" name="visi" id="content2"></textarea>
            </div>

            <div class="form-group">
                <label><h5>Misi</h5></label>
                <textarea class="form-control" name="misi" id="content3"></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-primary btn-block">Tambah Jurusan</button>
            </div>

            <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
            <script>
                CKEDITOR.replace( 'content' );
                CKEDITOR.replace( 'content2' );
                CKEDITOR.replace( 'content3' );
            </script>
        </form>
    @endsection