@extends('layouts.app')

@section('app')

<h1>{{ $post->title }}</h1>
<p>{{ $post->id }}</p>
<p>{{ $post->content }}</p>
<p>{{ $post->created_at }}</p>
<p>{{ $post->updated_at }}</p>

@endsection
