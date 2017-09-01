@extends('layout.index')


@section('content')

	@include('sublayout.pictureHeader')

	<section id="blog">
		<div class="container">
			<h2 align="center">Did you know?</h2>
			<div class="row">


				@if($posts->count())

					@foreach($posts as $post)
						<div class="col-md-4 blogWrapper">
							<div class="blogImageWrap"><img src="{{asset('images/'.$post->image)}}" alt="" class="blogImage"></div>
							<div class="blogContent">
								<h2><a href="{{url('show-post', $post->id)}}">{{$post->title}}</a></h2>
								<p>{{str_limit($post->body,50)}}</p>
								<a href="{{url('show-post', $post->id)}}" class="btn btn-default">Read More</a>
							</div>
						</div>
						@endforeach

					@else
				<h2>No post at the moment</h2>
					@endif




			</div>
		</div>
	</section>

	@endsection