<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;

class CommentController extends Controller
{
    public function index(){
        $comments = Comentario::orderby('id');
        dd ($comments);

        return view('home',['comments' => $comments]);
        
    }

    public function create(){
        return view('layout.home', []);
    }

    public function store(Request $request){
        $comment = new Comentario;

        $comment->nome = $request->nome;
        $comment->email = $request->email;
        $comment->cometario = $request->cometario;
        $comment->save();

        return redirect('/')->with('msg');
        $user = auth()->user();
        $comment->user_id = $user->id;
    }

    public function compartilhar(){
        
        return view('compartilhar', []);
    }
}
