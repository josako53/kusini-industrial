@extends('admin.template.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                {{ Form::model($post, array('route' => array('post.update', $post->id), 'method' => 'PUT')) }}

                <div class="form-group">
                    {{ Form::label('title', 'Enter title') }}
                    {{ Form::text('title', null, array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('body', 'Enter body') }}
                    {{ Form::textarea('body', null, array('class' => 'form-control')) }}
                </div>


                {{ Form::submit('Update', array('type' => 'submit','class' => 'btn btn-primary')) }}

                {{ Form::close() }}
            </div>
        </div>
    </div>
         @if(count($errors))
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                </ul>
            @endif
    @stop