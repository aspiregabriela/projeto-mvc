<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title> Cadastro Funcionario </title>
<style>
label, input{display : block; }
</style>
</head>
<body>
<fieldset>
<legend> Cadastro de Funcionario  </legend>

<form method ="post" action="/Funcionario/form/save">

<input type="hidden" value="<?= $model->id ?>" name="id"/>

<label for="nome"> Nome: </label>
<input id="nome" name="nome" value="<?= $model ->nome?>" type="text" />

<label for="rg">RG:</label>
            <input name="rg" id="rg" type="text" />

            <label for="cpf">CPF:</label>
            <input name="cpf" id="cpf" type="number" />

            <label for="data_nascimento">Data Nascimento:</label>
            <input name="data_nascimento" id="data_nascimento" type="date" />

            <label for="email">E-mail:</label>
            <input name="email" id="email" type="email" />

            <label for="telefone">Telefone:</label>
            <input name="telefone" id="telefone" type="numer" />

            <label for="endereco">Endereço:</label>
            <input name="endereco" id="endereco" type="text" />

            <button type="submit">Enviar</button>

        </fieldset>
    </form>    
</body>
</html>