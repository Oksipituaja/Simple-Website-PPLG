<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(Request $request) {
        Category::create( [
            'title' => $request->title,
            'description' => $request->description,
        ]);
    }
}
