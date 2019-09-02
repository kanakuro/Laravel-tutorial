@extends('layout.default') @section('title', $post-> title) @section('content')
<h1>
    <a href="{{ url('/') }}" class="header-menu">Back</a> {{$post -> title}}
</h1>
<p>
    {!! nl2br(e($post-> body)) !!}
</p>
<h2>Comments</h2>
@forelse ($post-> comments as $comment)
<li>
    {{$comment-> body}}
</li>
@empty
<li>no comments yet</li>
@endforelse @endsection
