@extends('template.template')

@section('title', 'Cadastrar operadora')

@section('content')

<h1>Editar operadora {{$operadora->nome}}</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('operadora.update', $operadora->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ $operadora->nome ?? old('nome')}}">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Enviar</button>
                </div>
            </form>
        </div>

    </div>



@endsection
