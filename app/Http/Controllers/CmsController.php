<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CmsController extends Controller
{

    public function work(){
        return view('admin.pages.work');
    }

    public function blog(){
        $posts = Post::all();
        return view('admin.pages.blog', compact('posts'));
    }

    public function edit(){
        return view('admin.pages.edit');
    }

    public function delete(){
        return view('admin.includes.delete');
    }

    public function post(){
        return view('admin.pages.post');
    }

}
