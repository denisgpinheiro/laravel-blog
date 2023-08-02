<?php
namespace App\Domains\Categories;

use App\Infrastructure\Repositories\CategoryRepositoryInterface;

class CategoryService
{
    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getAllCategories()
    {
        return $this->categoryRepository->getAll();
    }

    public function getCategory($id)
    {
        return $this->categoryRepository->findById($id);
    }

    public function createCategory(array $categoryData)
    {
        return $this->categoryRepository->create($categoryData);
    }

    public function updateCategory($id, array $categoryData)
    {
        return $this->categoryRepository->update($id, $categoryData);
    }

    public function deleteCategory($id)
    {
        return $this->categoryRepository->delete($id);
    }
}