<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public static function getById($id)
    {
       return Category::where('id', $id)->get();
    }
}
