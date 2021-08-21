@extends('adminlte::page')

@section('title', 'Livros')

@section('content_header')
    <h3><strong>Livros</strong></h3>
    <a href="{{ route('livro.create') }}" class="btn btn-info">Incluir Livro</a> <br/><br/>

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
                            <th>ISBN</th>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Preço</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    @foreach($livros as $livro) 
                        <tbody>
                            <tr>
                                <td>{{ $livro->id }}</td>
                                <td>{{ $livro->isbn }}</td>
                                <td>{{ $livro->titulo }}</td>
                                <td>{{ $livro->autor }}</td>
                                <td>{{  number_format($livro->preco, 2, ',', '.') }}</td>
                                <td>
                                    <a href="{{ route('livro.edit', $livro->id) }}" class="btn btn-sm btn-info">Editar</a>
                                    <form class="d-inline" action="{{ route('livro.destroy', $livro->id) }}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir?')">
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
             {{ $livros->links() }}
        </div>
@endsection



