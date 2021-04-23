<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
/**use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * 
 */
class UserAuthController extends Controller
{
	
	function userLogin(Request $request)
	{
		return view('login');

		$data =$request->input('user');
		$request ->session()->put('user',$data);		
		return redirect('profile');
	}
}