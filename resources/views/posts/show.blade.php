@extends('layout.index')

@section('content')

    @include('sublayout.pictureHeader')

   <div class="container" style="margin-top: 50px;">
       <div class="row">
           <div class="col-md-6">
               <div class="blogImageWrap"><img src="{{asset('images/'.$post->image)}}" alt="" class="blogImage"></div>
               <h1>{{$post->title}}</h1>
               <p>{{$post->body}}</p>
           </div>
       </div>
   </div>

    @endsection