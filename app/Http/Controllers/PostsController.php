<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index()
    {
        $posts = Post::all();

        return view('index', compact('posts'));
    }

	public function show(Post $post)
	{
		return view('detail', compact('post'));
	}

	public function create()
	{
		$post = new Post();
		return view('update', compact('post'));
	}

	public function store(Request $request)
	{
		$post = Post::create($request->all());
		return redirect()->route('posts.index');
	}
}
