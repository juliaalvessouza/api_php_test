<?php
namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        return response()->json($this->postService->getAllPosts());
    }

    public function show($id)
    {
        return response()->json($this->postService->getPostById($id));
    }

    public function store(Request $request)
    {
        $data = $request->validated();

        $post = Post::create($data);

        SendPostNotification::dispatch($post);

        return response()->json($post, 201);
    }

    public function update(PostRequest $request, $id)
    {
        $data = $request->validated();
        return response()->json($this->postService->updatePost($id, $data));
    }

    public function destroy($id)
    {
        $this->postService->deletePost($id);
        return response()->json(null, 204);
    }
}
