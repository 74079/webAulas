<?php
    include 'connect.php';


    $id = $_GET['idProduto'];
    $sql="select * from produto where IdProduto={$id}";
    $query= mysqli_query($con, $sql);
    $produto=mysqli_fetch_assoc($query);
?>


<h1> Produtos </h1>
        <form method="POST" action="#" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                       Id: 
                       <input readonly="readonly" type="text"  name="id" value="<?php echo $produto['IdProduto']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Nome Produto: 
                        <input type="text" name="nomeProduto" value="<?php echo $produto['nomeProduto']?>">
                    </td>
                </tr>

                <tr>
                    <td>
                        Preço do Produto: 
                        <input type="number" name="precoProduto" value="<?php echo $produto['precoProduto']?>">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                    </td>
                </tr>


            
            </table>
        </form>   



