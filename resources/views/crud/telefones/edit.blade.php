@extends('template.template')

@section('title', 'Cadastrar telefone')

@section('content')

<h1>Editar telefone {{$telefone->ddd}}</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('telefone.update', $telefone->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">DDD:</label>
                    <input type="number" class="form-control" id="ddd" name="ddd" value="{{ $telefone->ddd ?? old('ddd')}}">
                </div>

                <div class="form-group">
                    <label for="title">Numero:</label>
                    <input type="number" class="form-control" id="numero" name="numero" value="{{ $telefone->numero ?? old('numero')}}">
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
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Enviar</button>
                </div>
            </form>
        </div>

    </div>



@endsection
