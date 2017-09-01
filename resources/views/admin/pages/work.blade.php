@extends('admin.template.app')

@section('content')

    <form action="">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>image1</h2>
                    <p>description</p>
                </div>
                <div class="col-md-4">
                    <h2>image2</h2>
                    <p>description</p>
                </div>
                <div class="col-md-4">
                    <h2>image3</h2>
                    <p>description</p>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-default">Edit</button>
    </form>

    @stop