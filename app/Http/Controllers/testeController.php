<?php

namespace sisFmw\Http\Controllers;

use Illuminate\Http\Request;

class testeController extends Controller
{

//    public function index(){
//        return "Olá turma de Framework 2019";
//    }

    public function exercicio(){
        return "Exercício 1:Façam todas as rotas para uma CRUD de teste";
    }

    public function exibeNome($nome){
//        return "Olá turma de Framework 2019 do professor $nome !!!";
//        return view('testeView.segundaView', ['nome' => $nome]);
//        return view('testeView.segundaView')->with('nome', $nome);
        $data = array(
            'nome' => $nome
        );
//        var_dump($data);
        return view('testeView.segundaView', $data);
    }

    public function primeiraView(){
        return view('testeView.primeiraView');
    }

    public function terceiraView(){
        return view('testeView.terceiraView');
    }

    function index(){
        return view('teste.index');
    }

    function create(){
        return view('teste.create');
    }

    function store(){
        return view('teste.store');
    }

    function show(){
        return view('teste.show');
    }

    function edit(){
        return view('teste.edit');
    }

    function update(){
        return view('teste.update');
    }

    function destroy(){
        return view('teste.destroy');
    }
}
