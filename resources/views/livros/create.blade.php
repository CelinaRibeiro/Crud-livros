@extends('adminlte::page')

@section('title', 'Inserir Livros')

@section('content_header')
    <h3><strong>Cadastrar Livros</strong></h3>   
        
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
    <form method="post" action="{{ route('livro.store') }}">
        @csrf
        @method('POST')
        <div class="card">
            <div class="card-body">
                <div class="form-group row">
                    <label for="isbn" class="col-sm-2 control-label">ISBN:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="isbn" name="isbn" value="{{ old('isbn') }}" />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="titulo" class="col-sm-2 control-label">Título:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo') }}"/>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="autor" class="col-sm-2 control-label">Autor:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="autor" name="autor" value="{{ old('autor') }}"/>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="preco" class="col-sm-2 control-label">Preço:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="preco" name="preco" value="{{ old('preco') }}  " />
                    </div>
                </div>
                <input type="submit" class="btn btn-info" value="Salvar" />
                <input type="reset" class="btn btn-info" value="Limpar" />
            </div>
        </div>
    </form>
@endsection

