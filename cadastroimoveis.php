<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/socorro.css">
    <link rel="shortcut icon" href="img/home.png">
    <title>Cadastro de Imoveis</title>

</head>
<body>
    <section class="container">
    <h2>Cadastro de Imovel</h2>

<?php
    if(isset($_SESSION['cadastrado'])):
?>

<div class="notification is-danger" align="center">
    <p style="color:pink">Imovel cadastrado com sucesso!</p>
</div>

<?php
    endif;
    unset($_SESSION['cadastrado']);
?>

<?php
    if(isset($_SESSION['nao_cadastrado'])):
?>

<div class="notification is-danger" align="center">
    <p style="color:#f00">Erro: E-mail já cadastrado!</p>
</div>

<?php
    endif;
    unset($_SESSION['nao_cadastrado']);
?>

<form name="cadimovel" action="scriptcadimovel.php" method="POST" id="form-login"></form>

Tipo:
<td>
        <select name="tipo">
            <option value="1">Casa</option>
            <option value="2">Apartamento</option>
        </select>
</td>
Endereço:
<input type="text" name="endereco" size="20"></center>
<br>
<br>
Bairro:
<tr>
    <td widht="15%"><font size="3" face="arial"></font></td>
    <td><input type="text" name="bairro" size="10"></td>
</tr>
Cidade:
<tr>
    <td widht="15%"><font size="3" face="arial"></font></td>
    <td><input type="text" name="cidade" size="16"></td>

    <td widht="15%"><font size="3" face="arial"> UF: </font></td>
    <td>
        <select name="uf">
            <option value="1">AM</option>
            <option value="2">SP</option>
            <option value="3">ES</option>
            <option value="4">GO</option>
            <option value="5">MA</option>
            <option value="6">MT</option>
            <option value="7">MS</option>
            <option value="8">MG</option>
            <option value="9">PA</option>
            <option value="10">PB</option>
            <option value="11">PR</option>
            <option value="12">PE</option>
            <option value="13">PI</option>
            <option value="14">RJ</option>
            <option value="15">RN</option>
            <option value="16">RS</option>
            <option value="17">RO</option>
            <option value="18">RR</option>
            <option value="19">SC</option>
            <option value="20">SE</option>
            <option value="21">TO</option>
        </select>
    </td>
</tr>
<br>
<br>
INCRA:
<tr>
    <td widht="15%"><font size="3" face="arial"></font></td>
    <td><input type="text" name="incra" size="16"></td>
Área:
<tr>
    <td widht="15%"><font size="3" face="arial"></font></td>
    <td><input type="text" name="area" size="26"></td>
</tr>
<br>
<br>
Perímetro:
<tr>
    <td widht="15%"><font size="3" face="arial"></font></td>
    <td><input type="text" name="perimetro" size="24"></td>
</tr>
IPTU:
<tr>
    <td widht="15%"><font size="3" face="arial"></font></td>
    <td><input type="text" name="iptu" size="10"></td>
</tr>
<br>
<br>
Lote:
<tr>
    <td widht="15%"><font size="3" face="arial"></font></td>
    <td><input type="text" name="lote" size="5"></td>
</tr>
Quadra:
<tr>
    <td widht="15%"><font size="3" face="arial"></font></td>
    <td><input type="text" name="quadra" size="5"></td>
</tr>
Nº Cadastro:
<tr>
    <td widht="15%"><font size="3" face="arial"></font></td>
    <td><input type="text" name="cadastro" size="8"></td>
</tr>
<br>
<br>
Código(SIGEF):
<input type="text" name="codigo" size="20"></center>
<br>
<br>
<input type="submit" value="Salvar"></center>

</section>
</body>
</html>