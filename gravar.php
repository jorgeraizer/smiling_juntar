<?php

include("conecta.php");

$id_produto=$_GET["codigo"];
$quantidade=$_GET["quantidade"];
$preco=$_GET["preco"];


    $comando = $pdo->prepare("INSERT INTO carrinho(codigo,quantidade,email,preco) VALUES($id_produto,$quantidade,'domingos.bh@bol.com.br',$preco)" );
    $resultado = $comando->execute();
    header("Location:p.principal.php");


?>