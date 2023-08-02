<?php
namespace App\Domains\Posts;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'category_id'];

    // Getters
    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getTitle(): string
    {
        return $this->attributes['title'];
    }

    public function getContent(): string
    {
        return $this->attributes['content'];
    }

    public function getCategoryId(): int
    {
        return $this->attributes['category_id'];
    }

    // Setters
    public function setTitle(string $title): void
    {
        $this->attributes['title'] = $title;
    }

    public function setContent(string $content): void
    {
        $this->attributes['content'] = $content;
    }

    public function setCategoryId(int $categoryId): void
    {
        $this->attributes['category_id'] = $categoryId;
    }
}