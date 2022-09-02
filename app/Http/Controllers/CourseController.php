<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
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

        $course->lectures_count = 14;

        return view('courses.show', compact('course'));
    }

    public function learn(Course $course, $content_id = null)
    {
        if(!$course->is_published) {
            return abort(404);
        }

        $course->load([
            'topics.contents'
        ]);

        $content_ids = [];
        
        $course->topics->map(function ($topic) use (&$content_ids) {
            $topic->contents->map(function ($content) use (&$content_ids) {
                array_push($content_ids, $content->id);
            });
        });

        
        $content_id = $content_id ?? 0;

        if(!$content_id && $content_ids[0]) {
            return redirect()->route('courses.learn', [$course->id, $content_ids[0]]);
        }
        
        $active_content_id = in_array($content_id, $content_ids) ? $content_id : ($content_ids[0] ?? 0);
        
        $content = Content::with('topic')->find($active_content_id);

        $active_topic_id = $content->topic->id ?? 0;

        return view('courses.learn', compact('course', 'content', 'active_topic_id', 'active_content_id'));
    }
}
