<?php
$email = $_POST["email"];
$senha = $_POST["senha"];
$senha2 = $_POST["senha2"];
$cep = $_POST["cep"];
$cpf = $_POST["cpf"];
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$data_aniversario = $_POST["data_aniversario"];
include("conecta.php");

if (isset($_POST["inserir"])) {
    if (!empty($email) && !empty($senha) && !empty($senha2) && !empty($cep) && !empty($cpf) && !empty($nome) && !empty($sobrenome) && !empty($data_aniversario)) {
        $comando = $pdo->prepare("INSERT INTO cadastro VALUES('$email','$senha','$senha2','$cep','$cpf','$nome','$sobrenome','$data_aniversario')");
        $resultado = $comando->execute();
        header("Location: pagina_registro_por_emailadministrador.html");
    } else {
        // Redirecionar para página de cadastro com mensagem de erro
        header("Location: pagina_registro_por_emailadministrador.html?erro=1");
    }
}

if (isset($_POST["excluir"])) {
    $comando = $pdo->prepare("DELETE FROM cadastro WHERE email='$email'");
    $resultado = $comando->execute();
    header("Location: pagina_registro_por_emailadministrador.html");
}

if (isset($_POST["alterar"])) {
    $comando = $pdo->prepare("UPDATE cadastro SET senha='$senha',senha2='$senha2',cep='$cep',cpf='$cpf',nome='$nome',sobrenome='$sobrenome',data_aniversario='$data_aniversario' WHERE email='$email'");
    $resultado = $comando->execute();
    header("Location: pagina_registro_por_emailadministrador.html");
}

if (isset($_POST["listar"])) {
    header("Location: pagina_registro_por_emailadministrador.php?email=$email");
}

if (isset($_POST["inserir2"])) {
    if (!empty($email) && !empty($senha) && !empty($senha2) && !empty($cep) && !empty($cpf) && !empty($nome) && !empty($sobrenome) && !empty($data_aniversario)) {
        $comando = $pdo->prepare("INSERT INTO cadastro VALUES('$email','$senha','$senha2','$cep','$cpf','$nome','$sobrenome','$data_aniversario')");
        $resultado = $comando->execute();
        header("Location: p.principal.php");
    } else {
        // Redirecionar para página de cadastro com mensagem de erro
        header("Location: pagina_registro_por_email.html");
    }
}
?>
