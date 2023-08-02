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
        // Obter todas as categorias usando o serviço de aplicação.
        $categories = $this->categoryService->getAllCategories();

        // Retornar as categorias em formato JSON como resposta da API.
        return response()->json($categories);
    }

    public function show($id)
    {
        // Obter uma categoria específica pelo ID usando o serviço de aplicação.
        $category = $this->categoryService->getCategory($id);

        // Se a categoria não for encontrada, retornar uma resposta de erro.
        if (!$category) {
            return response()->json(['message' => 'Categoria não encontrada'], 404);
        }

        // Retornar a categoria em formato JSON como resposta da API.
        return response()->json($category);
    }

    public function store(Request $request)
    {
        // Validar os dados recebidos do cliente.
        $validatedData = $request->validate([
            'name' => 'required|string',
        ]);

        // Criar uma nova categoria usando o serviço de aplicação.
        $this->categoryService->createCategory($validatedData);

        // Retornar uma resposta de sucesso.
        return response()->json(['message' => 'Categoria criada com sucesso'], 201);
    }

    public function update(Request $request, $id)
    {
        // Validar os dados recebidos do cliente.
        $validatedData = $request->validate([
            'name' => 'required|string',
        ]);

        // Atualizar a categoria usando o serviço de aplicação.
        $this->categoryService->updateCategory($id, $validatedData);

        // Retornar uma resposta de sucesso.
        return response()->json(['message' => 'Categoria atualizada com sucesso']);
    }

    public function destroy($id)
    {
        // Excluir a categoria usando o serviço de aplicação.
        $this->categoryService->deleteCategory($id);

        // Retornar uma resposta de sucesso.
        return response()->json(['message' => 'Categoria excluída com sucesso']);
    }
}