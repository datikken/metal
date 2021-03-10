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

    public function news()
    {
        $news = $this->posts->allByCategory('news', 3);

        return view('pages.news', ['posts' => $news]);
    }

    public function work()
    {
        $posts = $this->posts->allByCategory('work', 6);

        return view('pages.work', ['posts' => $posts]);
    }

    public function work_details($id)
    {
        $post = $this->posts->singleByCategory('work', $id);

        return view('pages.post_details', ['post' => $post]);
    }

    public function service_details($id)
    {
        $post = $this->posts->singleByCategory('services', $id);

        return view('pages.post_details', ['post' => $post]);
    }

    public function services_list()
    {
        $posts = $this->posts->allByCategory('services', 3);

        return view('pages.services', ['posts' => $posts]);
    }
}
