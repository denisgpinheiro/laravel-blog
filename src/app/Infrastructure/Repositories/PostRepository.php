<?php
namespace App\Infrastructure\Repositories;

use App\Domains\Posts\Post;

class PostRepository implements PostRepositoryInterface
{
    public function getAll()
    {
        return Post::all();
    }

    public function findById($id)
    {
        return Post::find($id);
    }

    public function create(array $postData)
    {
        return Post::create($postData);
    }

    public function update($id, array $postData)
    {
        $post = $this->findById($id);
        if ($post) {
            $post->update($postData);
            return $post;
        }
        return null;
    }

    public function delete($id)
    {
        $post = $this->findById($id);
        if ($post) {
            $post->delete();
            return true;
        }
        return false;
    }
}