<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desenho;

class DesenhoController extends Controller
{
    public function index(){
        $desenhos = Desenho::orderby('id');
        dd ($desenhos);
        return view('home',['desenhos' => $desenhos]);
    }

    public function create(){
        
        return view('publicar.desenho', []);
    }

    public function store(Request $request){
        $desenho = new Desenho;


        $desenho->titulo = $request->titulo;
        $desenho->autor = $request->autor;

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/desenho'), $imageName);

            $desenho->image = $imageName;
            dd ($desenho);
            $desenho->save();
        }

        

        return redirect('/')->with('msg',);
    }

    public function compartilhar(){
        
        return view('compartilhar', []);
    }
}
