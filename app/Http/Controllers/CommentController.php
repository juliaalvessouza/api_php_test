<?php
namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Services\CommentService;

class CommentController extends Controller
{
    protected $commentService;

    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }

    public function index()
    {
        return response()->json($this->commentService->getAllComments());
    }

    public function store(CommentRequest $request)
    {
        return response()->json($this->commentService->createComment($request->validated()), 201);
    }

    public function show($id)
    {
        return response()->json($this->commentService->getCommentById($id));
    }

    public function update(CommentRequest $request, $id)
    {
        return response()->json($this->commentService->updateComment($id, $request->validated()));
    }

    public function destroy($id)
    {
        $this->commentService->deleteComment($id);
        return response()->json(null, 204);
    }
}
