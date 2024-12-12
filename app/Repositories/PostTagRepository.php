<?php

namespace App\Repositories;

use App\Models\PostTag;

class PostTagRepository
{
    public function all()
    {
        return PostTag::all();
    }

    public function find($id)
    {
        return PostTag::find($id);
    }

    public function create(array $data)
    {
        return PostTag::create($data);
    }

    public function update($id, array $data)
    {
        $postTag = PostTag::find($id);
        $postTag->update($data);
        return $postTag;
    }

    public function delete($id)
    {
        return PostTag::destroy($id);
    }
}
