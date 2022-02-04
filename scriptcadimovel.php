<?php
session_start();

include("conexao.php");
$conn = conectar();
$tipo = $_POST['tipo'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$incra = $_POST['incra'];
$area = $_POST['area'];
$perimetro = $_POST['perimetro'];
$iptu = $_POST['iptu'];
$lote = $_POST['lote'];
$quadra = $_POST['quadra'];
$numerocad = $_POST['numerocad'];
$codigo = $_POST['codigo'];

$cadastro = $conn->prepare("INSERT INTO imovel(tipo, endereco, bairro, cidade, uf, incra, area, perimetro, iptu, lote, quadra, numerocad, codigo)
VALUES(:tipo, :endereco, :bairro, :cidade, :uf, :incra, :area, :perimetro, :iptu, :lote, :quadra, :numerocad, :codigo)");

$cadastro->bindValue(":tipo", $tipo);
$cadastro->bindValue(":endereco", $endereco);
$cadastro->bindValue(":bairro", $bairro);
$cadastro->bindValue(":cidade", $cidade);
$cadastro->bindValue(":uf", $uf);
$cadastro->bindValue(":incra", $incra);
$cadastro->bindValue(":area", $area);
$cadastro->bindValue(":perimetro", $perimetro);
$cadastro->bindValue(":iptu", $iptu);
$cadastro->bindValue(":lote", $lote);
$cadastro->bindValue(":quadra", $quadra);
$cadastro->bindValue(":numerocad", $numerocad);
$cadastro->bindValue(":codigo", $codigo);


$verificar=$conn->prepare("SELECT * FROM imovel WHERE numerocad=?");

$verificar->execute(array($numerocad));

if($verificar->rowCount()==0):

    $cadastro->execute();

else:
    echo "Imovel já cadastrado";
endif;

$row=$cadastro->rowCount();

if($row == 1){
    $_SESSION['cadastrado'] =true;
    header('Location: cadastroimoveis.php');
    exit();
}
else{
    $_SESSION['nao_cadastrado']=true;
    header('Location: cadastroimoveis.php');
    exit();
}

?>