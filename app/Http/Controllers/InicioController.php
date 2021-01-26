<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Desenho;
use App\Models\Comentario;
use App\Models\User;

class InicioController extends Controller
{
    public function index(){
        
        $events = Event::all();
        $desenhos = desenho::all();
        $comments = Comentario::all();
        return view('home',['events' => $events , 'desenhos' => $desenhos , 'comments' => $comments]);
    }

    public function create(){
        
        return view('publicar.criar', []);
    }

    public function store(Request $request){
        $event = new Event;

        $event->titulo = $request->titulo;
        $event->descricao = $request->descricao;
        $user = auth()->user();
        $event->user_id = $user->id;
        $event->save();

        return redirect('/')->with('msg');
    
    }

    public function compartilhar(){
        
        return view('compartilhar', []);
    }

    public function show($id){
        
        $events = Event::findOrFail($id);

        $eventOwner = User::where('id', $events->user_id)->first()->toArray();

        return view('show', ['events' => $events, 'eventOwner' => $eventOwner]);
    }

    public function dashboard(){
        
        $user = auth()->user();
        $events = $user->events;
        $desenhos = $user ->desenhos;
        

        return view('dashboard', ['events'=>$events, 'desenhos' => $desenhos]);

    }

    public function destroy($id){
        
        Event::findOrfail($id)->delete();
        

        return redirect('/dashboard');

    }

    public function edit($id) {

        $event = Event::findOrfail($id);

        return view('edit', ['event' => $event]);

    }

    public function update(Request $request) {

        Event::findOrfail($request -> id)->update($request->all());
        return redirect('/dashboard');
    }
}
