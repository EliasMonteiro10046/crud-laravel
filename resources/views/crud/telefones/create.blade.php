@extends('template.template')

@section('title', 'Cadastrar telefone')

@section('content')

    <div class="col-md-6 offset-md-3">
        <h1>Cadastrar telefone</h1>
        <form action="{{route('telefone.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">DDD:</label>
                <input type="number" class="form-control" id="ddd" name="ddd">
            </div>

            <div class="form-group">
                <label for="title">Numero:</label>
                <input type="number" class="form-control" id="numero" name="numero">
            </div>

            <br>

            <div class="dropdown">
                <select class="btn btn-success dropdown-toggle" name="operadora_id" id="operadora_id">
                    <option value="">Operadora</option>
                        @foreach ($operadoras as $operadora)
                        <option name="{{$operadora->id}}" value="{{$operadora->id}}">
                            Operadora - {{$operadora->nome}}
                        </option>
                        @endforeach
                </select>
            </div>

            <br>

            <div class="dropdown">
                <select class="btn btn-success dropdown-toggle" name="cliente_id" id="cliente_id">
                    <option value="">Cliente</option>
                        @foreach ($clientes as $cliente)
                        <option name="{{$cliente->id}}" value="{{$cliente->id}}">
                            Cliente - {{$cliente->nome}}
                        </option>
                        @endforeach
                </select>
            </div>

            <br>

            <input type="submit" class="btn btn-primary" value="Cadastrar telefone">
        </form>
    </div>

@endsection
