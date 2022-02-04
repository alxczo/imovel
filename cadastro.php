<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/stylecaduser2.css">
    <link rel="shortcut icon" href="img/home.png">
    <title>Cadastro</title>
</head>
<body>
    <section class="container">

    <h2>Cadastro</h2>

    <?php
        if(isset($_SESSION['cadastrado'])):
    ?>
    
    <div class="notification is-danger" align="center">
        <p style="color:pink">Cadastro feito com sucesso!</p>
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

    <form name="caduser" action="scriptlogin.php" method="POST" id="form-login"></form>

    <div>
    E-mail: <label>*</label>
    <input type="email" name="email" placeholder="Digite o seu e-mail">
    </div>

    <br>

    <div>
    Senha: <label>*</label>
    <input type="password" name="senha" placeholder="Digite a sua senha"> 
    </div>

    <br>

    <div class="botao">
    <button type="submit">Cadastrar</button>
    </div>


    </section>

    
</body>
</html>