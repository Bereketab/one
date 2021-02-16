@foreach($data as $item)
							<div id="post" class="entry clearfix">
								<div class="entry-image br-radius3">
									<img src="images/news2.jpg" />

								</div>
								<div class="entry-title">
									<h2><a href="{{route ('news_detail',[$item->id])}}">{{$item->title}} </a></h2>
								</div>
								<ul class="entry-meta clearfix">
									<li>{{$item->type}} -</li>
									<li>{{$item->created_at->format('d M  Y')}}</li>
								</ul>
								<div class="entry-content">
									<h1>{!!$item->description!!}</h1>
								</div>
							</div>
							@endforeach