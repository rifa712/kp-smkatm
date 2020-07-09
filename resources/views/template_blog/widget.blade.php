<div class="col-md-4">
					<!-- category widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Sambutan Kepala Sekolah</h2>
						</div>
						
						<div class="card" style="width: 100%;">
							<img class="card-img-top" src="{{ asset('/landing/img/ava.jpg') }}" alt="">
							<div class="card-body">
								<p class="card-text">Mengingat tingkat partisipasi pendidikan lulusan SLTP di daerah kami sangat rendah, 
								itu dikarenakan jarak tempuh dari rumah siswa kepada SMK atau SMA terdekat itu cukup jauh yaitu sekitar 10km. 
								Oleh karena itu Yayasan Aulia Mursidi mendirikan SMK Auliya Teladan Mandiri agar menjadi solusi bagi masyarakat 
								kecamatan Lemahsugih untuk ikut berpartisipasi meningkatkan angka partisipasi pendidikan tingkat SLTA.</p>
							</div>
						</div>
						<br>


						<div class="section-title">
							<h2 class="title">Kategori</h2>
						</div>
						<div class="category-widget">
							<ul>
								@foreach($category_widget as $hasil)
								<li><a href="{{ route('blog.category',$hasil->slug) }}">{{ $hasil->name }}<span>{{ $hasil->posts->count() }}</span></a></li>
								@endforeach
							</ul>
						</div>
					</div>
					<!-- /category widget -->
					
				</div>