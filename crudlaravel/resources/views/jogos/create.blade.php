@extends('layouts.app')

@section('title','Criar Jogo') <!-- Exibe o title do arquivo -->

    <div class="container">
        <h1>Crie um novo jogo</h1>
        <hr>
        <form action="{{ route('jogos-store')}}" method="POST" >
            @csrf
            <div class="form-group mt-5" >
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name='nome' placeholder="Digite um nome...">
                </div>
                <br>
                <div>
                    <label for="dificuldade">Dificuldade:</label>
                    <input type="text" class="form-control" name='dificuldade' placeholder="Dificuldade do Jogo...">
                </div>
                <br>
                <div>
                    <label for="valor">Valor:</label>
                    <input type="text" class="form-control" name='valor' placeholder="Valor para aposta...">
                </div>
                <br>
                <div>
                    <label for="descricao">Descrição:</label>
                    <input type="text" class="form-control" name='descricao' placeholder="Descrição do jogo...">
                </div>
                <br>
                <div>
                    <input type="submit" class="btn btn-primary">
                </div>

            </div>
        </form>
    </div>

@section('content')