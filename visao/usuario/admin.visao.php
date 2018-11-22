<h1 id="tituProdutos">Pagina do Administrador</h1>

<h1 id="tituadmProduto">Produtos</h1>
<a class="admMudar" href='./produto/addProduto'>Adicionar produto</a>
<a class="admMudar" href='./produto/updateProduto'>Alterar produto</a>
<a class="admMudar" href='./produto/deleteProduto'>Deletar produto</a>

<h2 id="tituadmProduto">Relatórios</h2>
<a class="admMudar" href='./cliente/qtdProdutosEstoque'>Produtos e sua quantidade em estoque</a>
<a class="admMudar" href='./cliente/categoriaProdutos'>Produtos e sua categoria</a>
<a class="admMudar" href='./cliente/vendasIntervaloDatas'>Vendas entre datas</a>
<a class="admMudar" href='./cliente/vendasMunicipio'>Vendas por municipio</a>
<a class="admMudar" href='./cliente/vendasPeriodo'>Faturamento do dia</a>

    
<h1 id="tituadmProduto">Cupons</h1>
<form action="./pedido/addCupom" method="POST">
    <label for="nomecupom">Digite o nome do cupom a ser criado:</label>
    <input class="form" type="text" name="nomecupom"> 
    
    <label for="valorcupom">Digite o valor do cupom a ser criado:</label>
    <input class="form" type="text" name="valorcupom">

    <button id="botao" type="submit">Enviar</button>
</form>
