<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * 
 */
class loginController extends Controller
{
	
	public function login(Request $req)
	{

		$username = $req->input('user');
		$password = $req->input('password');
		//$req->session()->put('user-login',$username['user-login']);
		//echo session('user-login');
		echo "Welcome ".$username." You have Successfully Logged In ";
	}

}
?>