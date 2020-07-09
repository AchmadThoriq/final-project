<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index(){
        $pertanyaan = ArtikelModel::get_all();
        return view ('pertanyaan.index', compact('pertanyaan'));

    }

    public function create (){
        return view ('pertanyaan.form');
    }

    public function store (Request $request){
       $new_pertanyaan = PertanyaanModel::save($request->all());
       return redirect('/pertanyaan');
  }

//   public function show ($id){
//     $artikel = ArtikelModel::find_by_id($id);
//     return view ('artikel.show', compact('artikel'));
//   }
    
//     public function edit ($id) {
//         $artikel =ArtikelModel::find_by_id($id);
//         return view('artikel.edit', compact('artikel'));
//     }

//     public function update($id, Request $request){
//         $artikel = ArtikelModel::update($id, $request->all());
//         return redirect('/artikel');
//     }

//     public function destroy($id){
//         $deleted = ArtikelModel::destroy($id);
//         return redirect('/artikel');
//     }
}
