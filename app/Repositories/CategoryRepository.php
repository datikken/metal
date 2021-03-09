<?php
namespace App\Repositories;
use App\Models\Post;
use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
    // NewsItem::withAllTags(['tag1', 'tag2']);
    public function all()
    {
        return Category::all();
    }

    public function getById($id)
    {
        return Category::where('id', $id)->get();
    }
}
