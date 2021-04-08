@extends('layouts.app')

@section('title', $post['title'])

@section('content')
    @if ($post['is_new'])
        <div>A new blog posts! Using if.</div>
    @else
        <div>Blog post is old! Using if.</div>
    @endif

    @unless($post['is_new'])
        <div>It is and old post... using unless</div>
    @endunless

    <h1>{{ $post['title'] }}</h1>
    <p>{{ $post['content'] }}</p>

    @isset($post['has_comments'])
        <div>The post has some comments... using isset</div>
    @endisset
@endsection
