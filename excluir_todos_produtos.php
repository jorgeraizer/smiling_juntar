<?php
include("conecta.php");

// Excluir todos os itens da tabela "carrinho"
$comando = $pdo->prepare("DELETE FROM carrinho");
$resultado = $comando->execute();

// Redirecionar o usuário para uma página de sucesso
if ($resultado) {
    header("Location: compra_finalizada_sucesso.html");
    exit();
} else {
    echo "Ocorreu um erro ao excluir os itens.";
}
?>
