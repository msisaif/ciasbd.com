<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $categories = Category::query()
            ->whereNotNull('name')
            ->whereNotNull('slug')
            ->take(10)
            ->get();

        return view('courses.index', compact('categories'));
    }

    public function show($id)
    {
        return view('courses.show');
    }
}
