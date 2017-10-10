@extends('layouts.app')

@section('app')

<h1>index</h1>

    <ul>
        @foreach ($posts as $post)
            <li＞
			<BR>
                <li>
					<a href={{ action('PostsController@show', [$post]) }} >{{ $post->title }}</a>
				</li>
			</BR>
            </li>
        @endforeach
    </ul>

@endsection
