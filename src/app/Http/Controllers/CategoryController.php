<?php
namespace App\Http\Controllers;

use App\Domains\Categories\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categories = $this->categoryService->getAllCategories();
        return response()->json($categories);
    }

    public function show($id)
    {
        $category = $this->categoryService->getCategory($id);

        if (!$category) {
            return response()->json(['message' => 'Categoria não encontrada'], 404);
        }

        return response()->json($category);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
        ]);

        $this->categoryService->createCategory($validatedData);

        return response()->json(['message' => 'Categoria criada com sucesso'], 201);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
        ]);

        $this->categoryService->updateCategory($id, $validatedData);

        return response()->json(['message' => 'Categoria atualizada com sucesso']);
    }

    public function destroy($id)
    {
        $this->categoryService->deleteCategory($id);

        return response()->json(['message' => 'Categoria excluída com sucesso']);
    }
}