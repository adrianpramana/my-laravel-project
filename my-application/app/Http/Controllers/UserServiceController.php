<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Services\User\UserService;
use Illuminate\Http\Request;

class UserServiceController extends Controller
{
    private $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function findByEmail($email)
    {
        $result = $this->userService->getByEmail($email);
        return response()->json([
            "success" => true,
            "code" => 200,
            "data" => $result
        ]);
    }

    public function create(UserRequest $request)
    {
    }
}
