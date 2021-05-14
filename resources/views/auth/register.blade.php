<!-- layout -->
<link rel="stylesheet" href="{{ asset('css/inputform.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form class="box" method="POST" action="{{ route('register') }}">
    @csrf
    
    <h1>Rigister_form</h1>
    
        <!-- Name -->
        <div>
            <x-input id="name" type="text" name="name" :value="old('name')" placeholder="Username" required autofocus />
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
            <x-button class="ml-4">
                {{ __('Register') }}
            </x-button>

            <a href="{{ route('login') }}">
                {{ __('ログイン画面はこちら') }}
            </a>
        </div>
    </form>
