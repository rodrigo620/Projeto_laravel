<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desenho;
use App\Models\User;

class DesenhoController extends Controller
{
    public function index(){
        $desenhos = Desenho::orderby('id');
        $eventOwner = User::where('id', $desenho->user_id)->first()->toArray();
        dd ($desenhos);
        return view('home',['desenhos' => $desenhos]);
    }

    public function create(){
        
        return view('publicar.desenho', []);
    }

    public function store(Request $request){
        $desenho = new Desenho;


        $desenho->titulo = $request->titulo;
        $user = auth()->user();
        $desenho->user_id = $user->id;


        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/desenho'), $imageName);

            $desenho->image = $imageName;   
            $desenho->save();
        }

        
        

        return redirect('/')->with('msg',);
    }

    public function compartilhar(){
        
        return view('compartilhar', []);
    }

    public function deletar($id){
        
        Desenho::findOrfail($id)->delete();
        

        return redirect('/dashboard');

    }
}
