@extends('template_blog.content')
@section('isi')
    <div class="col-md-12">
        <h3 class="text-center title">STRUKTUR ORGANISASI</h3><br>
			<div class="col-md-12">
				<center>
					{!! $struktur->struktur !!}
				</center>							
			</div>
    </div>
@endsection