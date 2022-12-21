<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class PRCenterController extends Controller
{
    public function index() {
        $data = News::query()->get();
        return view('components.PRCenter.index',[
            'data'=>$data
        ]);
    }


}



