<?php

namespace App\Http\Controllers;

use App\Answer_Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function store_answer_comment(Request $request)
    {
        // dd($request->all());
        $id = Auth::id();
        $new_answer_comment = Answer_Comment::create([
            "isi" => $request['comment'],
            "answer_id" => $request['answer_id'],
            "users_id" => $id
        ]);
        // dd($request['answer_id']);
        return redirect('/post/' . $request->question_id);
    }
}