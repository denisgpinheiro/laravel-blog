<?php
namespace App\Infrastructure\Repositories;

use App\Domains\Posts\Post;

interface PostRepositoryInterface
{
    /**
     * Retorna todos os posts.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAll();

    /**
     * Busca um post por ID.
     *
     * @param int $id
     * @return \App\Domains\Posts\Post|null
     */
    public function findById($id);

    /**
     * Cria um novo post.
     *
     * @param array $postData
     * @return \App\Domains\Posts\Post
     */
    public function create(array $postData);

    /**
     * Atualiza um post existente.
     *
     * @param int $id
     * @param array $postData
     * @return \App\Domains\Posts\Post|null
     */
    public function update($id, array $postData);

    /**
     * Exclui um post.
     *
     * @param int $id
     * @return bool
     */
    public function delete($id);
}