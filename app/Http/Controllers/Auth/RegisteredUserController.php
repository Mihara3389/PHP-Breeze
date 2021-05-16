<?php

//名前空間定義
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        //validationチェック
        //resources/lanf/en/validation.php
        $request->validate([
            'name' => 'required|string|max:63',
            'password' => 'required',
        ]);

        //user登録
        //User::create() → User.phpに定義している値に入ってほしい
        $user = User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ]);

       //新規登録
        event(new Registered($user));

        //登録後login権限を与える
        Auth::login($user);

        //RouteServiceProvider.phpのHOMEで定義している値へリダイレクト
        return redirect(RouteServiceProvider::HOME);
    }
}
