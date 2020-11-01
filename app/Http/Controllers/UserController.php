<?php
/**
 *
 */
namespace App\Http\Controllers;
use App\Http\Dashboard\User;
use App\Exceptions\CustomException;
use Illuminate\Routing\Route;


class UserController extends Controller
{

	function __construct()
	{
		# code...
	}


	public function getIndex() {
	    throw new CustomException;
		$users = User :: all();
		$user = $users->find(1);
		Route::
		return view('users', array('name' => $user->name));
	}
}
