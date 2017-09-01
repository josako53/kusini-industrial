@extends('admin.template.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ url('upload') }}" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="post-title">Post Title</label>
                        <input type="text" class="form-control" id="post-title">
                    </div>
                    <div class="textarea">
                        <label>
                            <h4>Post Content</h4>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </label>
                    </div>
                    <!-- <div class="form-group">
                         <label for="post-image">Image input</label>
                         <input type="file" id="post-image">
                     </div>-->

                    <button type="submit" class="btn btn-primary">Add Post</button>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            </div>
        </div>
    </div>


@stop