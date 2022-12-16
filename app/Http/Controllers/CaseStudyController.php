<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CaseStudyController extends Controller
{
    public function index()
    {
        $caseStudys = Post::where('status',1)
            ->where('category_id',3)
            ->orderBy('created_at', 'DESC')
            ->get();
        return view('case-study.index',['caseStudys' => $caseStudys]);
    }
}
