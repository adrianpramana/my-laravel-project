<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Repositories\User\UserRepository;
use App\Services\User\UserService;

use Illuminate\Http\Request;

class UserController extends Controller
{

    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function findUserId($id)
    {
        $result = $this->userRepository->getByUserId($id);
        return response()->json([
            "success" => true,
            "code" => 200,
            "data" => $result
        ]);
    }
}
