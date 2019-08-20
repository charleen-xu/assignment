<?php

use Illuminate\Http\Request;
use App\House; //house-增加
use App\HouseController; //沒增加qq

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
/*
Route::get('index','HomeController@index');

//Route::get('my_second_api','HomeController@my_second_api');

Route::post('store','HomeController@store');

//Route::

*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); //檔案原型





//HouseController＠後面都有對應的function
Route::get('houses', 'HouseController@index');
//Route::get('houses/{house}', 'HouseController@show');
Route::post('houses', 'HouseController@store');
Route::put('houses/{house}', 'HouseController@update');
Route::delete('houses/{house}', 'HouseController@delete');