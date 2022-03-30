<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicoRequest;
use App\Models\Servico;

class ServicoController extends Controller
{
    public function index()
    {
        $servicos = Servico::paginate(10);
        return view('servicos.index')->with('servicos',$servicos);
    }

    public function create()
    {
        return view('servicos.create');
    }

    public function store(ServicoRequest $request) {
        $dados = $request->except('_token');
        $retorno = Servico::create($dados);
        return redirect()->route('servicos.index')->with('mensagem','Serviço criado com sucesso');
    }
    
    public function edit(Servico $servico)
    {
        return view('servicos.edit')->with('servico',$servico);
    }

    // Esse é o método sem usar Bind Request
    // public function update(int $id, ServicoRequest $request)
    public function update(Servico $servico, ServicoRequest $request)
    {
        $dados = $request->except(['_token','_method']);
        // Se não usamos o Bind Request, precisamos buscar os dados
        // $servico = Servico::findOrFail($id);
        $servico->update($dados);
        return redirect()->route('servicos.index')->with('mensagem','Serviço atualizado com sucesso');;
    }
}
