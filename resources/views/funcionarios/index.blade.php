@extends('adminlte::page')

@section('title', 'Funciorários')

@section('content_header')
    <h3><strong>Funcionários</strong></h3>
    <a href="{{ route('funcionario.create') }}" class="btn btn-info">Incluir Funcionário</a><br/><br/>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
@endsection

@section('content')
   <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                @foreach($funcionarios as $funcionario)
                    <tbody>
                        <tr>
                            <td>{{ $funcionario->id}}</td>
                            <td>{{ $funcionario->nome }}</td>
                            <td>{{ $funcionario->telefone }}</td>
                            <td>{{ $funcionario->email }}</td>
                            <td>
                                <a href="{{ route('funcionario.edit', $funcionario->id) }}" class="btn btn-sm btn-info">Editar</a>
                                <form class="d-inline"  method="post" action="{{ route('funcionario.destroy', $funcionario->id)}}" onsubmit="return confirm('Tem certeza que deseja excluir?')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
   </div>
   <div style="text-align: left;">
    {{ $funcionarios->links() }}
</div>
@endsection