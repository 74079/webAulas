

<h1> Doadores </h1>
        <form method="POST" action="#" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                       Id: 
                       <!-- readonly comando para deixar id modo nao editavel, apenas visualização -->
                       <input readonly="readonly" type="text"  name="id" value="<?php echo $doador['IdProduto']?>">
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
                        E mail: 
                        <input type="number" name="UltimoNome" value="<?php echo  $doador['UltimoNome']?>">
                    </td>
                </tr>


                <tr>
                    <td>
                        : 
                        <input type="number" name="UltimoNome" value="<?php echo  $doador['UltimoNome']?>">
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
                        ultimo nome: 
                        <input type="number" name="UltimoNome" value="<?php echo  $doador['UltimoNome']?>">
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
                        <input type="submit" value="submit" name="sub">
                    </td>
                </tr>


            
            </table>
        </form> 