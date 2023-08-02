<?php

use Tests\TestCase;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Http\Controllers\PostController;
use App\Domains\Posts\PostService;

class PostControllerTest extends TestCase
{
    private $postController;
    private $postServiceMock;

    protected function setUp(): void
    {
        parent::setUp();

        $this->postServiceMock = $this->createMock(PostService::class);
        $this->postController = new PostController($this->postServiceMock);
    }

    public function testIndex()
    {
        $postsData = [
            "id"=>1,
            "title"=>"Primeiro post",
            "content"=>"Conteúdo do primeiro post",
            "category_id"=>1,

        ]; 

        $this->postServiceMock->expects($this->once())
            ->method('getAllPosts')
            ->willReturn($postsData);

        $response = $this->postController->index();

        $this->assertEquals(json_encode($postsData), $response->getContent());
    }

    public function testStore()
    {
        $requestData = [
            'title' => 'Novo Post Unit',
            'content' => 'Post teste unit',
            'category_id' => 1,
        ];

        $this->postServiceMock->expects($this->once())
            ->method('createPost')
            ->with($requestData);

        $response = $this->postController->store(new Request($requestData));

        $this->assertEquals(201, $response->getStatusCode());
        $this->assertEquals(json_encode(['message' => 'Post criado com sucesso']), $response->getContent());
    }

}