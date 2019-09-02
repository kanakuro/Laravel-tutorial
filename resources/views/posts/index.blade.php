@extends('layout.default')

<!-- @section('title') 
Blog Post
@endsection -->
@section('title', 'Blog Posts') @section('content')
<h1>
    <a href="{{ url('/posts/create') }}" class="header-menu">New Post</a>
    Blog Post
</h1>
<ul>
    @forelse ($posts as $post)
    <li>
        <a
            href="{{ action('PostsController@show', $post) }}"
            >{{ $post -> title}}</a
        >
        <a href="{{ action('PostsController@edit', $post) }}" class="edit"
            >[edit]</a
        >
        <a href="#" class="del" data-id="{{$post-> id}}">[x]</a>
        <form
            method="post"
            action="{{ url('/posts', $post-> id)}}"
            id="form_{{$post-> id}}"
        >
            {{ csrf_field() }}
            {{ method_field("delete") }}
        </form>
    </li>
    @empty
    <li>no posts yet</li>
    @endforelse
</ul>
<script src="/js/main.js"></script>
@endsection
