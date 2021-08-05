@extends('template.template')

@section('title', 'Cadastrar telefone')

@section('content')

<h1>Detalhes do telefone {{$telefone->nome}}</b></h1>

    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Identificador do telefone: </strong> {{ $telefone->id }}
                </li>
                <li>
                    <strong>DDD: </strong> {{ $telefone->ddd }}
                </li>

                <li>
                    <strong>Numero: </strong> {{  $telefone->numero}}
                </li>

                <li>
                    <strong>Cliente: </strong> {{  $telefone->cliente->nome}}
                </li>

                <li>
                    <strong>Operadora: </strong> {{  $telefone->operadora->nome}}
                </li>
            </ul>

            <form action="{{ route('telefone.destroy', $telefone->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> DELETAR O telefone{{ $telefone->numero }}</button>
            </form>
@endsection
