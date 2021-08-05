@extends('template.template')

@section('title', 'Cadastrar Cliente')

@section('content')

<h1>Detalhes do cliente {{$cliente->nome}}</b></h1>

    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Identificador do cliente: </strong> {{ $cliente->id }}
                </li>
                <li>
                    <strong>cliente: </strong> {{ $cliente->nome }}
                </li>

                <li>
                    <strong>Andar: </strong> {{  $cliente->cpf}}
                </li>

                <li>
                    <strong>Andar: </strong> {{  $cliente->nascimento}}
                </li>
            </ul>

            <form action="{{ route('cliente.destroy', $cliente->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> DELETAR O cliente{{ $cliente->numero }}</button>
            </form>
@endsection
