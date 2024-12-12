<?php
namespace App\Repositories;

use App\Models\Tag;

class TagRepository
{
    public function all()
    {
        return Tag::all();
    }

    public function find($id)
    {
        return Tag::find($id);
    }

    public function create(array $data)
    {
        return Tag::create($data);
    }

    public function update($id, array $data)
    {
        $tag = Tag::find($id);
        $tag->update($data);
        return $tag;
    }

    public function delete($id)
    {
        return Tag::destroy($id);
    }
}
