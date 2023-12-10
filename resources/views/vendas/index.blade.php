@extends('layouts.app')
@section('venda.conteudo')
<style>
    .pagina-vendas {
        background-color: #3498db; 
        color: #fff; 
        padding: 20px; 
        border-radius: 10px; 
    }

    .pagina-vendas h1 {
        margin-bottom: 20px; 
    }
    .pagina-vendas table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px; 
    }

    .pagina-vendas th,
    .pagina-vendas td {
        padding: 10px;
        text-align: left;
    }

    .pagina-vendas th {
        background-color: #2980b9; 
        color: #fff; 

    .pagina-vendas tbody tr:nth-child(even) {
        background-color: #ecf0f1;
    }
</style>

<div class="pagina-vendas">
    <h1>Lista de Venda do Usuário {{$usuario->nome}}</h1>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th># Venda</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuario->vendas as $venda)
                <tr>
                    <td>{{$venda->id}}</td>
                    <td>{{$venda->valor}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
