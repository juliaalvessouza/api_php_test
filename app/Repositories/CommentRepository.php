<?php

namespace App\Repositories;

use App\Models\Comment;

class CommentRepository
{
    public function all()
    {
        return Comment::all();
    }

    public function find($id)
    {
        return Comment::find($id);
    }

    public function create(array $data)
    {
        return Comment::create($data);
    }

    public function update($id, array $data)
    {
        $comment = Comment::find($id);
        $comment->update($data);
        return $comment;
    }

    public function delete($id)
    {
        return Comment::destroy($id);
    }
}
