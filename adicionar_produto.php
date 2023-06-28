<?php




// Receber os dados do formulário
$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$foto = file_get_contents($_FILES["foto"]["tmp_name"]);

include("conecta.php");

// Inserir os dados no banco de dados
$comando = $pdo->prepare("INSERT INTO produtos(codigo,preco,foto,descricao,nome) Values(:codigo,:preco,:foto,:descricao,:nome)");
$comando->bindParam(":foto", $foto, PDO::PARAM_LOB);
$comando->bindParam(":codigo", $codigo);
$comando->bindParam(":preco", $preco);
$comando->bindParam(":descricao", $descricao);
$comando->bindParam(":nome", $nome);
$resultado = $comando->execute();
?>

