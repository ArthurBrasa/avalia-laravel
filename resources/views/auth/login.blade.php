{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
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
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
@extends('default_components.main')

@section('content')
<section class="container-md overflow-hidden my-auto mt-3" style="height: 100%;">
    <div class="d-flex flex-column flex-sm-row" style="height: 75%;">
      
      <div class="" style="width: 100%; height: 100%;">
          <img src="imgs/svg/login.svg" alt="" width="100%" height="" class="" srcset="">
      </div>

      <div class="my-auto px-3" style="width: 100%; height: 100%;">
        <form class="" method="POST" action="{{route('login')}}">
          @csrf
            <span class="text-center d-block">Avalia UnB</span>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome de Usuário</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escreva seu nome ou email">
            <div id="emailHelp" class="form-text">Nos nunca vamos compartilhar seu e-mail!</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password"  name="password" class="form-control" id="exampleInputPassword1" placeholder="Sua senha">
          </div>
          <div class="d-flex justify-content-around">
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Me manter conectado</label>
            </div>
            <div class="mb-3 form-check">
                <a href="#" class="link-info text-decoration-none">Esqueci minha senha</a>
            </div>
          </div>
          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-outline-success rounded-5" style="width: 200px;">Login</button>
            <a type="submit" class="btn btn-outline-success rounded-5" style="width: 200px;" href="{{route('register')}}">Registrar</a>
          </div>
          {{-- @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
          @endif --}}
        </form>
      </div>
    </div>
</section>
@endsection
