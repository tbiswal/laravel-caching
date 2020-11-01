<?php
/**
 * Dependency Injection using IoC
 */
namespace App\Http\Controllers;

use App\Http\Interfaces\UserRepositoryInterface;

class UserTwoController extends Controller
{
	
	private $user;

	function __construct(UserRepositoryInterface $user)
	{
		$this->user = $user;
	}


	public function getIndex() {
		$user = $this->user->findUser(1);
		return view('users', array('name' => $user->name));
	}
}