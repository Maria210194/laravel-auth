@extends('layouts.dashboard')
@section('content')
    <h3>Titolo</h3>
    <p>{{ $post->title }}</p>
    <h4>Content</h4>
    <p>{{ $post->content }}</p>
    <h4>Slug</h4>
    <p>{{ $post->slug }}</p>
@endsection
