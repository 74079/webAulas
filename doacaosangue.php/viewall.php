<?php
    include 'connect.php';
?>



        <form method="POST" action="addDoador.php" enctype="multipart/form-data">
        <table>
                <tr>
                    <td> 
                       <!-- readonly comando para deixar id modo nao editavel, apenas visualização -->
                       Id:
                       <input readonly="readonly" type="text"  name="id">
                    </td>
                </tr>
                <tr>
                    <td>
                        primeiro Nome: <!--retorna nome e id do produto esta funçao-->
                        <input type="text"  name="nome"  >
                    </td>
                </tr>
                <tr>
                    <td>
                        Sobre Nome: 
                        <input type="text"  name="sobrenome" >
                    </td>
                </tr>
                <tr>
                    <td>
                        Email: 
                        <input type="text" name="email" >
                    </td>
                </tr>
                <tr>
                    <td>
                        Telefone: 
                        <input type="text" name="telefone" >
                    </td>
                </tr>
                <tr>
                    <td>

                        Cidade: 
                        <input type="text" name="cidade">
                    </td>
                </tr>

                <tr>
                    <td>
                        Bairro: 
                        <input type="text" name="bairro" >
                    </td>
                </tr>
                <tr>
                    <td>
                        Rua: 
                        <input type="text" name="rua" >
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
            Sobrenome
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
$sql="SELECT * FROM doador";/*buscando o doador*/
$query=mysqli_query($con,$sql);
while($f=  mysqli_fetch_assoc($query)){/*faz retoorna todos os produtos ate retorna todos os produtos da ultima linha  ou seja $f--> e nome objeto nome do produto onde retorna tudo o preco e nome do produto */

    ?>
    <tr><!--indica apenas uma linha do produto -->
        <td>
            <?php echo $f['Nome']?>
        </td>
        <td>
            <?php echo $f['sobrenome']?>
        </td>

        <td>
            <?php echo $f['email']?>
        </td>

        <td>
            <?php echo $f['telefone']?>
        </td>

        <td>
            <?php echo $f['cidade']?>
        </td>

        <td>
            <?php echo $f['bairro']?>
        </td>

        <td>
            <?php echo $f['rua']?>
        </td>

    <td>
            <a href="deleteDoador.php?idDoador=<?php echo $f['IdDoador']?>">Deletar</a>
        </td>
        <td>
            <a href="editarDoador.php?idDoador=<?php echo $f['IdDoador']?>">Alterar</a>
        </td>
    </tr>
   
    <?php
}
?>