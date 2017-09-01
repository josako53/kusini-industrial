@extends('admin.template.app')

@section('content')
    @if(\Illuminate\Support\Facades\Session::has('message'))
            <div class="alert alert-success">
                {{\Illuminate\Support\Facades\Session::get('message')}}
            </div>
        @endif
    <table class="table">
        <thead>
            <tr>
                <th>Post title</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td><a href="{{url('post/'.$post->id)}}">{{$post->title}}</a></td>
                    <td>
                        {{ link_to_route('post.edit','Edit',[$post->id],['class' => 'btn btn-primary']) }}
                    </td>
                    <td>
                        {{ Form::open(array('route' => ['post.destroy',  $post->id], 'method' => 'DELETE')) }}
                        {{ Form::button('Delete', array('class' => 'btn btn-danger', 'type' => 'submit')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>

    <a href="{{route('post.store')}}" class="btn btn-primary">Add Post</a>
    @stop