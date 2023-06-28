function Aparecer()
    {
        lateral.classList.add('animar');
    }

    function Fechar()
    {
        lateral.classList.remove('animar');
    }
    function abrir()
    {
         if(termo.checked==false)
         {
            alert("Para continuar, concorde com os termos de uso e preencha as informações")
         }
         else
         {
            window.open("p.principal.php","_self")
         }
    }