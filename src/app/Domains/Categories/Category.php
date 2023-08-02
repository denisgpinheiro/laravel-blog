<?php
namespace App\Domains\Categories;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    // Getters
    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    // Setters
    public function setName(string $name): void
    {
        $this->attributes['name'] = $name;
    }
}