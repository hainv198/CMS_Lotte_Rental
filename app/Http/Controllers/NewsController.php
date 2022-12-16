<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$newEvents = News::where('id', '<>', '')
            ->limit(5)
            ->orderBy('id', 'desc')
            ->get();*/
//        $news = News::orderBy('id', 'DESC')->take(5)->get();

        $news = News::where('status', 1)
            ->limit(5)
            ->orderBy('status','DESC')
            ->get();

        $events = News::where('status', 2)
            ->limit(5)
            ->orderBy('status','DESC')
            ->get();

        return view('components.PRCenter.index',[
            'new' => $news,
            'event'=>$events,
        ]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request-> validate([
           'name' => 'required',
        ]);
        if ($request -> hasFile('file')) {
            $request -> validate([
               'image' => 'mimes:jpeg,bmp,png'
            ]);
            $request ->file -> store('news', 'public');
            $news = new News([
                'name' => $request -> get('name'),
                'file_path' => $request ->file -> hashName()
            ]);
            $news -> save();
        }
        return view('news.store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
