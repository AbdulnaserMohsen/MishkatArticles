<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comment;
use Auth;

class UserController extends Controller
{
    function add_comment(Request $request,$article_id)
    {
        $comment = new Comment();
        $comment->article_id = $article_id;
        $comment->user_id =Auth::id();
        $comment->comment = $request->get('comment');
        $comment->save();
        return back();
    }
}
