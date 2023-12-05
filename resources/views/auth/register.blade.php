{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
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
        <form class="" method="POST" action="{{route('register')}}">
          @csrf
          <span class="text-center d-block">Avalia UnB - Registrar</span>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome de Usuário</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Escreva seu nome">
            <div id="emailHelp" class="form-text">Nos nunca vamos compartilhar seu e-mail!</div>
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">E-mail</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
            <div id="emailHelp" class="form-text">Nos nunca vamos compartilhar seu e-mail!</div>
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password"  name="password" class="form-control" id="exampleInputPassword1" placeholder="Sua senha">
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password"  name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Confirmar Senha">
          </div>

            <div class="mb-3 form-check">
                <a href="#" class="link-info text-decoration-none">Esqueci minha senha</a>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-outline-success rounded-5" style="width: 200px;">Registrar</button>
                <a type="submit" class="btn btn-outline-success rounded-5" style="width: 200px;" href="{{route('login')}}">Login</a>
              </div>


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
