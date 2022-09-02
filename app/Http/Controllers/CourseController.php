<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
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

    public function show(Course $course)
    {
        if(!$course->is_published) {
            return abort(404);
        }

        $course->loadCount('instructors')
            ->load([
                'category',
                'instructors',
            ]);

        return view('courses.show', compact('course'));
    }
}
