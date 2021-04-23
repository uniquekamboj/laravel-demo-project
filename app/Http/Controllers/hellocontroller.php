<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * 
 */
class Hellocontroller extends Controller
{
	
	public function index()
	{
		$subjects=['maths','physics','chemistry','english'];
		$mrks=[50,90,40,80];

		return view('hello')->with(['mysub'=>$subjects,'marks'=>$mrks]);
	}
}

?>