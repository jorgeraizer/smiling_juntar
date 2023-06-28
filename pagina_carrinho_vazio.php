<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARRINHO </title>

    <link rel="stylesheet" href="pagina_carrinho_vazio.css">
    
    <script src="pagina_carrinho_bike.js"></script>        
       
</head>
<body>
    <div class="d1">
        <div class="d2">
            <div class="dd1"><img onclick="Aparecer();" src="dd1.png" alt="" width="15px"></div>
            <a href="p.principal.php"><img src="dd3.png" alt="" width="120px"></a>
            <a href="pagina_carrinho_vazio.php"><div class="dd1"><img src="dd2.png" alt="" width="20px"></div></a>
        </div>
    </div>

    <div class="lateral" id="lateral"> 
        <div class="logo"><img src="dd3.png" alt="" width="150px"></div>
        <div class="opcoes">    
            <a href="pagina_entrar_cadastrar.html"><div class="cadastro"> 
                <img class="imagem" src="usuario.png" width="17px">USUARIO
            </div></a>
            <a href="p.principal.php"><div class="cadastro"> 
                <img class="imagem" src="produtos.png" width="20px">PRODUTOS
            </div></a>
            <div class="cadastro">
                <a href="pagina_carrinho_vazio.php"><img class="imagem" src="dd2.png" width="20px"> CARRINHO
            </div></a>
            <div class="cadastro">
                <a href="fale_conosco.html"> FALE CONOSCO
            </div></a>
            <div onclick="Fechar();" class="fechar">FECHAR</div>
        </div>
    
    </div>

    <div class="divp1">
        <div class="divp2"></div>

        <span class="carrinho_fonte">CARRINHO</span>
        
    
        <?php
include("conecta.php");
$comando = $pdo->prepare("SELECT * FROM carrinho");
$resultado = $comando->execute();
$total = 0;

// Array associativo de códigos de produtos e seus nomes
$produtos = array(
    "574380" => "Urso",
    "574381" => "Bike",
    "5741722" => "Soldado",
    "574543" => "Skate"
);

while ($linha = $comando->fetch()) {
    $id= $linha["id"];
    $codigo = $linha["codigo"];
    $quantidade = $linha["quantidade"];
    $precoItem = floatval($linha["preco"]); // Converter para número decimal
    $subtotal = $precoItem * $quantidade;
    $total += $subtotal;
    
    // Verifica se o código do produto existe no array
    if (isset($produtos[$codigo])) {
        $nome = $produtos[$codigo];
    } else {
        $nome = "Produto Desconhecido";
    }

    echo ("
        <div class=\"divp3\">
            <div class=\"c1\">
                <img src=\"$codigo.png\" width=\"180px\">
                <div class=\"textobrinq\">
                    $precoItem  <br>
                    $nome
                </div>
            </div>
            <div class=\"c1\">
                <div class=\"letra_descri\">$nome<br>
                    Código: $codigo
                    <div class=\"adicionar_retirar\">
                        
                        <div class=\"quantidade\">$quantidade</div> 
                        
                        
                    </div>
                    <a target='_self' href=\"excluir_produto.php?codigo=$id\">
                    Excluir
                    </a>
                </div>
            <br></div>
        <br></div>
    ");
}


?>


        
        








        
        <div class="divp4">
            <br>
            <div class="c3">TOTAL- R$<?php echo($total);?></div>
            <br>
            <div class="c4"><a href="excluir_todos_produtos.php">FINALIZAR COMPRA</a></div>
            <div class="espaco"></div>
        </div>
        
    </div>
    
    



</body>
</html>