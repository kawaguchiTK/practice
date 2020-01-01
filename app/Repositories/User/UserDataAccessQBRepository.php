<?php

namespace App\Repositories\User;
use DB;

class UserDataAccessQBRepository implements UserDataAccessRepositoryInterFace
{
    protected $table = "users";

    public function getAll()
    {
        return DB::table($this->table)->get();
    }
}