
@extends('template.template')

@section('content')

        <br>
        <div>
            <div class="btn-toolbar">
                <div>
                    <a href="{{ route('cliente.index')}}" class="btn btn-primary">Lista de Cliente</a>
                </div>
                <div>
                    <a href="{{ route('cliente.create') }}" class="btn btn-primary">Cadastrar Clientes</a>
                </div>
            </div>
        </div>

        <br>

        <div>
            <div class="btn-toolbar">
                <div>
                    <a href="{{ route('operadora.index') }}" class="btn btn-primary">Lista de Operadoras</a>
                </div>
                <div>
                    <a href="{{ route('operadora.create') }}" class="btn btn-primary">Cadastrar Operadoras</a>
                </div>
            </div>
        </div>
        <br>
        <div>
            <div class="btn-toolbar">
                <div class="btn-group">
                    <a href="{{ route('telefone.index') }}" class="btn btn-primary">Lista de Telefones</a>
                </div>
                <div class="btn-group">
                    <a href="{{ route('telefone.create') }}" class="btn btn-primary">Cadastrar Telefones</a>
                </div>
            </div>
        </div>

@endsection

