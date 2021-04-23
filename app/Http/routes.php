<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('pricefilter/{max}/{min?}',function($max,$min){

	echo "max = ".$max "min = ".$min;

});*/
Route::get('registration','registrationcontroller@register');
//Route::get('login','UserAuth@userLogin');
//Route::post('post-login','UserAuth@userLogin');
Route::get('login','UserAuthController@userLogin');
//Route::view('profile','profile');
Route::get('profile', function () {
    return view('profile');
});
Route::get('user-login','loginController@login');

//Route::post('post-login','login');
//Route::get('login','UserAuth');
Route::post("user-login",'UserAuthController@userLogin');

Route::get('test/{age}','hellocontroller@index')->where(['age'=>"[0-9]+"]);

Route::get('/logout', function () {
    if(session()->hash('user'))
    {
    	session()->pull('user',null);
	}
	return redirect('login');
});
/*Route::get('/login', function () {
    if(session()->hash('user'))
    {
    	return redirect('profile');
	}
	return view('login');
});

/*Route::get('sayhello', function()
{
	return view('hello');
});*/
Route::get('/', function () {
    return view('welcome');
});
?>