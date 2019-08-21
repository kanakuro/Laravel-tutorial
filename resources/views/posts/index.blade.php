@extends('layout.default')

<!-- @section('title') 
Blog Post
@endsection -->
@section('title', 'Blog Posts') @section('content')
<h1>Blog Post</h1>
<ul>
    @forelse ($posts as $post)
    <li>
        <a
            href="{{action('PostsController@show', $post-> id)}}"
            >{{ $post -> title}}</a
        >
    </li>
    @empty
    <li>no posts yet</li>
    @endforelse
</ul>
@endsection
