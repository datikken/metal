<?php
namespace App\Repositories;
use App\Models\Post;
use App\Models\User;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    public function all()
    {
        return Post::all();
    }

    public function getByType($type)
    {
        return Post::where('post_type', $type)
            ->paginate(3);
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
// retrieving models that have any of the given tags
// retrieve models that have all of the given tags
//        NewsItem::withAllTags(['tag1', 'tag2']);

        return Post::where('user_id'. $user->id)->get();
    }
}
