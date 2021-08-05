<?php

namespace App\Http\Controllers;

use App\Models\Operadora;
use Illuminate\Http\Request;

class OperadoraController extends Controller
{
    private $repositoryOperadora;
    public function __construct(Operadora $operadora)
    {
        $this->repositoryOperadora = $operadora;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operadoras = Operadora::all();

        return view('crud.operadoras.index', compact('operadoras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.operadoras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $operadora = new Operadora;

        $operadora->nome = $request->nome;

        $operadora->save();

        return redirect('/')->with('msg','!!OPERADORA CADSATRADA COM SUCESSO!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $operadora = Operadora::findOrFail($id);

        return view('crud.operadoras.show', compact('operadora'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$operadora = $this->repositoryOperadora->find($id))
        {
            return redirect()->back();
        }
        return view('crud.operadoras.edit',compact('operadora'));
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
        if(!$operadora = $this->repositoryOperadora->find($id))
        {
            return redirect()->back();
        }
        $operadora->update($request->all());

        return redirect()->route('operadora.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$operadora = $this->repositoryOperadora->find($id))
        {
            return redirect()->back();
        }
        $operadora->delete();
        return redirect()->route('operadora.index');
    }
}
