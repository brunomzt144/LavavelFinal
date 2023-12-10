@extends('layouts.app')

@section('cadastroProduto')
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

    <h1>Cadastro de Produto</h1>
    <form action="{{ route('produto.novo')}}" method="post">
        @csrf
        <table>
            <tr>
                <td><input type="text" name="nome" placeholder="Nome"></td>
            </tr>
            <tr>
                <td><input type="text" name="categoria" placeholder="Categoria"></td>
            </tr>
            <tr>
                <td><input type="number" name="estoque" placeholder="Estoque Inicial"></td>
            </tr>
            <tr>
                <td><input type="number" name="valor" step=0.01 placeholder="Valor"></td>
            </tr>
            <tr>
                <td>
                    <label for="estado">Selecione um estado:</label>
                    <select name="estado" id="estado">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Enviar"></td>
            </tr>
        </table>
    </form>
@endsection
