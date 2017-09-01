@extends('admin.template.app')

@section('content')

    <form>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Who are we</h2>
                </div>
                <div class="col-md-4">
                    <h2>What we do</h2>
                </div>
                <div class="col-md-4">
                    <h2>How we do it</h2>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-default">Edit</button>
    </form>
    
    @stop
