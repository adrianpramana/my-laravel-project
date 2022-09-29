@extends('layouts.main')
@section('container')
<div class="pt-8 pl-8">
<h1 class="py-3 font-bold text-3xl text-slate-800">Halaman About</h1>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="img/{{ $image }}" alt="{{ $name }}" width="200">
</div>
   
@endsection