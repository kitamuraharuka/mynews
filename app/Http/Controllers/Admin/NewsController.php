<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    //作成画面
    public function add()
    {
        return view('admin.news.create');
    }
}


