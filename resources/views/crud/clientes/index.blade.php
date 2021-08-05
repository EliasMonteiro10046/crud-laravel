@extends('template.template')

@section('title', 'Cadastrar Cliente')

@section('content')

<div class="card-body">
    <table class="table table-condensed">
        <thead>
            <tr>
                {{--<th>Nome</th>--}}
                <th>Nome</th>
                <th>CPF</th>
                <th>Data Nascimento</th>

                <th width="190">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    {{--<td>{{ $cliente->nome }}</td>--}}
                    <td>{{ $cliente->nome}}</td>
                    <td>{{ $cliente->cpf}}</td>
                    <td>{{ $cliente->nascimento}}</td>
                    <td style="width=10px;">
                        <a href="{{ route('cliente.edit', $cliente->id) }}" class="btn btn-info">Editar</a>
                        <a href="{{ route('cliente.show', $cliente->id) }}" class="btn btn-warning">Detalhes</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
