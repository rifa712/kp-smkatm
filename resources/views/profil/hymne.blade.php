@extends('template_blog.content')
@section('isi')
    <div class="">
        @foreach($hymne as $res)
            <div class="col-md-6">
                <h3 class="text-center">{{ $res->judul }}</h3>
                <p class="text-center"><center>
                    {!! $res->lirik !!}
                </center></p>
            </div>
        @endforeach
    </div>
    
    
@endsection