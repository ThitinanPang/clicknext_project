<?php
use App\Models\Workspace;
use App\Http\Controllers\MainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// $router->get('/test', function () {
//     return view('index');
// });

// $router->post('/home', function (Request $request) {
//     $inputName = $request->get('inputname');

//     $workspace = new Workspace($inputName);

//     $workspace->saveToDatabase();

//     return redirect()->route('success');
// });
Route::get('/home', function () {
    return view('index');
});

Route::post('/home', 'MainController@store');
