<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    
    public function index() {
        $nome = "Marcos";
        $idade = '21';
    
        $arr = [1,2,3,4,5];
    
        $nomes = ['Matheus', 'Maria', 'Diego'];
    
        return view('welcome',
         [  
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => 'programador',
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    }

    public function create() {
        return view('events.create');
    }

    public function update() {
        return view('events.update');
    }

}
