<?php
namespace App\Domains\Posts;

use App\Infrastructure\Repositories\PostRepositoryInterface;

class PostService
{
    private $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAllPosts()
    {
        return $this->postRepository->getAll();
    }

    public function getPost($id)
    {
        return $this->postRepository->findById($id);
    }

    public function createPost(array $postData)
    {
        return $this->postRepository->create($postData);
    }

    public function updatePost($id, array $postData)
    {
        return $this->postRepository->update($id, $postData);
    }

    public function deletePost($id)
    {
        return $this->postRepository->delete($id);
    }
}