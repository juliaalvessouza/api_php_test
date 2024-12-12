<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostTagRequest;
use App\Services\PostTagService;
use Illuminate\Http\Request;

class PostTagController extends Controller
{
    protected $postTagService;

    public function __construct(PostTagService $postTagService)
    {
        $this->postTagService = $postTagService;
    }

    public function index()
    {
        return response()->json($this->postTagService->getAllPostTags());
    }

    public function show($id)
    {
        return response()->json($this->postTagService->getPostTagById($id));
    }

    public function store(PostTagRequest $request)
    {
        $data = $request->validated();
        return response()->json($this->postTagService->createPostTag($data), 201);
    }

    public function update(PostTagRequest $request, $id)
    {
        $data = $request->validated();
        return response()->json($this->postTagService->updatePostTag($id, $data));
    }

    public function destroy($id)
    {
        $this->postTagService->deletePostTag($id);
        return response()->json(null, 204);
    }
}
