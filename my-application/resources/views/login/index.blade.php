@extends('layouts.main')

@section('container')

{{-- Header --}}
{{-- <div class="flex items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
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
</form> --}}


<section class="h-full gradient-form md:h-screen mx-auto">
    <div class="container py-12 px-6 h-full ml-8">
      <div class="flex justify-center items-center flex-wrap h-full text-gray-800">
        <div class="xl:w-10/12">
          <div class="block bg-white shadow-xl border rounded-lg">
            <div class="lg:flex lg:flex-wrap g-0">
              <div class="lg:w-6/12 px-4 md:px-0">
                <div class="md:p-12 md:mx-6">
                  <div class="text-center">
                    <img
                      class="mx-auto w-48"
                      src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                      alt="logo"
                    />
                    <h4 class="text-xl font-semibold mt-1 mb-12 pb-1">We are The Lotus Team</h4>
                  </div>
                  <form>
                    <p class="mb-4">Please login to your account</p>
                    <div class="mb-4">
                      <input
                        type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        id="exampleFormControlInput1"
                        placeholder="Username"
                      />
                    </div>
                    <div class="mb-4">
                      <input
                        type="password"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        id="exampleFormControlInput1"
                        placeholder="Password"
                      />
                    </div>
                    <div class="text-center pt-1 mb-12 pb-1">
                      <button
                        class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                        type="button"
                        data-mdb-ripple="true"
                        data-mdb-ripple-color="light"
                        style="
                          background: linear-gradient(
                            to right,
                            #ee7724,
                            #d8363a,
                            #dd3675,
                            #b44593
                          );
                        "
                      >
                        Log in
                      </button>
                      <a class="text-gray-500" href="#!">Forgot password?</a>
                    </div>
                    <div class="flex items-center justify-between pb-6">
                      <p class="mb-0 mr-2">Don't have an account?</p>
                      <button
                        type="button"
                        class="inline-block px-6 py-2 border-2 border-sky-400 text-white bg-sky-600 font-medium text-xs leading-tight uppercase rounded hover:bg-sky-500 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
                        data-mdb-ripple="true"
                        data-mdb-ripple-color="light"
                      >
                        Register
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <div
                class="lg:w-6/12 flex items-center lg:rounded-r-lg rounded-b-lg lg:rounded-bl-none"
                style="
                  background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
                "
              >
                <div class="text-white px-4 py-6 md:p-12 md:mx-6">
                  <h4 class="text-xl font-semibold mb-6">We are more than just a company</h4>
                  <p class="text-sm">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection