<?php

include'connect.php';// fazer uma conecção com a banco de dados 

// is set 
if(isset($_POST['sub'])){
    $u=$_POST['user'];
    $p=$_POST['pass'];
    
   $s= "select * from reg where username='$u' and password= '$p'";   
   $qu= mysqli_query($con, $s);
   if(mysqli_num_rows($qu)>0){
      $f= mysqli_fetch_assoc($qu);// f--> variavel usuario 
      $_SESSION['id']=$f['id'];// aqi ele esta criando uma variavel sessão e esta recebendo o id do usuario 
      header ('location:home.php');
   }
   else{
       echo 'username or password does not exist';
   }
  
}
?>
<html>
      
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1> Login -alciomar </h1>
        <form method="POST" enctype="multipart/form-data">
            <table>
                
                <tr>
                    <td>
                        Username
                        <input type="text" name="user">
                    </td>
                </tr>
                <tr>
                    <td>
                        password
                        <input type="password" name="pass">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="sub" value="submit">
                    </td>
                    <td>
                        <a href="reg.php">cadastrar</a>
                    </td>
                    
                </tr>
            </table>
    </body>
</html>
