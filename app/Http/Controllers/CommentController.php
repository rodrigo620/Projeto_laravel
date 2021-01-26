<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;

class CommentController extends Controller
{
    public function index(){
        $comments = Comentario::all();

        return view('mais_contatos',['comments' => $comments]);
        
    }

    public function store(Request $request){
        $comment = new Comentario;

        $comment->nome = $request->nome;
        $comment->email = $request->email;
        $comment->comentario = $request->comentario;
        $user = auth()->user();
        $comment->user_id = $user->id;
        $comment->save();

        return redirect('/');
        
    }

    public function compartilhar(){
        
        return view('compartilhar', []);
    }

    public function destroy($id){
        
        Comentario::findOrfail($id)->delete();
        

        return redirect('/contatos');

    }

    public function edit($id) {

        $comments = Comentario::findOrfail($id);

        return view('contato-edit', ['comments' => $comments]);

    }

    public function update(Request $request) {

        Comentario::findOrfail($request -> id)->update($request->all());
        return redirect('/contatos');
    }
}
