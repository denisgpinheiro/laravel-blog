<?php 
namespace App\Infrastructure\Repositories;

use App\Domains\Categories\Category;

interface CategoryRepositoryInterface
{
    /**
     * Retorna todas as categorias.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAll();

    /**
     * Busca uma categoria por ID.
     *
     * @param int $id
     * @return \App\Domains\Categories\Category|null
     */
    public function findById($id);

    /**
     * Cria uma nova categoria.
     *
     * @param array $categoryData
     * @return \App\Domains\Categories\Category
     */
    public function create(array $categoryData);

    /**
     * Atualiza uma categoria existente.
     *
     * @param int $id
     * @param array $categoryData
     * @return \App\Domains\Categories\Category|null
     */
    public function update($id, array $categoryData);

    /**
     * Exclui uma categoria.
     *
     * @param int $id
     * @return bool
     */
    public function delete($id);
}