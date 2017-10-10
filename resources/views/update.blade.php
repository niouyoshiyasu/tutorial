@extends('layouts.app')

@section('app')

<h1>新規</h1>

{{ Form::open(['route' => ['posts.store']]) }}
    <div>
        {{ Form::text('title', $post->title) }}
    </div>

    <div>
        {{ Form::textarea('content', $post->content) }}
    </div>

		{{ Form::submit('作成') }}
{{ Form::close() }}

@endsection
