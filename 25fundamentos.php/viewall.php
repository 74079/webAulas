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




<table border='1'>
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
$sq="select * from produto";
$qu=mysqli_query($con,$sq);
while($f=  mysqli_fetch_assoc($qu)){
    ?>
    <tr>
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