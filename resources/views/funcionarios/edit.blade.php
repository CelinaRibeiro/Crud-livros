@extends('adminlte::page')

@section('title', 'Inserir Funcionários')

@section('content_header')
    <h3><strong>Atualizar Funcionário</strong></h3>   

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
<form method="post" action="{{ route('funcionario.update', $funcionarios->id) }}">
    @csrf
    @method('put')
    <div class="card card-primary ">
        <div class="card-body">
            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Dados Pessoais</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Contato</a>
                </li>
          </ul>
          <div class="tab-content" id="custom-content-below-tabContent">
                <div class="tab-pane fade active show" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                    <br />
                    <div class="form-group row">
                        <label for="nome" class="col-sm-2 control-label">Nome:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nome" name="nome" value="{{ $funcionarios->nome }}" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="data_nascimento" class="col-sm-2 control-label">Data de Nascimento:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="data_nascimento" name="data_nascimento" value="{{ $funcionarios->data_nascimento }}" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rg" class="col-sm-2 control-label">RG:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="rg" name="rg" value="{{ $funcionarios->rg }}" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cpf" class="col-sm-2 control-label">CPF:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="cpf" name="cpf" value="{{ $funcionarios->cpf }}" />
                        </div>
                    </div>
                </div>
            
                <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                    <br/>
                    <div class="form-group row">
                        <label for="telefone" class="col-sm-2 control-label">Telefone:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="telefone" name="telefone" value="{{ $funcionarios->telefone }}" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 control-label">E-mail:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" value="{{ $funcionarios->email }}" />
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <input type="submit" class="btn btn-info" value="Salvar" />
</form>
@endsection