@extends('template.template')

@section('title', 'Cadastrar Cliente')

@section('content')

    <div class="col-md-6 offset-md-3">
        <h1>Cadastrar Cliente</h1>
        <form action="{{route('cliente.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>

            <div class="form-group">
                <label for="title">Data de Nascimento:</label>
                <input type="date" class="form-control" id="nascimento" name="nascimento">
            </div>

            <div class="form-group">
                <label for="title">CPF: </label>
                <input type="number" class="form-control" id="cpf" name="cpf">
            </div>

            <input type="submit" class="btn btn-primary" value="Cadastrar Cliente">
        </form>
    </div>

@endsection
