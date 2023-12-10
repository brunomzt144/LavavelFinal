@extends('layouts.app')
@section('venda.cadastro')
<style>
      body {
            background-color: #e6f7ff;
        }
    .container {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #f9f9f9;
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    .form-control {
        margin-bottom: 15px;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .btn {
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        background-color: #4caf50;
        color: white;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #45a049;
    }
</style>

<div class="container">
    <h1>Cadastro de Venda</h1>

    <form method="post" action="{{ route('venda.novo') }}">
        @csrf

        <select class="form-control" name="id_usuario">
            @foreach($usuarios as $u)
            <option value="{{ $u->id }}"> {{ $u->nome }} </option>
            @endforeach
        </select>

        <input type="number" class="form-control" name="valor" placeholder="Valor">

        <input type="submit" class="btn" value="Enviar">
    </form>
</div>
@endsection
