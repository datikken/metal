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
    public function work_list()
    {
        $posts = $this->posts->getByType('work');

        return view('pages.work', ['posts' => $posts]);
    }
}
