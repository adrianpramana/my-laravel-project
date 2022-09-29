<?php

namespace App\Services\User;

use Illuminate\Support\Facades\Log;
use App\Repositories\User\UserRepository;
use Exception;
use LaravelEasyRepository\Service;

class UserServiceImplement extends Service implements UserService
{
    protected $mainRepository;

    public function __construct(UserRepository $mainRepository)
    {
        $this->mainRepository = $mainRepository;
    }

    public function getByEmail($email)
    {
        try {
            return $this->mainRepository->getByEmail($email);
        } catch (Exception $ex) {
            Log::debug($ex->getMessage());
            return [];
        }
    }
}
