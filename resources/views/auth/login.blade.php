{{--<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>--}}

<!-- component -->

@extends('frontend.layout')
@section('js')
    @vite('resources/js/store.js')
@endsection
@section('content')
<section>
<div class="flex items-center justify-center h-screen md:mt-20">
    <!-- Login Container -->
    <div class="min-w-fit max-md:w-full flex-col border bg-white px-6 py-14 shadow-md rounded-[4px] ">
      <div class="mb-8 flex justify-center">
        <img id="logo" class="max-md:relative object-contain h-24 w-24" src="{{url('frontend/assets/images/logo/Logo_black.png')}}">
      </div>
      <form action="">
      @csrf
      <div class="flex flex-col text-sm rounded-md">
        <input class="mb-5 rounded-[4px] border p-3 hover:outline-none focus:outline-none hover:border-pcolor " type="text" placeholder="Entrez votre Email" />
        <input class="border rounded-[4px] p-3 hover:outline-none focus:outline-none hover:border-pcolor" type="password" placeholder="Mot de passe" />
      </div>
      <button class="mt-5 w-full border p-2 bg-gradient-to-r from-pcolor bg-black text-white rounded-[4px] hover:bg-stone-600 scale-105 duration-300" type="submit">Connexion</button>
      <div class="mt-5 flex justify-between text-sm text-gray-600">
        <a href="#">Mot de passe oublié ?</a>
        <a href="#">S'inscrire</a>
      </div>
      </form>
      <div class="flex justify-center mt-5 text-sm">
        <p class="text-gray-400">Se connecter avec</p>
      </div>
      <div class="mt-5 flex justify-center gap-3    ">
        <img class="h-7 grayscale cursor-pointer hover:grayscale-0 scale-105 duration-300" src="{{ url('frontend/assets/images/icons/google.png')}}">
        <img class="h-7 grayscale cursor-pointer hover:grayscale-0 scale-105 duration-300" src="{{ url('frontend/assets/images/icons/facebook.png')}}">
      </div>
      <div class="mt-5 flex text-center text-sm text-gray-400">
        <p>
          This site is protected by reCAPTCHA and the Google <br />
          <a class="underline" href="">Privacy Policy</a>  and <a class="underline" href="">Terms of Service</a>  apply.
        </p>
      </div>
    </div>
  </div>
</section>
  @endsection