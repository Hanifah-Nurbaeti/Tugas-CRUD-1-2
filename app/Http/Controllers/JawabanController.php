<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;
use App\Models\PertanyaanModel;

class JawabanController extends Controller
{
    //
    public function index(){
    	//dd($request->all());
    	$jawaban = JawabanModel::join();
    	return view ('jawaban.jawab1', compact('jawaban'));
    }
    public function create(){
    	$jawaban = JawabanModel::create();
    	return view('jawaban.jawab1',compact('pertanyaan'));
    }
    public function store(Request $request){
    	//dd($request->all());
    	$new_jawaban = JawabanModel::save($request->all());
    	return redirect('/pertanyaan');
    }
}
