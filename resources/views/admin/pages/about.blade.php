@extends('admin.template.app')

@section('content')

    <form action="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>About us</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Vision</h2>
                </div>

                <div class="col-md-4">
                    <h2>Mission</h2>
                </div>

                <div class="col-md-4">
                    <h2>Values</h2>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-default">Edit</button>
    </form>

    @stop