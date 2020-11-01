<?php
namespace App\Http\Repositories;

use App\Http\Interfaces\UserRepositoryInterface;
use App\Http\Dashboard\User;


class DBUserRepository implements UserRepositoryInterface {
	public function findUser($userid) {
		return User :: all()->find($userid);
	}
}