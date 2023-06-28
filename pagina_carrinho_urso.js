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
    document.getElementById("574380").innerHTML = quantidade * document.getElementById("valorunitario").innerHTML;
}

function diminuir() {
    var quantidadeElement = document.querySelector(".quantidade");
    var quantidade = parseInt(quantidadeElement.innerHTML);
    if (quantidade > 1) {
        quantidade--;
        quantidadeElement.innerHTML = quantidade;
        document.getElementById("574380").innerHTML = quantidade * document.getElementById("valorunitario").innerHTML;
    }
}

function gravar(preco)
{
    codigo = 574380;
    var quantidadeElement = document.querySelector(".quantidade");
    var quantidade = parseInt(quantidadeElement.innerHTML);
    window.open ("gravar.php?codigo=" + codigo + "&quantidade=" + quantidade + "&preco="+preco , "_self");
}