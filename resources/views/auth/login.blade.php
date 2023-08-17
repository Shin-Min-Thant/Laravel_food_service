@extends('yield.master')
@section('title','home')
@section('content')
<div
      class="container d-flex flex-column justify-content-center align-items-center text-center min-vh-100" style="width: 500px"
    >
    <div
    class="row bg-dark border shadow box-shadow rounded-5 p-2 justify-content-center align-items-center text-center"
  >
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="multiple" :value="__('Name/Email/Phone-number')" />
            <x-text-input id="multiple" class="block mt-1 w-full" type="multiple" name="multiple" :value="old('multiple')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('multiple')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>



        <div class="flex items-center justify-end my-3 rounded-2">


            <button class="ml-3 btn btn-light">
                {{ __('Log in') }}
            </button>
        </div>
        <h6>If you never have registered,register first.</h6>
        <a href="{{route('register')}}" class="text-center btn btn-light">Register</a>
    </form>
</div>
</div>
@endsection
