<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    private $repositoryCliente;
    public function __construct(Cliente $cliente)
    {
        $this->repositoryCliente = $cliente;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();

        return view('crud.clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente;

        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->nascimento = $request->nascimento;


        $cliente->save();

        return redirect('/')->with('msg','!!CLIENTE CADSATRADO COM SUCESSO!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);

        return view('crud.clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$cliente = $this->repositoryCliente->find($id))
        {
            return redirect()->back();
        }
        return view('crud.clientes.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!$cliente = $this->repositoryCliente->find($id))
        {
            return redirect()->back();
        }
        $cliente->update($request->all());

        return redirect()->route('cliente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$cliente = $this->repositoryCliente->find($id))
        {
            return redirect()->back();
        }
        $cliente->delete();
        return redirect()->route('cliente.index');
    }
}
