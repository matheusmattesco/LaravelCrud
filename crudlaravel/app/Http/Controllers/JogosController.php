<?php

namespace App\Http\Controllers;

//Routes -> Controller -> View
use Illuminate\Http\Request;

use App\Models\Jogo;

class JogosController extends Controller
{
    public function index(){

        //  dd('Olá Mundo');  //dd = representação mais tecnica
        $jogos = Jogo::all();
        //dd($jogos);
        return view('jogos.index', ['jogos'=>$jogos]);
    }
    
    public function create(){

        return view('jogos.create');
    }

    public function store(Request $request){

      //dd($request);  

      Jogo::create($request->all());

      return redirect()->route('jogos-index');


    }
}
