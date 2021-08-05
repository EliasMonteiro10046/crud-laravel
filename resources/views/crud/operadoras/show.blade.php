@extends('template.template')

@section('title', 'Cadastrar operadora')

@section('content')

<h1>Detalhes do operadora {{$operadora->nome}}</b></h1>

    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Identificador do operadora: </strong> {{ $operadora->id }}
                </li>
                <li>
                    <strong>operadora: </strong> {{ $operadora->nome }}
                </li>

            </ul>

            <form action="{{ route('operadora.destroy', $operadora->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> DELETAR O operadora{{ $operadora->numero }}</button>
            </form>
@endsection
