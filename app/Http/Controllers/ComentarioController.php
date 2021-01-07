<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function index(){
        $comment = Comment::All();
        dd ($comments);
        return view('home',['comments' => $comments]);
        
    }

    public function create(){
        
    }

    public function store(Request $request){
        $comment = new Comment;

        $comment->nome = $request->nome;
        $comment->email = $request->email;
        $comment->comment = $request->comment;
        $comment->save();

        return redirect('/')->with('msg');
    }

    public function compartilhar(){
        
        
    }
}
