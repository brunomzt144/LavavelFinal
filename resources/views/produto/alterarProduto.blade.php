@extends('layouts.app')
@section('alterarProduto')
<style>
        body {
            background-color: #e6f7ff; 
            font-family: Arial, sans-serif; 
        }

        form {
            max-width: 500px; 
            margin: 0 auto; 
            padding: 20px; 
            background-color: #fff; 
            border-radius: 8px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        }

        table {
            width: 100%; 
            border-collapse: collapse; 
        }

        td {
            padding: 10px; 
        }

        input[type="text"],
        input[type="number"],
        select,
        input[type="submit"] {
            width: calc(100% - 20px);
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff; 
            color: white; 
            padding: 12px 0; 
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3; 
        }

        h1 {
            text-align: center; 
            margin-bottom: 20px; 
        }
    </style>
    <h1>Alteração de Producto</h1>
    <form method="post" action="{{ route('produto.alterar' , ['id' => $produto->produtoid]) }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="nome" placeholder="Nome" value="{{ $produto ->nome }}">
        <input type="text" name="categoria" placeholder="Categoria" value="{{ $produto ->categoria }}">
        <input type="number" name="estoque" placeholder="Estoque" value="{{ $produto ->estoqueinicial }}">
        <input type="number" name="valor" placeholder="Valor" step=0.01 value="{{ $produto ->valor }}">
        
        <label for="estado">Selecione o estado:</label>
        <select name="estado" id="estado">
            <option value="">Selecione...</option>
            @foreach($estados as $sigla => $nome)
                <option value="{{ $sigla }}" {{ $produto->UF === $sigla ? 'selected' : '' }}>{{ $nome }}</option>
            @endforeach
        </select>

        <input type="submit" value="Enviar">
    </form> 
@endsection