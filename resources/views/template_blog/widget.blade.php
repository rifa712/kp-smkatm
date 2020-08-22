<div class="col-md-4">
					<!-- category widget -->
					<div class="aside-widget">
						
						<div class="section-title">
							<h2 class="title">Kategori</h2>
						</div>
						<div class="category-widget">
							<ul>
								@foreach($category_widget as $hasil)
								<li><a href="{{ route('blog.category',$hasil->slug) }}">{{ $hasil->name }}<span>{{ $hasil->posts->count() }}</span></a></li>
								@endforeach
							</ul>
						</div><br>
						<div class="section-title">
							<h2 class="title">Tags</h2>
						</div>
						<div class="category-widget">
							@foreach($tag_widget as $hasiil)
								<a href="{{ route('blog.tags',$hasiil->slug) }}"><button type="button" class="btn btn-info">{{ $hasiil->name }}<span>{{ $hasiil->posts }}</span></button></a>
							@endforeach
						</div><br>
					</div>
					<!-- /category widget -->
					
				</div>
				