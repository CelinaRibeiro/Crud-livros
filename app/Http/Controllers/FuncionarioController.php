<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoredUpdateFuncionario;

use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function index() {
        $funcionarios = Funcionario::simplePaginate(5);
        return view('funcionarios.index', compact('funcionarios'));
    }

    public function create() {
        return view('funcionarios.create');
    }

    public function store(StoredUpdateFuncionario $request) {
        $funcionarios = Funcionario::create($request->all());
        return redirect()
            ->route('funcionario.index')
            ->with('message', 'Funcionário cadastrado com sucesso!');
    }

    public function edit($id) {
        $funcionarios = Funcionario::find($id);
        
        if($funcionarios) {
            return view('funcionarios.edit', compact('id', 'funcionarios'));
        }
        return redirect()->route('funcionario.index');
    }

    public function update(StoredUpdateFuncionario $request, $id) {
        $funcionarios = Funcionario::find($id);

        if($funcionarios) {
            $funcionarios->update($request->all());
            return redirect()
                ->route('funcionario.index')
                ->with('message', 'Funcionario atualizado com sucesso!');
        }
        return redirect()->route('funcionario.index');
    }

    public function destroy($id) {
        $funcionarios = Funcionario::find($id);
        $funcionarios->delete();
        return redirect()
            ->route('funcionario.index')
            ->with('message', 'Funcionarios deletado com sucesso!');
    }
}
