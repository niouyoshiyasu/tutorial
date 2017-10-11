@extends('layouts.app')

@section('app')

<h1>更新</h1>

{{ Form::open(['route' => ['posts.update', $post->id], 'method' => 'put']) }}
    <div>
        {{ Form::text('title', $post->title) }}
    </div>

    <div>
        {{ Form::textarea('content', $post->content) }}
    </div>

    {{ Form::submit('更新') }}
{{ Form::close() }}

@endsection
