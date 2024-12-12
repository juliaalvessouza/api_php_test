<?php

namespace App\Services;

use App\Repositories\PostTagRepository;

class PostTagService
{
    protected $postTagRepository;

    public function __construct(PostTagRepository $postTagRepository)
    {
        $this->postTagRepository = $postTagRepository;
    }

    public function getAllPostTags()
    {
        return $this->postTagRepository->all();
    }

    public function getPostTagById($id)
    {
        return $this->postTagRepository->find($id);
    }

    public function createPostTag(array $data)
    {
        return $this->postTagRepository->create($data);
    }

    public function updatePostTag($id, array $data)
    {
        return $this->postTagRepository->update($id, $data);
    }

    public function deletePostTag($id)
    {
        return $this->postTagRepository->delete($id);
    }
}
