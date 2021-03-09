<?php
namespace App\Repositories;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    public function all()
    {
        return Post::all();
    }

    public function getByCategory($type)
    {
        $cat = Category::where('name', $type)->get();
        $posts = Post::where('category_id', $cat[0]->id)->paginate(6);

        return $posts;
    }

    public function getByTag($tag)
    {
       return Post::withAnyTags([$tag])
//           ->where('id', 1)
           ->get();
    }

    public function getById($id)
    {
        return Post::where('id', $id)->get();
    }

    public function getByUser(User $user)
    {
        // NewsItem::withAllTags(['tag1', 'tag2']);

        return Post::where('user_id'. $user->id)->get();
    }
}
