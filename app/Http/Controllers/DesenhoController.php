<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desenho;

class DesenhoController extends Controller
{
    public function index(){
        $events = Desenho::all();
        return view('home',['desenho' => $events]);
    }

    public function create(){
        
        return view('publicar.desenho', []);
    }

    public function store(Request $request){
        $event = new Desenho;

        $event->titulo = $request->titulo;
        $event->autor = $request->autor;

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/desenho'), $imageName);

            $event->image = $imageName;
            $event->save();
        }

        

        return redirect('/')->with('msg','Tecnica publicada com sucesso!!');
    }

    public function compartilhar(){
        
        return view('compartilhar', []);
    }
}
