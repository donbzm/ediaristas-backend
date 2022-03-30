@extends('adminlte::page')

@section('title', 'Lista de Serviços')

@section('content_header')
    <h1>Lista de Serviços</h1>
@stop

@section('content')
    @include('_mensagens_sessao')
    <table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
        <th scope="col">Ações</th>
    </thead>
    <tbody>
    @forelse ($servicos as $servico)
        <tr>
            <th>{{ $servico->id }}</th>
            <td>{{ $servico->nome }}</td>
            <td><a class="btn btn-sm btn-primary" href="{{ route('servicos.edit',$servico) }}">alterar</a></td>
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
    {{ $servicos->links() }}
</div>
<div class="float-right">
    <a href="{{ route('servicos.create') }}" class="btn btn-primary">Novo Serviço</a>
</div>
@stop