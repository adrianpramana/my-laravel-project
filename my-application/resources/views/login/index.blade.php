@extends('layouts.main')

@section('container')
<h1>
    Hello World!
</h1>

{{-- Header --}}
<div class="flex items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
    <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                Please Login
            </h1>
            <form action="/login" method="POST">
                @csrf
                <div>
                    <label for="email">Email Address</label>
                    @error('email')
                        <div class="invalid-feed">
                            {{ $message }}
                        </div>
                    @enderror
                    <input type="email" name="email" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 @error('email') is-invalid 
                    @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                </div>
            </form>
        </div>

    </div>

</div>
<form action="/login" method="POST">
@csrf
</form>
@endsection