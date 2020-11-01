<?php
/**
 *
 */
namespace App\Http\Controllers;
use Facades\App\HTTP\Repositories\Users;
use App\Exceptions\CustomException;
use Illuminate\Routing\Route;


class UserCacheController extends Controller
{

	function __construct()
	{
		# code...
	}


	public function getIndex() {
		$users = Users::get(1);
		return view('userCache', compact('users'));
	}
}
