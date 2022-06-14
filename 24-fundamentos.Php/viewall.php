<?php
    include 'connect.php';
?>


<h1> Produtos </h1>
        <form method="POST" action="addProduct.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        Nome Produto: 
                        <input type="text" name="nomeProduto">
                    </td>
                </tr>

                <tr>
                    <td>
                        Preço do Produto: 
                        <input type="number" name="precoProduto">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                    </td>
                </tr>


            
            </table>
        </form>   




<table border='3    '>
    <tr>
        <th>
            Nome
        </th>
        <th>
            Preço
        </th>
        <th>
            
        </th>
    </tr>

<?php
$sql="SELECT * FROM 5si.produto";/*buscando o produto*/
$query=mysqli_query($con,$sql);
while($f=  mysqli_fetch_assoc($query)){/*faz retoorna todos os produtos ate retorna todos os produtos da ultima linha  ou seja $f--> e nome objeto nome do produto onde retorna tudo o preco e nome do produto */

    ?>
    <tr><!--indica apenas uma linha do produto -->
        <td>
            <?php echo $f['nomeProduto']?>
        </td>
        <td>
            <?php echo $f['precoProduto']?>
        </td>

        <td>
            <a href="deleteProduct.php?idProduto=<?php echo $f['IdProduto']?>">Deletar</a>
        </td>
        <td>
            <a href="editProduct.php?idProduto=<?php echo $f['IdProduto']?>">Alterar</a>
        </td>
    </tr>
    <?php
}
?>