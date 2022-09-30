@extends('layouts.main')

@section('container')

<h1 class="font-bold text-3xl text-slate-800">Halaman About</h1>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="rounded-full">

@endsection