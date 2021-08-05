@extends('template.template')

@section('title', 'Cadastrar Operadora')

@section('content')

<div class="card-body">
    <table class="table table-condensed">
        <thead>
            <tr>
                {{--<th>Nome</th>--}}
                <th>Nome</th>

                <th width="190">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($operadoras as $operadora)
                <tr>
                    {{--<td>{{ $operadora->nome }}</td>--}}
                    <td>{{ $operadora->nome}}</td>
                    <td style="width=10px;">
                        <a href="{{ route('operadora.edit', $operadora->id) }}" class="btn btn-info">Editar</a>
                        <a href="{{ route('operadora.show', $operadora->id) }}" class="btn btn-warning">Detalhes</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
