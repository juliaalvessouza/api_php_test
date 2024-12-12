<?php
namespace App\Services;

use App\Repositories\PostRepository;

class PostService
{
    protected $postRepo;

    public function __construct(PostRepository $postRepo)
    {
        $this->postRepo = $postRepo;
    }

    public function getAllPosts()
    {
        return $this->postRepo->all();
    }

    public function getPostById($id)
    {
        return $this->postRepo->find($id);
    }

    public function createPost(array $data)
    {
        return $this->postRepo->create($data);
    }

    public function updatePost($id, array $data)
    {
        return $this->postRepo->update($id, $data);
    }

    public function deletePost($id)
    {
        return $this->postRepo->delete($id);
    }
}
