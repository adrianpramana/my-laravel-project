<?php

namespace App\Repositories\User;

use App\Models\User;
use LaravelEasyRepository\Service;

class UserRepositoryImplement extends Service implements UserRepository
{
    protected $model;
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function getByUserId($id)
    {
        return $this->model->where("id", $id)->first();
    }

    public function getByEmail($email)
    {
        return $this->model->where("email", $email)->get();
    }
}
