<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Operadora;
use App\Models\Telefone;
use Illuminate\Http\Request;

class TelefoneController extends Controller
{
    private $repositoryTelefone;
    public function __construct(Telefone $telefone)
    {
        $this->repositoryTelefone = $telefone;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $telefones = $this->repositoryTelefone->with(['cliente','operadora'])->get()->all();

        return view('crud.telefones.index', compact('telefones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::all();
        $operadoras = Operadora::all();
        return view('crud.telefones.create', compact('clientes', 'operadoras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $telefone = new Telefone;

        $telefone->ddd = $request->ddd;
        $telefone->numero = $request->numero;
        $telefone->cliente_id = $request->cliente_id;
        $telefone->operadora_id = $request->operadora_id;

        $telefone->save();

        return redirect('/')->with('msg','!!TELEFONE CADSATRADO COM SUCESSO!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$telefone = $this->repositoryTelefone->with(['cliente','operadora'])->findOrFail($id)){
            return redirect()->back();
        };

        return view('crud.telefones.show', compact('telefone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$telefone = $this->repositoryTelefone->find($id))
        {
            return redirect()->back();
        }
        $clientes = Cliente::all();
        $operadoras = Operadora::all();
        return view('crud.telefones.edit',compact('telefone', 'clientes', 'operadoras'));
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
        if(!$telefone = $this->repositoryTelefone->find($id))
        {
            return redirect()->back();
        }
        $telefone->update($request->all());

        return redirect()->route('telefone.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$telefone = $this->repositoryTelefone->find($id))
        {
            return redirect()->back();
        }
        $telefone->delete();
        return redirect()->route('telefone.index');
    }
}
