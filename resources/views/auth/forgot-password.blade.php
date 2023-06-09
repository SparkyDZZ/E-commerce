{{--<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>--}}

@extends('frontend.layout')
@section('js')
    @vite('resources/js/app.js')
@endsection
@section('content')
<section>
<div class="flex items-center justify-center h-screen md:my-10">
    <!-- Login Container -->
    <div class="w-96 max-md:w-full flex-col border bg-white px-6 py-10 shadow-md rounded-[4px] ">
      <div class="mb-8 flex justify-center">
        <img id="logo" class="max-md:relative object-contain h-20 w-20" src="{{url('frontend/assets/images/logo/Logo_black.png')}}">
      </div>
      @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <ul class="mb-4 font-medium text-sm text-red-700 list-disc list-inside">
            @error('email')
                <li>{{ $message }}</li>
            @enderror
        </ul>
        <div class="mb-4 text-sm text-gray-700">
            {{ __('Mot de passe oublié ? Aucun problème. Indiquez-nous simplement votre adresse e-mail et nous vous enverrons un lien de réinitialisation de mot de passe qui vous permettra d\'en choisir un nouveau.') }}
        </div>
      <form action="{{ route('password.email') }}" method="POST">
      @csrf
      <div class="flex flex-col text-sm rounded-md">
        <input name="email" class="mb-2 rounded-[4px] border-gray-300 p-3 hover:outline-none focus:ring-pcolor focus:border-pcolor hover:border-pcolor " type="text" placeholder="Entrez votre Email" />

      </div>
      <button class="mt-5 w-4/5 border ml-8 p-2 bg-pcolor text-white rounded-[4px] duration-300" type="submit">Réinitialiser mot de passe</button>
      </form>

      
    </div>
  </div>
</section>
  @endsection
