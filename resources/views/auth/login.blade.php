<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<!-- layout -->
<link rel="stylesheet" href="{{ asset('css/inputform.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />
    <form class="box" method="POST" action="{{ route('login') }}">
    @csrf
        <h1>Login_form</h1>
        
        <!-- Name -->
        <div>
            <x-input id="name" type="name" name="name" :value="old('name')" placeholder="Username" required autofocus />
        </div>
        
        <!-- Password -->
        <div>
            <x-input id="password"
                     type="password"
                     name="password"
                     placeholder="Password"
                     required autofocus />
        </div>

        <div>
            <x-button class="ml-3">
                {{ __('Login') }}
            </x-button>

            <a href="{{ route('register') }}">
                {{ __('新規登録画面はこちら') }}
            </a>
        </div>
    </form>