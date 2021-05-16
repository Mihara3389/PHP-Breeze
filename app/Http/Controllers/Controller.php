<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

//フレームワーク内にあるコントローラの基底クラスをextends
//Illuminate\Routing\Controllerクラスのこと
//ミドルウェアの登録メソッドであるmiddleware()
//vender/laravel/framework/src/Routing/Controller.phpを見る
class Controller extends BaseController
{
    //以下を使用するのに定義
    //AuthorizesRequests →　権限設定をするauthorize()
    //DispatchesJobs     →  ジョブを呼び出すdispatch()
    //ValidatesRequests  →  バリデーションを設定するvaildate() 
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
