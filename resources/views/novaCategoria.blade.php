@extends('layout.app', ["current" => "categorias"])

@section('body')
    
    <div class="card border">
        <div class="card-body">
            <form action="/categorias" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeCategoria" id="nomeCategoria">Nome da categoria</label>
                    <input type="text" class="form-control" name="nomeCategoria">
                </div>
                <button type="submit" class="btn btn-success m-1">Cadastrar</button>
                <button type="cancel" class="btn btn-secondary m-1">Cancelar</button>
            </form>
        </div>
    </div>

@endsection