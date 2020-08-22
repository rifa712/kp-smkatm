@extends('template_blog.content')

@section('isi')
                    <!-- <div id="hot-post" class="row hot-post">
                        <div class="col-md-8 hot-post-left"> -->
					<!-- post -->
					
					<div class="container text-center" style="padding-bottom: 50px ;">
						<img src="{{ asset('/landing/img/logo_fix.png') }}" alt="" class="img-thumbnail" style="border:none;">
						<h2 class="text-center">SMK AULIYA TELADAN MANDIRI</h2>
						<h3 class="text-center">The Leading Entrepreneurial School</h3>
					</div>

					<div class="container">
						<div class="owl-carousel owl-theme">
						@foreach($data as $post_terbaru)
							<!-- <div class="item" style="width:500px;"><a class="post-img" href="{{ route('blog.isi', $post_terbaru->slug) }}"><img src=" {{ $post_terbaru->gambar }}" alt=""></a></div> -->
							<div class="post post-sm">
							<div class="item" style="width:560px;"><a class="post-img" href="{{ route('blog.isi', $post_terbaru->slug) }}"><img src=" {{ $post_terbaru->gambar }}" alt=""></a>
								<center>
									<div class="post-body">
											<div class="post-category">
												<!-- <a href="{{ route('blog.category',$post_terbaru->category) }}">{{ $post_terbaru->category->name }}</a> -->
											</div>
												<!-- <h3 class="post-title title-sm">{{ $post_terbaru->judul }}</h3> -->
											</div>
										</div>
								</center>
								
							</div>
								
						@endforeach
							<!-- <div class="item" style="width:500px"><img src=" {{ asset('/landing/img/galery-1.jpg') }}" alt=""></div> -->
						</div>
					</div>
					
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<!-- Filosofi -->
							<div class="col-md-12">
								<h3 class="text-center title">Filosofi</h3>
							</div>
							
							<div class="row">
								<p class="text-center">
								SMK ATM WAJIB TAMPIL BEDA SEBAGAI “SEKOLAHNYA MANUSIA” DENGAN KESADARAN UTUH BAHWA SETIAP MANUSIA DITAKDIRKAN MENJADI SANG JUARA 
								YANG DAPAT MANDAT SEBAGAI WAKIL ALLAH DAN PEMAKMUR DUNIA.
								</p><br><br>
							</div>
						<!-- End Filosofi -->
						<div class="col-md-12">
						<h3 class="text-center title">Sambutan Kepala Sekolah</h3><br>
								<div class="col-md-4">
									<img src=" {{ asset($sambutan->foto_sambutan) }} " alt="" class="img-fluid" style="border:none;"></a>
								</div>
								<div class="col-md-8">
										<div class="col-md-12">
											{!! $sambutan->isi_sambutan !!}
										</div>
								</div>

						</div>
						<!-- post -->

						<!-- Filosofi -->
						<!-- <div class="col-md-12">
								<h3 class="text-center title">Info Sekolah</h3>
							</div>
							
							<div class="row">
								<p class="text-center">
								sasa
								</p><br><br>
							</div> -->
						<!-- End Filosofi -->

						<!-- Jurusan -->
							<div class="col-md-12"><br><br>
								<h3 class="text-center title">Jurusan</h3>
							</div>
							
							<div class="row">
								@foreach($jurusan as $res)
									<div class="col-md-4">
										<a href="{{ route('jurusan.isi', $res->slug_jurusan) }}"><img src=" {{ asset($res->gambar_jurusan) }} " alt="" class="img-thumbnail" style="width: 100%;height: auto;max-height:660px;border:none;"></a>
									</div>
								@endforeach
							</div>
						<!-- End Jurusan -->
					</div>
					<!-- /row -->


@endsection
