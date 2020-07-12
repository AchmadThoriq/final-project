<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Question;
// use phpDocumentor\Reflection\DocBlock\Tag;
use App\Tag;
use App\User;
use App\Answer;
use App\Answer_Comment;

class PertanyaanController extends Controller
{
    public function index()
    {
        $pertanyaan = Question::all();
        $user = User::all();
        // dd($user);
        return view('login_pages.index', compact('pertanyaan', 'user'));
    }
    public function outindex()
    {
        $pertanyaan = Question::all();
        $user = User::all();
        // dd($user);
        return view('page.outindex', compact('pertanyaan', 'user'));
    }
    public function create()
    {

        $tag = Tag::all();
        // dd($tag);
        return view('login_pages.form', compact('tag'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $id = Auth::id();
        $new_pertanyaan = Question::create([
            "judul" => $request['judul'],
            "isi" => $request['isi'],
            "tag_id" => $request['tag_id'],
            "users_id" => $id
        ]);
        return redirect('/pertanyaan');
    }

    public function show($id)
    {
        $pertanyaan = Question::find($id);
        $user = User::find($pertanyaan->users_id);
        $tag = Tag::find($pertanyaan->tag_id);
        $tag_all = Tag::all();
        // $jawaban = Answer::wherequestion_id($pertanyaan->question_id);
        $jawaban = Answer::where('question_id', $pertanyaan->id)->get();
        $user_all = User::all();
        $ans_comment = Answer_Comment::all();
        foreach ($ans_comment as $comment_ans => $val)
            // dd($val->users_id);
            return view('page.post', compact('pertanyaan', 'user', 'tag', 'tag_all', 'jawaban', 'user_all', 'ans_comment'));
    }
}