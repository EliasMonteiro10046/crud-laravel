@extends('template.template')

@section('title', 'Cadastrar telefone')

@section('content')

<div class="card-body">
    <table class="table table-condensed">
        <thead>
            <tr>
                {{--<th>Nome</th>--}}
                <th>DDD</th>
                <th>Numero</th>
                <th>Cliente</th>
                <th>Operadora</th>

                <th width="190">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($telefones as $telefone)
                <tr>
                    {{--<td>{{ $telefone->nome }}</td>--}}
                    <td>{{ $telefone->ddd}}</td>
                    <td>{{ $telefone->numero}}</td>
                    <td>{{ $telefone->cliente->nome}}</td>
                    <td>{{ $telefone->operadora->nome}}</td>
                    <td style="width=10px;">
                        <a href="{{ route('telefone.edit', $telefone->id) }}" class="btn btn-info">Editar</a>
                        <a href="{{ route('telefone.show', $telefone->id) }}" class="btn btn-warning">Detalhes</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
