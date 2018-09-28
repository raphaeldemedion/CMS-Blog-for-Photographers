<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{   

    public function welcome(){
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('welcome')->with('posts', $posts);
    }
   
    public function about(){        
        return view('pages.about');
    }

    public function lifestyle(){        
        return view('pages.lifestyle');
    }

    public function travel(){
        return view('pages.travel');
    }

    public function single(){
        return view('pages.single');
    }

    public function contact(){
        return view('pages.contact');
    }
}
