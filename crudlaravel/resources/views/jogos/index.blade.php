@extends('layouts.app')

@section('title','Listagem') <!-- Exibe o title do arquivo -->

@section('content')


    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-9">
                <h1>Listagem de Jogos</h1>
            </div>
            <div class="col-sm-3">
                <a href="{{route('jogos-create')}}" class="btn btn-success">Novo Jogo</a>
            </div>
        </div>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Dificudade</th>
                <th scope="col">Valor</th>
                <th scope="col">Descrição</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jogos as $jogo)
            <tr>
                <th>{{ $jogo->id}}</th>
                <th>{{ $jogo->nome}}</th>
                <th>{{ $jogo->dificuldade}}</th>
                <th>{{ $jogo->valor}}</th>
                <th>{{ $jogo->descricao}}</th>
           </tr>
            @endforeach
            </tbody>
        </table>
    </div>


    
@endsection