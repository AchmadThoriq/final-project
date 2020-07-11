<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function index(){
        $jawaban = JawabanModel::get_all();
        return view ('jawaban.index', compact('jawaban'));

    }
    public function create (){
        return view ('jawaban.form');
    }

    public function store (Request $request){
       $new_jawaban = JawabanModel::save($request->all());
       return redirect('/jawaban');
  }
}
