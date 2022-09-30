@extends('layouts.main')

@section('container')

@foreach ($posts as $post)
<article class="mb-5 mx-12 my-16">
    <h2 class="font-bold text-3xl">
        <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a></h2>
    <h5 class="font-semibold">{{ $post["slug"] }}</h5>
    <p>{{ $post["body"] }}</p>
</article>
@endforeach


@endsection

