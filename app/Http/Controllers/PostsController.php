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
        $posts = Post::simplePaginate(5);

        return view('index', compact('posts','search'));
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

	public function edit(Post $post)
	{
		return view('create', compact('post'));
	}

	public function update(Request $request, Post $post)
	{
		$post->update($request->all());

		return redirect()->route('posts.index');
	}

	public function destroy(String $id)
    {
		Post::where('id', $id)->delete();
        return redirect('/posts');
    }

}
