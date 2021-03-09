<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepository;
use App\Models\Post;

class PostController extends Controller
{
    public function __construct(PostRepository $posts)
    {
        $this->posts = $posts;
    }

    public function services_list()
    {
        $posts = $this->posts->getByCategory('services');

        return view('pages.services', ['posts' => $posts]);
    }

    public function work_details($id)
    {
        $post = Post::where('id', $id)->get();

        return view('pages.post_details', ['post' => $post ]);
    }
}
