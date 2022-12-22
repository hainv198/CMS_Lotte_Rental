<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use Alaouy\Youtube\Facades\Youtube;
use Vedmant\FeedReader\Facades\FeedReader;

class HomeController extends Controller
{
    /*public function __construct()
    {
    }*/

    public function index()
    {
        
        return view('components.home.index');
    }


}
