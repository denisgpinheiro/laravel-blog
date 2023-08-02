<?php

namespace App\Infrastructure\Repositories;

use App\Domains\Categories\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function getAll()
    {
        return Category::all();
    }

    public function findById($id)
    {
        return Category::find($id);
    }

    public function create(array $categoryData)
    {
        return Category::create($categoryData);
    }

    public function update($id, array $categoryData)
    {
        $category = $this->findById($id);
        if ($category) {
            $category->update($categoryData);
            return $category;
        }
        return null;
    }

    public function delete($id)
    {
        $category = $this->findById($id);
        if ($category) {
            $category->delete();
            return true;
        }
        return false;
    }
}