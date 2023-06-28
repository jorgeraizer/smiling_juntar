<?php
include("conecta.php");
$id=$_GET["codigo"];
$comando = $pdo->prepare("DELETE FROM carrinho WHERE id='$id'");
$resultado = $comando->execute();
header("Location:pagina_carrinho_vazio.php");

?>