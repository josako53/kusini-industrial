@extends('admin.template.app')

@section('content')

    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Post Title</label>
            <input type="text" class="form-control" id="post-title">
        </div>
        <div class="textarea">
            <label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </label>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Image input</label>
            <input type="file" id="exampleInputFile">
        </div>

        <button type="submit" class="btn btn-default">Edit</button>
    </form>

    @stop