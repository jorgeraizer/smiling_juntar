<?php 

$email=$_POST["email"];
    $senha=$_POST["senha"];
    $senha2=$_POST["senha2"];
    $cep=$_POST["cep"];
    $cpf=$_POST["cpf"];
    $nome=$_POST["nome"];
    $sobrenome=$_POST["sobrenome"];
    $data_aniversario=$_POST["data_aniversario"];
    include("conecta.php");
    
    if(isset($_POST["inserir"]))
    {
        $comando = $pdo->prepare("INSERT INTO cadastro VALUES('$email','$senha','$senha2','$cep','$cpf','$nome','$sobrenome', '$data_aniversario')" );
        $resultado = $comando->execute();
        header("Location:p.principal.php");
    }

?>