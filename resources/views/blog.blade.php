@extends('template_blog.content')

@section('isi')
                    <!-- <div id="hot-post" class="row hot-post">
                        <div class="col-md-8 hot-post-left"> -->
					<!-- post -->
					<div class="container" style="padding-bottom: 50px ;" >
						<h2 class="text-center">SMK AULIYA TELADAN MANDIRI</h2>
						<h3 class="text-center">The Leading Entrepreneurial School</h3>
					</div>

					<div class="container">
						<div class="owl-carousel owl-theme">
						@foreach($data as $post_terbaru)
							<!-- <div class="item" style="width:500px;"><a class="post-img" href="{{ route('blog.isi', $post_terbaru->slug) }}"><img src=" {{ $post_terbaru->gambar }}" alt=""></a></div> -->
							<div class="post post-sm">
							<div class="item" style="width:500px;"><a class="post-img" href="{{ route('blog.isi', $post_terbaru->slug) }}"><img src=" {{ $post_terbaru->gambar }}" alt=""></a>
								<center>
									<div class="post-body">
											<div class="post-category">
												<a href="{{ route('blog.category',$post_terbaru->category) }}">{{ $post_terbaru->category->name }}</a>
											</div>
												<h3 class="post-title title-sm">{{ $post_terbaru->judul }}</h3>
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
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Recent posts</h2>
							</div>
						</div>
						<!-- post -->
                        @foreach($data as $post_terbaru)
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="{{ route('blog.isi', $post_terbaru->slug) }}"><img src="{{ $post_terbaru->gambar }}" alt="" style="height: 360px;"></a>
								<div class="post-body">
									<div class="post-category">
										<a href="{{ route('blog.category',$post_terbaru->category) }}">{{ $post_terbaru->category->name }}</a>
									</div>
									<h3 class="post-title"><a href="#">{{ $post_terbaru->judul }}</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">{{ $post_terbaru->users->name }}</a></li>
										<li>{{ $post_terbaru->created_at->diffForHumans() }}</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post --> 
                        @endforeach
					</div>
					<!-- /row -->


@endsection
