<?php
    include 'connect.php';
    $id = $_GET['idDoador'];
    $sql="select * from Doador where idDoador={$id}";
    $query= mysqli_query($con, $sql);
    $produto=mysqli_fetch_assoc($query);
?>

<h1> Doadores </h1>
        <form method="POST" action="#" enctype="multipart/form-data">
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
                        <input type="text" PrimeiroNome="PrimeiroNome" value="<?php echo $Doador['PrimeiroNome']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        ultimo nome: 
                        <input type="text" SegundoNome="SegundoNome" value="<?php echo  $Doador['SegundoNome']?>">
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