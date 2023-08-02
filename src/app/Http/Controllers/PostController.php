<?php
namespace App\Http\Controllers;

use App\Domains\Posts\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $posts = $this->postService->getAllPosts();

        return response()->json($posts);
    }

    public function show($id)
    {
        $post = $this->postService->getPost($id);

        if (!$post) {
            return response()->json(['message' => 'Post não encontrado'], 404);
        }

        return response()->json($post);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'required|integer',
        ]);

        $this->postService->createPost($validatedData);

        return response()->json(['message' => 'Post criado com sucesso'], 201);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'required|integer',
        ]);

        $this->postService->updatePost($id, $validatedData);

        return response()->json(['message' => 'Post atualizado com sucesso']);
    }

    public function destroy($id)
    {
        $this->postService->deletePost($id);

        return response()->json(['message' => 'Post excluído com sucesso']);
    }
}