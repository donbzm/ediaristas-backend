@extends('adminlte::page')

@section('title', 'Lista de Usuários')

@section('content_header')
    <h1>Lista de Usuários</h1>
@stop

@section('content')
    @include('_mensagens_sessao')
    <table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">E-Mail</th>
        <th scope="col">Ações</th>
    </thead>
    <tbody>
    @forelse ($usuarios as $usuario)
        <tr>
            <th>{{ $usuario->id }}</th>
            <td>{{ $usuario->name }}</td>
            <td>{{ $usuario->email }}</td>
            <td>
                <a class="btn btn-sm btn-primary" href="{{ route('usuarios.edit',$usuario) }}">alterar</a>
                <form action="{{ route('usuarios.destroy',$usuario) }}" method="post" style="display: inline">
                    @method('DELETE')
                    @csrf
                    <button onclick="return confirm('Tem certeza que deseja excluir o usuário?')" class="btn btn-danger btn-sm" type="submit">excluir</button>
                </form>
            </td>
    </tr>
    @empty
        <tr>
            <th></th>
            <th colspan="2">Nenhum registro foi encontrado</th>
        </tr>
    @endforelse
  </tbody>
</table>
<div class="d-flex justify-content-center">
    {{ $usuarios->links() }}
</div>
<div class="float-right">
    <a href="{{ route('usuarios.create') }}" class="btn btn-primary">Novo Usuário</a>
</div>
@stop