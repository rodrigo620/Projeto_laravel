<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Desenho;
use App\Models\Comment;

class InicioController extends Controller
{
    public function index(){
        
        $events = Event::all();
        $desenhos = desenho::all();
        $comment = comment::all();
        return view('home',['events' => $events , 'desenhos' => $desenhos , 'comment' => $comment]);
    }

    public function create(){
        
        return view('publicar.criar', []);
    }

    public function store(Request $request){
        $event = new Event;

        $event->titulo = $request->titulo;
        $event->autor = $request->autor;
        $event->descricao = $request->descricao;
        $event->save();

        return redirect('/')->with('msg');
    }

    public function compartilhar(){
        
        return view('compartilhar', []);
    }
}
