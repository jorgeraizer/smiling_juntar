function Aparecer()
{
    lateral.classList.add('animar');
}

function Fechar()
{
    lateral.classList.remove('animar');
}

function adicionar() {
    var quantidadeElement = document.querySelector(".quantidade");
    var quantidade = parseInt(quantidadeElement.innerHTML);
    quantidade++;
    quantidadeElement.innerHTML = quantidade;
    document.getElementById("5741722").innerHTML = quantidade * document.getElementById("valorunitario").innerHTML;
}

function diminuir() {
    var quantidadeElement = document.querySelector(".quantidade");
    var quantidade = parseInt(quantidadeElement.innerHTML);
    if (quantidade > 1) {
        quantidade--;
        quantidadeElement.innerHTML = quantidade;
        document.getElementById("5741722").innerHTML = quantidade * document.getElementById("valorunitario").innerHTML;
    }
}

function gravar(preco)
{
    codigo = 5741722;
    var quantidadeElement = document.querySelector(".quantidade");
    var quantidade = parseInt(quantidadeElement.innerHTML);
    window.open ("gravar.php?codigo=" + codigo + "&quantidade=" + quantidade + "&preco="+preco , "_self");
}
function comprar(Id_produtos)
      {
        quantidade = numero.value
        window.open("comprar.php?Id_produtos="+Id_produtos+"&quantidade="+quantidade,"_self")
      }