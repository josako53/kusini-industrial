@extends('admin.template.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Post Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="textarea">
                        <label>
                            <h4>Post Content</h4>
                            <textarea name="body" id="" cols="30" rows="10"></textarea>
                        </label>
                    </div>
                    <div class="form-group">
                         <label for="image">Image input</label>
                         <input type="file" id="image" name="image">
                     </div>

                    <button type="submit" class="btn btn-primary">Add Post</button>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
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