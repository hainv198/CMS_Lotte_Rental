<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PRCenterController extends Controller
{
    public function index() {
        return view('components.PRCenter.index');
    }
    /*{
        $newEvents = Post::where('status', 1)
            ->where('category_id', 1)
            ->limit(5)
            ->orderBy('created_at', 'asc')
            ->get();
        return view('components.PRCenter.index', ['newEvents' => $newEvents]);
    }*/

}



