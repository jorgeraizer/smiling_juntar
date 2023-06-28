<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA PRINCIPAL</title>

    <link rel="stylesheet" href="p.principal.css">

    <script src="p.principal.js"></script>

</head>
<body>
    <div class="d1">
        <div class="d2">
            <div class="dd1"><img onclick="Aparecer();" src="dd1.png" alt="" width="15px"></div>
            <img src="dd3.png" alt="" width="120px">
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
    
        <div class="divp2">
            <img  id="imagem" src="CARROSEL1.png" width="220px" >
        </div>
    <div class="divp1">
        
        <div class="divp4">
            <div class="divp3">
                <a href="pagina_espec_brinq.urso.html"><img  src="brinquedo2div.png" width="90px"></a>
                    <div class="textobrinq">
                        29,99 <br>
                        URSO
                    </div>
             </div>

             <div class="divp3">
                <a href="pagina_espec_brinq.skate.html"><img  src="brinquedo3div.png" width="90px"></a>
                    <div class="textobrinq">
                        59,99 <br>
                        SKATE
                    </div>
             </div>
             
        </div>

        <div class="divp4">
            <div class="divp3">
               <a href="pagina_espec_brinq.bike.html"> <img  src="brinquedo4div.png" width="90px"> </a>
                    <div class="textobrinq">
                        499,99 <br>
                        BIKE
                    </div>
             </div>

             <div class="divp3">
                <a href="Pagina_espec_brinq.soldado.html"><img  src="brinquedo5div.png" width="90px"></a>
                    <div class="textobrinq">
                        09,99 <br>
                        SOLDADO
                    </div>
             </div>
             
        </div>

        <script>

        function abrir(c)
        {

            window.open("pagina_especifica.php?codigo="+c,"_blank")

        }

    </script>


        <?php

        include("conecta.php");
        $comando = $pdo->prepare("SELECT * FROM produtos ");
        $resultado = $comando->execute();
        echo("<div class=\"divp4\">");
        while ($linhas = $comando->fetch()) 
        {
            $codigo = $linhas['codigo'];
            $nome = $linhas['nome'];
            $descricao = $linhas['descricao'];
            $preco = $linhas['preco'];
            $dados_imagem = $linhas["foto"];
            $i = base64_encode($dados_imagem);
            
            echo ("
            
                <div onclick=\"abrir($codigo);\" class=\"divp3\">
                <img src='data:image/jpeg;base64,$i' width='20px'>
                    <div class=\"textobrinq\">
                        $preco <br>
                        $nome
                    </div>
                </div>
            ");
        }
        echo("</div>");
            ?>







        







        

        
        

    
    <script>
       
      </script>
</body>
</html>