<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;
use App\Answer;
use Illuminate\Support\Facades\Auth;

class JawabanController extends Controller
{
    public function index()
    {
        $jawaban = JawabanModel::get_all();
        return view('jawaban.index', compact('jawaban'));
    }
    public function create()
    {
        return view('jawaban.form');
    }

    public function store(Request $request)
    {
        $id = Auth::id();
        // dd($request->all());
        // $new_jawaban = Answer::create($request->all());

        $new_jawaban = Answer::create([
            "isi" => $request['isi'],
            "users_id" => $id,
            "question_id" => $request['question_id']
        ]);
        // return redirect('/post/');
        return redirect('/post/' . $request->question_id);
    }
}