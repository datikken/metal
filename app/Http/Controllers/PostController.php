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

    public function service_details($id)
    {
        $post = $this->posts->singleByCategory('services', $id);

        return view('pages.post_details', ['post' => $post]);
    }

    public function services_list()
    {
        $posts = $this->posts->allByCategory('services');

        return view('pages.services', ['posts' => $posts]);
    }

    public function work_details($id)
    {
        $post = Post::where('id', $id)->get();

        return view('pages.post_details', ['post' => $post ]);
    }
}
