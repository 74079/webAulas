<?php
    include 'connect.php';
?>


<h1> Produtos </h1>
        <form method="POST" action="addDoador.php" enctype="multipart/form-data">
        <table>
                <tr>
                    <td> 
                       <!-- readonly comando para deixar id modo nao editavel, apenas visualização -->
                       Id:
                       <input readonly="readonly" type="text"  Id="id" value="<?php echo $Doador['IdDoador']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        primeiro nome: <!--retorna nome e id do produto esta funçao-->
                        <input type="text"  primeiroNome="PrimeiroNome" value="<?php echo $Doador['PrimeiroNome']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        ultimo nome: 
                        <input type="text"  SegundoNome="SegundoNome" value="<?php echo  $Doador['SegundoNome']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Email: 
                        <input type="text" Email="Email" value="<?php echo  $Doador['Email']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Telefone: 
                        <input type="text" Telefone="Telefone" value="<?php echo  $Doador['Telefone']?>">
                    </td>
                </tr>
                <tr>
                    <td>

                        Cidade: 
                        <input type="text" Cidade="Cidade" value="<?php echo  $Doador['Cidade']?>">
                    </td>
                </tr>

                <tr>
                    <td>
                        Bairro: 
                        <input type="text" Bairro="Bairro" value="<?php echo  $Doador['Bairro']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Rua: 
                        <input type="text" Rua="Rua" value="<?php echo  $Doador['Rua']?>">
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
            PrimeiroNome
        </th>
        <th>
            SegundoNome
        </th>
        <th>
            Email
        </th>
        <th>
            Telefone
        </th>
        <th>
            Cidade
        </th>
        <th>
            Bairro
        </th>
        <th>
            rua
        </th>
        <th>
            
        </th>
    </tr>

<?php
$sq="select * from Doador";/*buscando o doador*/
$qu=mysqli_query($con,$sq);
while($f=  mysqli_fetch_assoc($qu)){/*faz retoorna todos os produtos ate retorna todos os produtos da ultima linha  ou seja $f--> e nome objeto nome do produto onde retorna tudo o preco e nome do produto */

    ?>
    <tr><!--indica apenas uma linha do produto -->
        <td>
            <?php echo $f['PrimeiroNome']?>
        </td>
        <td>
            <?php echo $f['SegundoNome']?>
        </td>

        <td>
            <?php echo $f['Email']?>
        </td>

        <td>
            <?php echo $f['Telefone']?>
        </td>

        <td>
            <?php echo $f['Cidade']?>
        </td>

        <td>
            <?php echo $f['Bairro']?>
        </td>

        <td>
            <?php echo $f['Rua']?>
        </td>

        <td>
            <a href="deleteDoador.php?idDoador=<?php echo $f['IdDoador']?>">Deletar</a>
        </td>
        <td>
            <a href="editDoador.php?idDoador=<?php echo $f['IdDoador']?>">Alterar</a>
        </td>
    </tr>
    <?php
}
?>