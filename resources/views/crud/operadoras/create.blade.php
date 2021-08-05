@extends('template.template')

@section('title', 'Cadastrar operadora')

@section('content')

    <div class="col-md-6 offset-md-3">
        <h1>Cadastrar operadora</h1>
        <form action="{{route('operadora.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>

            <input type="submit" class="btn btn-primary" value="Cadastrar operadora">
        </form>
    </div>

@endsection
