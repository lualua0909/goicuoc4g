<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function getHome()
    {
        return view('index');
    }

    public function getTuyenDung()
    {
        return view('recruitment');
    }

    public function getAboutUs()
    {
        return view('about-us');
    }

    public function getNews()
    {
        return view('news');
    }

    public function getNewsDetail($slug)
    {
        return view('news-detail');
    }

    public function getSearch(Request $request)
    {
        return view('search', ["search" => $request->search]);
    }

    public function getCode($slug)
    {
        return view('code');
    }
}
