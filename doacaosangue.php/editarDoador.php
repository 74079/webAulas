



<?php
    include 'connect.php';
    $id = $_GET['idDoador'];
    $sql="select * from doador where idDoador={$id}";
    $query= mysqli_query($con, $sql);
    $doador=mysqli_fetch_assoc($query);
   
?>

<h1> Doadores </h1>
        <form method="POST" action="#" enctype="multipart/form-data">
            <table>
                <tr>
                    <td> 
                       <!-- readonly comando para deixar id modo nao editavel, apenas visualização -->
                       Id:
                       <input readonly="readonly" type="text"  name="id" value="<?php echo $doador['IdDoador']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        primeiro nome: <!--retorna nome e id do produto esta funçao-->
                        <input type="text" name="nome" value="<?php echo $doador['Nome']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        ultimo nome: 
                        <input type="text" name="sobrenome" value="<?php echo  $doador['sobrenome']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Email: 
                        <input type="text" name="email" value="<?php echo  $doador['email']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Telefone: 
                        <input type="text" name="telefone" value="<?php echo  $doador['telefone']?>">
                    </td>
                </tr>
                <tr>
                    <td>

                        Cidade: 
                        <input type="text" name="cidade" value="<?php echo  $doador['cidade']?>">
                    </td>
                </tr>

                <tr>
                    <td>
                        Bairro: 
                        <input type="text" name="bairro" value="<?php echo  $doador['bairro']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Rua: 
                        <input type="text" name="rua" value="<?php echo  $doador['rua']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                    </td>
                </tr>            
            </table>
        </form> 
       
