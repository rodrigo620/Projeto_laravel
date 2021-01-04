<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class InicioController extends Controller
{
    public function index(){
        
        $events = Event::all();

        return view('home',['events' => $events]);
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
