@extends('admin.template.app')

@section('content')

    <form action="">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>service1</h2>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                
                <div class="col-md-4">
                    <h2>service2</h2>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                
                <div class="col-md-4">
                    <h2>service3</h2>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                
                <div class="col-md-4">
                    <h2>service4</h2>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-default">Edit</button>
    </form>
    
    @stop