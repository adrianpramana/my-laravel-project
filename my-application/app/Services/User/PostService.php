<?php

namespace App\Services\User;

use App\Repositories\User\PostRepository;
use Illuminate\Auth\Events\Validated;

use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

use function PHPUnit\Framework\throwException;

class PostService
{
    // protected $postRepository;

    // public function __construct(PostRepository $postRepository)
    // {
    //     $this->postRepository = $postRepository;
    // }

    // public function getAll()
    // {
    //     return $this->postRepository->getAll();
    // }

    // public function store($data)
    // {
    //     $validator = Validator::make($data, [
    //         'title' => 'required',
    //         'description' => 'required'
    //     ]);

    //     if ($validator->fails()) {
    //         throw new InvalidArgumentException($validator->errors()->first());
    //     }

    //     $result = $this->postRepository->save($data);

    //     return $result;
    // }
}
