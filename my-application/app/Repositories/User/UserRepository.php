<?php

namespace App\Repositories\User;

use LaravelEasyRepository\Repository;

interface UserRepository extends Repository
{
    public function getByUserId($id);
    public function getByEmail($email);
}
