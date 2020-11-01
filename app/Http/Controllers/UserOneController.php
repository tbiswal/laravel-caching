<?php
/**
 * Plain dependency injection
 */
namespace App\Http\Controllers;
use App\Http\Interfaces\UserRepositoryInterface;
use App\Http\Repositories\DBUserRepository;



class UserOneController extends Controller
{
	
	function __construct(DBUserRepository $user)
	{
		$this->user = $user;
	}


	public function getIndex() {
		$user = $this->user->findUser(1);
		return view('users', array('name' => $user->name));
	}
}