<?php
 incluir 'conectar.php';
?>


<h1> Pessoa </h1>
 <forme método="POST" ação="addPessoa.php" enctype="multipart/form-data">
            <mesa>
                <tr>
                    <td>
 Nomo: 
 <input type="text" name="nomePessoa">
                    </td>
                </tr>
                <tr>
                    <td>
                        E-mail: 
 <input type="text" name="emailPessoa">
                    </td>
                </tr>

                <tr>
                    <td>
                        Idade: 
 <input type="number" nome="idadePessoa">
                    </td>
                </tr>

                <tr>
                    <td>
 <input type="submit" value="submit" name="sub">
                    </td>
                </tr>



            </mesa>
        </forma>   




<seável border='1'>
    <tr>
        <ésimo>
 Nomo
        </ésimo>
        <ésimo>
            E-mail
        </ésimo>
        <ésimo>
            Idade
        </ésimo>
        <ésimo>

        </ésimo>
    </tr>

<?php
$sql="selecione * de pessoa";
$qu=mysqli_query($con,$sql);
while($pessoa= mysqli_fetch_assoc($qu){
    ?>
    <tr>
        <td>
            <?php echo $pessoa['nomePessoa']?>
        </td>
        <td>
            <?php echo $pessoa['emailPessoa']?>
        </td>
        <td>
 <?php echo $pessoa['Pessoa idade']?>
        </td>

        <td>
 <a href="deleteProduct.php?idProduto=<?php echo $pessoa['idPessoa']?>">Deletar</a>
        </td>
        <td>
            <a href="editProduct.php?idProduto=<?php echo $f['IdProduto']?>">Alterar</a>
        </td>
    </tr>
    <?php
}
?> 