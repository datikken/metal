<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class ServiceController extends Controller
{
    public static function get_services()
    {
        $catId = Category::where('name', 'services')->get()[0]->id;

        return Post::where('category_id', $catId)->get();
    }
}
