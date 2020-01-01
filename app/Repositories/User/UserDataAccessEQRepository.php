<?php

namespace App\Repositories\User;
use App\User;

class UserDataAccessEQRepository implements UserDataAccessRepositoryInterFace
{
    public function getAll()
    {
        return User::all();
    }
}