<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreUpdateLivro;
use App\Models\Livro;

class LivroController extends Controller
{
    public function index() {
        $livros = Livro::simplePaginate(5);
        return view('livros.index', compact('livros'));
    }

    public function create() {
        return view('livros.create');
    }

    public function store(StoreUpdateLivro $request) {
        $livros = Livro::create($request->all());
        return redirect()
                ->route('livro.index')
                ->with('message', 'Livro cadastrado com sucesso!');
    }

    public function edit($id) {
        $livros = Livro::find($id);

        if($livros) {
            return view('livros.edit', compact('id','livros'));
        }
        return redirect()->route('livro.index');
    }
    
    public function update(StoreUpdateLivro $request, $id) {
        $livros = Livro::find($id);

        if($livros) {
            $livros->update($request->all());
            return redirect()
                    ->route('livro.index')
                    ->with('message', 'Livro atualizado com sucesso!');
        } 
            return redirect()->back();
    }

    public function destroy($id) {
        $livros = Livro::find($id);
        $livros->delete();
        return redirect()
            ->route('livro.index')
            ->with('message', 'Livro deletado com sucesso!');    
        }
    
}
