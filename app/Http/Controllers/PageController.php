<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function contact()
    {
        return view('pages.contact');
    }

    public function about()
    {
        $instructors = Instructor::query()
            ->take('10')
            ->get();

        return view('pages.about', compact('instructors'));
    }

    public function faq()
    {
        return view('pages.faq');
    }
}
