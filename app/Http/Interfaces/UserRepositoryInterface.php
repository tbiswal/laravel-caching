<?php
namespace App\Http\Interfaces;

interface UserRepositoryInterface {
	public function findUser($userid);
}