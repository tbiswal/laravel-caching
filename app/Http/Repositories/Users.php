<?php

namespace App\Http\Repositories;

use App\Http\Dashboard\User;
use Carbon\Carbon;

/**
 * Class Users
 * @author tanmayabiswal
 */
class Users
{
    const CACHE_KEY = 'USERS';

    /**
     * undocumented function
     *
     * @return void
     */
    public function all($orderBy)
    {
        $key = "all.{$orderBy}";
        $cacheKey = $this->getCacheKey($key);

        return cache()->remember($cacheKey, Carbon::now()->addMinutes(5), function () use ($orderBy) {
            return User::OrderBy($orderBy)->get();
        });
    }
	
	/**
     * undocumented function
     *
     * @return void
     */
    public function get($id)
    {
        $key = "get.{$id}";
        $cacheKey = $this->getCacheKey($key);

        return cache()->remember($cacheKey, Carbon::now()->addMinutes(5), function () use ($id) {
            $user = User::find(1);
            return User::find(1);
        });
    }
    /**
     * undocumented function
     *
     * @return void
     */
    public function getCacheKey($key)
    {
        $key = strtoupper($key);

        return self::CACHE_KEY . ".$key";
    }
}
