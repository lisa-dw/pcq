<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user',
    function (Request $request) {
    return $request->user();    // $객체 -> 메서드() : 이런 식으로 메서드를 부른다.
                                //   = 자바 식으로 하면 request.user() 임 // request 객체 안에 user() 메서드 라는 뜻.
});
             // 이렇게 객체를 new 생성하고, 그 생성한 객체에서 메서드를 부르는 과정이 번거로워서 퍼사드(::)를 사용하는 것.


Route::apiResources([    // 이 라우터를 통해서 사용자가 http 요청한 것을 ('/clients' 이 문자열로 요청한 것임)
                         // 해당 컨트롤러에 연결해주는 것임.
                         // 사용할 컨트롤러들 다 지정해주기.

    // 라우트 요청 => 연결할 클래스 ( 이 라우트 요청을 이 클래스랑 연결해줘 )
    '/clients' => \App\Http\Controllers\Api\v1\Client\ClientsController::class,

    '/players' => \App\Http\Controllers\Api\v1\Player\PlayersController::class,

    '/quests' => \App\Http\Controllers\Api\v1\Quest\QuestsController::class,
    // 이 한줄 만으로도 해당Controller.php 안의 메소드들이랑 자동으로 연결된다.
    // if 자동으로 만들어진 메소드가 아니라, 개인적으로 만든 커스텀 메소드라면 Route에 따로 선언 해줘야 함.

]);

