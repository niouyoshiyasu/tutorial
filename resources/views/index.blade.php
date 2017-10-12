@extends('layouts.app')

@section('app')

<h1>一覧</h1>

{!! Form::open(['method' => 'GET']) !!}
    {!! Form::text('s', null) !!}
    {!! Form::submit('検索') !!}
{!! Form::close() !!}	

<h3>
	<a href={{ action('PostsController@create')}} > 新しく作る</a>
</h3>
    <ul>
        @foreach ($posts as $post)
            <li＞
			<BR>
                <li>
					<a href={{ action('PostsController@show', [$post]) }} >{{ $post->title }}</a>
					<a href={{ action('PostsController@edit', [$post]) }} >更新</a>
					<a href={{ action('PostsController@destroy', [$post]) }} >削除</a>
				</li>
			</BR>
            </li>
        @endforeach
    </ul>

	{{ $posts -> links() }}

@endsection
