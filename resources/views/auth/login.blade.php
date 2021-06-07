<!DOCTYPE html>
<html lang="fr">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('storage/dist/images/logo.svg') }}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Evote, application de vote en ligne.">
        <meta name="keywords" content="Evote, Vote en ligne, Bénin">
        <meta name="author" content="FORIJ">
        <title>Connexion - Evote</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('storage/dist/css/app.css') }}">
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="login">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Login Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <a href="" class="-intro-x flex items-center pt-5">
                        <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{{ asset('storage/dist/images/logo.svg') }}">
                        <span class="text-white text-lg ml-3"> E<span class="font-medium">vote</span> </span>
                    </a>
                    <div class="my-auto">
                        <img alt="Vote en ligne" class="-intro-x w-1/2 -mt-16" src="{{ asset('storage/dist/images/illustration2.svg') }}">
                        <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                            Votre application
                            <br>
                            de vote en ligne.
                        </div>
                        <div class="-intro-x mt-5 text-lg text-white">Voter n'a jamais été aussi simple et fiable.</div>
                    </div>
                </div>
                <!-- END: Login Info -->
                <!-- BEGIN: Login Form -->
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Se connecter
                        </h2>
                        <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">Connectez-vous afin de mener toute action</div>
                        <form class="intro-x mt-8" method="POST" action="{{ route('login') }}">
                            @csrf
                            <input type="email" class="intro-x login__input input input--lg border border-gray-300 block" placeholder="Adresse email" required>
                            @error('email')
                                <span class="invalid-feedback text-red-500" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input type="password" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Mot de passe" required>
                        {{-- <div class="intro-x flex text-gray-700 text-xs sm:text-sm mt-4">
                            <div class="flex items-center mr-auto">
                                <input type="checkbox" class="input border mr-2" id="remember-me">
                                <label class="cursor-pointer select-none" for="remember-me">Se rappeler de moi</label>
                            </div>
                            <a href="">Mot de passe oublié?</a> 
                        </div> --}}
                            <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                                <button class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3">Se connecter</button>
                                {{-- <button class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 mt-3 xl:mt-0">Sign up</button> --}}
                            </div>
                        </form>
                        {{-- <div class="intro-x mt-10 xl:mt-24 text-gray-700 text-center xl:text-left">
                            By signin up, you agree to our 
                            <br>
                            <a class="text-theme-1" href="">Terms and Conditions</a> & <a class="text-theme-1" href="">Privacy Policy</a> 
                        </div> --}}
                    </div>
                </div>
                <!-- END: Login Form -->
            </div>
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="{{ asset('storage/dist/js/app.js') }}"></script>
        <!-- END: JS Assets-->
    </body>
</html>

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
