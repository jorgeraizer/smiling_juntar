<?php
    $id = $_GET["id"];
    $nome      = $_GET["nome"];

    include("conecta.php");
    

    $comando = $pdo->prepare("INSERT INTO produtos Values($id, $nome)");
    $resultado = $comando->execute();
    //para voltar no formulário:
    header("location: pagina_carrinho_vazio.php");
    ?>