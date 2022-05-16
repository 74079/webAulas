

<h1> Doadores </h1>
        <form method="POST" action="#" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                       Id: 
                       <!-- readonly comando para deixar id modo nao editavel, apenas visualização -->
                       <input readonly="readonly" type="text"  name="id" value="<?php echo $doador['IdDoador']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        primeiro nome: <!--retorna nome e id do produto esta funçao-->
                        <input type="text" name="PrimeiroNome" value="<?php echo $doador['PrimeiroNome']?>">
                    </td>
                </tr>
                
                <tr>
                    <td>
                        ultimo nome: 
                        <input type="number" name="UltimoNome" value="<?php echo  $doador['UltimoNome']?>">
                    </td>
                </tr>

                <tr>
                    <td>
                        Email: 
                        <input type="number" name="Email" value="<?php echo  $doador['Email']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Telefone: 
                        <input type="number" name="Telefone" value="<?php echo  $doador['Telefone']?>">
                    </td>
                </tr>

                <tr>
                    <td>
                        Cidade: 
                        <input type="number" name="Cidade" value="<?php echo  $doador['Cidade']?>">
                    </td>
                </tr>

                <tr>
                    <td>
                        Bairro: 
                        <input type="number" name="Bairro" value="<?php echo  $doador['Bairro']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Rua: 
                        <input type="number" name="Rua" value="<?php echo  $doador['Rua']?>">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                    </td>
                </tr>


            
            </table>
        </form> 