<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Category;

class PostController extends Controller
{
    //

    public function index() {

    	$posts = Post::latest()->take(3)->get();

    	$blogs = Post::paginate(4);

    	$recent = Post::latest()->take(4)->get();

    	$category = Category::all();

    	return view('posts.index', compact('posts', 'category', 'blogs', 'recent'));
    }

    public function show(Post $post) {

    	$posts = Post::latest()->take(2)->get();

    	return view('posts.show', compact('post', 'posts'));
    }
}
