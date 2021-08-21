@extends('adminlte::page')

@section('title', 'Inserir Livros')

@section('content_header')
    <h3><strong>Atualizar Livros</strong></h3>
        
    <div>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    <h5><i class="icon fas fa-ban"></i>Ocorreu um Erro:</h5>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                </ul>
            </div>
        @endif
    </div>
  
@endsection

@section('content')
    <form action="{{ route('livro.update', $livros->id) }}" method="post" >
        @csrf
        @method('put')
        <div class="card card-info">
            <div class="card-body">
                <div class="form-group row">
                    <label for="isbn" class="col-sm-2 control-label">ISBN:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="isbn" name="isbn" value="{{ $livros->isbn }}" />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="titulo" class="col-sm-2 control-label">Título:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $livros->titulo }}" />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="autor" class="col-sm-2 control-label">Autor:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="autor" name="autor" value={{ $livros->autor }} />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="preco" class="col-sm-2 control-label">Preço:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="preco" name="preco" value="{{ $livros->preco }}" />
                    </div>
                </div>

                <button type="submit" class="btn btn-info">Salvar</button>
            </div>
        </div>
    </form>
@endsection

