<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function index(){
        return view('main');
    }

    public function about(){
        return view('pages.about');
    }

    public function service(){
        return view('pages.service');
    }

    public function work(){
        return view('pages.work');
    }

    public function blog(){
        $posts = Post::all();
        return view('pages.blog', compact('posts'));
    }

    public function contact(){
        return view('pages.contact');
    }


}
