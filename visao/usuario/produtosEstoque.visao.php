    <table>
        <tr>
            <th>Id do Produto</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade em estoque</th>
        </tr>
<?php
    foreach ($produtos as $dado) { 
        echo "<tr>";
        echo "<td>".$dado['idproduto']."</td>";
        echo "<td>".$dado['nomeproduto']."</td>";
        echo "<td>".$dado['preco']."</td>";
        echo "<td>".$dado['quantidade']."</td>";
        echo "</tr>";
    }
?>
    </table>