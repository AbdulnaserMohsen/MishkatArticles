<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
      $articles = Article::paginate(10);
      $categories = Category::all();
      return view('index',compact('articles','categories'));
    }

    function articles()
    {
      $articles = Article::paginate(10);
      $categories = Category::all();
      return view('admin.articles',compact('articles','categories'));
    }

    protected function validator(array $data)
    {
         return Validator::make($data, [
              'image' => ['required', 'image:gif,png,jpg,jpeg,bmp',],
              'title' => ['required', 'string', 'max:255' , 'regex:/^([a-zA-Z0-9\-_,\.:\/\(\)& ]{3,})+$/u'],
              'content' => ['required', 'string'],
              'category' => ['required', 'exists:categories,id'],
          ]);
    }

    protected function validatorUpdate(array $data)
    {
         return Validator::make($data, [
              'image' => ['image:gif,png,jpg,jpeg,bmp',],
              'title' => ['required', 'string', 'max:255' , 'regex:/^([a-zA-Z0-9\-_,\.:\/\(\)& ]{3,})+$/u'],
              'content' => ['required', 'string'],
              'category' => ['required', 'exists:categories,id'],
          ]);
    }

    function add_article(Request $request)
    {
        $this->validator($request->all())->validate();

        $article= new Article();
        $photo = "";
        if ($request->file("image"))
        {
            $file = $request->file("image");
            $filename = Str::random(6) . '_' . time() . '_' . $file->getClientOriginalName();
            $path = 'images/ArticleImages';
            $file->move($path, $filename);
            $photo = $path . '/' . $filename;

        }
        $article->image =$photo;
        $article->title =$request->get('title');
        $article->content =$request->get('content');
        $article->category_id =$request->get('category');
        $article->admin_id = Auth::id();
        $article->save();

        return response()->json(['success'=>'successfull','message'=>'Added Successfully']);
        //return back();
    }
    function update_article($id,Request $request)
    {
        $this->validatorUpdate($request->all())->validate();
        $article= Article::find($id);
        $photo = $article->image;
        if ($request->file("image"))
        {
            $file = $request->file("image");
            $filename = Str::random(6) . '_' . time() . '_' . $file->getClientOriginalName();
            $path = 'images/ArticleImages';
            $file->move($path, $filename);
            $photo = $path . '/' . $filename;

        }
        $article->image =$photo;
        $article->title =$request->get('title');
        $article->content =$request->get('content');
        $article->category_id =$request->get('category');
        $article->admin_id = Auth::id();
        $article->save();

        return response()->json(['success'=>'successfull','message'=>'Updated Successfully']);
    }
    function delete_article($id)
    {
        $article = Article::find($id);
        $article->delete();

        return response()->json(['success'=>'successfull','message'=>'Deleted Successfully']);
    }

    public function details($id)
    {
        $article = Article::find($id);
        $comments = Comment::where('article_id',$id)->paginate(5);
        return view('details',compact('article','comments'));
    }

    public function article_filtering(Request $request)
    {
        if(url()->previous() == route('index').'/')
        {
            $wordForSearch = $request->header('SEARCH');
        }
        else
        {
            $wordForSearch = $request->get('search');
        }

        $articles = Article::where(function ($query) use ($wordForSearch) {

            $query->where('title', 'like', '%' . $wordForSearch . '%')
                  ->orWhere('title', 'like', '%' . $wordForSearch . '%')
                  ->orWhereHas('category', function ($q) use ($wordForSearch) {
                    $q->where('name', 'like', '%' . $wordForSearch . '%');
                });
        });

        if ($request->header('CATEGORY') != "")
        {
            $categories = explode(",", $request->header('CATEGORY'));
            $articles = $articles->whereIn("category_id", $categories);
        }


        $articles = $articles->paginate(20);
        if(url()->previous() == route('index').'/')
        {
          $returnHTML = view('layouts.partial_index',compact('articles'))->render();
          return response()->json(['success' => 'successfull',
                                    "html" => $returnHTML
                                  ]);
        }
        else
        {
          $categories = Category::all();
          return view('index',compact('articles','categories','wordForSearch'));
        }

    }

}
