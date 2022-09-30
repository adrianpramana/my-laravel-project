
@extends('layouts.main')

@section('container')
<article class="pb-16">
    <h1 class="font-bold text-3xl">{{ $post["title"] }}</h1>
    <h5>{{ $post["slug"] }}</h5>
    <p>{{ $post["body"] }}</p>
</article>
<a href="/posts">Back to Posts</a>

@endsection