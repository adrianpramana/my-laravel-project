<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\User\PostService;
use Exception;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        return view('posts', [
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => Post::find($slug)
        ]);
    }



    /**
     *! Repository & Service Pattern
     */
    // protected $postService;

    // public function __construct(PostService $postService)
    // {
    //     $this->postService = $postService;
    // }
    // /**
    //  * Display a listing of the resources.
    //  * 
    //  * @return \Illuminate\Http\Response */

    // public function index()
    // {
    //     $result = ['status' => 200];

    //     try {
    //         $result['data'] = $this->postService->getAll();
    //     } catch (Exception $e) {
    //         $result = [
    //             'status' => 500,
    //             'error' => $e->getMessage()
    //         ];
    //     }

    //     return response()->json($result, $result['status']);
    // }

    // public function store(Request $request)
    // {
    //     $data = $request->only([
    //         'title',
    //         'description',
    //     ]);

    //     $result = ['status' => 201];

    //     try {
    //         $result['data'] = $this->postService->store($data);
    //     } catch (Exception $e) {
    //         $result = [
    //             'status' => 500,
    //             'error' => $e->getMessage()
    //         ];
    //     }
    // }
}
