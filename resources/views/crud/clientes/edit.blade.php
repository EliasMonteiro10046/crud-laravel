@extends('template.template')

@section('title', 'Cadastrar Cliente')

@section('content')

<h1>Editar cliente {{$cliente->nome}}</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('cliente.update', $cliente->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ $cliente->nome ?? old('nome')}}">
                </div>

                <div class="form-group">
                    <label for="title">Data de Nascimento:</label>
                    <input type="date" class="form-control" id="nascimento" name="nascimento" value="{{ $cliente->nascimento ?? old('nascimento')}}">
                </div>

                <div class="form-group">
                    <label for="title">CPF: </label>
                    <input type="number" class="form-control" id="cpf" name="cpf" value="{{ $cliente->cpf ?? old('cpf')}}">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Enviar</button>
                </div>
            </form>
        </div>

    </div>



@endsection
