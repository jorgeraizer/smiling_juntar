<?php
$c=$_GET["codigo"];
include("conecta.php");
$comando = $pdo->prepare("SELECT * FROM produtos WHERE codigo=$c");
$resultado = $comando->execute();

while ($linhas = $comando->fetch()) 
{
    $codigo = $linhas['codigo'];
    $nome = $linhas['nome'];
    $descricao = $linhas['descricao'];
    $preco = $linhas['preco'];
    $dados_imagem = $linhas["foto"];
    $i = base64_encode($dados_imagem);
    
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARRINHO URSO</title>

    <link rel="stylesheet" href="pagina_carrinho_soldado.css">
        
    <script src="pagina_carrinho_soldado.js"></script>   
      

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
        <div class="divp2">Carrinho de compras</div>
        <div class="divp3">
            <div class="c1">
            <?php echo("<img src='data:image/jpeg;base64,$i' width='180px'>"); ?>
                <div class="textobrinq">
                    <span id="valorunitario"><?php echo($preco);?></span> <br>
                    <?php echo($nome); ?>
                </div>
            </div>
            <div class="c1">
                <div class="letra_descri"><?php echo($nome); ?><br>
                Código:<?php echo($codigo); ?>
                <div class="adicionar_retirar">
                    <div class="mais" onclick="adicionar()">+</div>
                    <div class="quantidade">1</div>
                    <div class="menos" onclick="diminuir()">-</div>
                    
                </div>
                </div>
            </div>
        </div>
        <div class="divp4">
            <div class="c3">TOTAL- <span id="5741722"><?php echo($preco);?></span></div>
            <div class="c4"><a target='_self' onclick="abrir(<?php echo $preco;?>)"; href="#">ADICIONAR AO CARRINHO</a></div>
            <div class="c4_1"><a href="compra_finalizada_sucesso.html">FINALIZAR COMPRA</a></div>
        </div>
    </div>
    <div class="rodape"></div>


</body>
</html>