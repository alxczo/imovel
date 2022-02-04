<?php
session_start();

include("conexao.php");
$conn = conectar();
$email = $_POST['email'];
$senha = MD5 ($_POST['senha']);

$cadastro = $conn->prepare("INSERT INTO usuario(email, senha)
VALUES(:nome, :senha)");

$cadastro->bindValue(":email", $email);
$cadastro->vindValue(":senha", $senha);

$verificar=$conn->prepare("SELECT * FROM usuario WHERE email=?");

$verificar->execute(array($email));

if($verificar->rowCount()==0):

    $cadastro->execute();
else:
    echo "E-mail já cadastrado";
endif;

$row=$cadastro->rowCount();

if($row == 1){
    $_SESSION['cadastrado'] =true;
    header('Location: cadastro.php');
    exit();
}
else{
    $_SESSION['nao_cadastrado']=true;
    header('Location: cadastro.php');
    exit();
}

?>