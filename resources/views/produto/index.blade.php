@extends('layouts.app')

@section('conteudo')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e6f7ff;
        }

        table.table-striped tbody tr:hover {
            background-color: #f5f5f5;
        }
        .centralizar-tabela {
            margin: 0 auto;
            float: none;
        }
    </style>
    <title>Produtos</title>
    <h1>Lista de produtos</h1>
    <a class="btn btn-primary" href="{{ route('produto.cadastro')}}" > Cadastrar Produto </a>
    <div class="container">
        <div class="row">
            <div class="col-md-12"> 
                <table class="table table-striped centralizar-tabela"> 
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Categoria</th>
                            <th>Valor</th>
                            <th>Estoque</th>
                            <th>UF</th>
                            <th>Alterar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td>{{ $produto->produtoid }}</td>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ $produto->categoria }}</td>
                                <td>{{ $produto->valor }}</td>
                                <td>{{ $produto->estoqueinicial }}</td>
                                <td>{{ $produto->UF }}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{ route('produto.atualiza', ['id' => $produto->produtoid]) }}">Alterar</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="#" onclick="exclui({{ $produto->produtoid }})">Excluir</a> 
                                </td> 
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

<script>
    function exclui(id) {
        if (confirm('Deseja excluir o produto de id: ' + id + '?')) {
            location.href = '/produtos/excluir/' + id;
        }
    }
</script>
@endsection
