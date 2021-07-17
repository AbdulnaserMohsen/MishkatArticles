<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Models\Category;

class AdminController extends Controller
{
    function dashboard()
    {
      $categories_counter = Category::count();
      $articles_counter = Article::count();
      return view('admin.dashboard',compact('categories_counter','articles_counter'));
    }

}
