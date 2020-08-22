@extends('template_blog.content')
@section('isi')

        <h2 class="text-center">GURU DAN STAFF</h2><br><br>
        
        <div class="row">
        @foreach($pegawai as $res)
        
            <div class="col-md-4" style="margin-bottom: 10px ;">
                <div class="card" style=" border:solid 2px;">
                    <img class="card-img-top img-fluid" src="{{ asset($res->foto) }}" alt="" >
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $res->nama }}</h5>
                        <p class="card-title text-center">{{ $res->jabatan }}</p>
                        <h5 class="card-text text-center">NIP.{{ $res->nip }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
</div>

    
@endsection