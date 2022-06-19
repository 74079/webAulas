
<?php
header('Content-Type: text/html; charset=utf-8');
include 'connect.php';
if(isset($_POST['sub'])){
    $t=$_POST['text'];
    $u=$_POST['user'];
    $p=$_POST['pass'];
    $c=$_POST['city'];
    $g=$_POST['gen'];

    if($_FILES['f1']['name']){
        move_uploaded_file($_FILES['f1']['tmp_name'], "image/".$_FILES['f1']['name']);
        $img="image/".$_FILES['f1']['name'];
    }
    $i="insert into reg(name,username,password,city,image,gender)value('$t','$u','$p','$c','$img','$g')";
    mysqli_query($con, $i);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

* {
    box-sizing: border-box;
  }
  
  input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
  }
  
  label {
    padding: 12px 12px 12px 0;
    display: inline-block;
  }
  
  input[type=submit] {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
  }
  
  .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }
  
  .col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
  }
  
  .col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
  }
  
  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  
  /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
      width: 100%;
      margin-top: 0;
    }
  }
  </style>
</head>
<body>


<div class="container">


        <form method="POST" enctype="multipart/form-data">  <!--action="addDoador.php"  essa funcao faz adicionar na classe doador -->
        
        <div class="row">
        <div class="col-25">
            <label for="fname">Nome Do Usuario</label>
        </div>
        <div class="col-75">
            <input type="text"  name="text" placeholder="seu nome..">
            </div>	
        </div>


        <div class="row">
        <div class="col-25">
        <label for="lname">Cadastra Usuario</label>
        </div>
        <div class="col-75">
        <input type="text" id="lname" name="user" placeholder="nome do user..">
        </div>
    </div>

    <div class="row">
        <div class="col-25">
        <label for="lname">Senha Do Usuario</label>
        </div>
        <div class="col-75">
        <input type="text" id="lname" name="pass" placeholder="Digite seu password..">
        </div>
    </div>

    <div class="row">
        <div class="col-25">
        <label for="cidade">Cidade</label>
        </div>
        <div class="col-75">
        <select name="city">
            <option value="">select</option>
            <?php
            $sqlCity= mysqli_query($con, "select * from city");
                                        
            while($item = mysqli_fetch_assoc($sqlCity))
            {
                $nomeItem = $item['nameCity'];
                $idCity = $item['idCity'];
                echo "                                
                    <option value=$nomeItem>$nomeItem</option>                                
                ";
            }
            ?>
        </select>
        </div>
    </div>


    <div class="row">
        <div class="col-25">
        <label for="lname">Mascolino</label>
        </div>
        <div class="col-75">
        <input type="radio" name="gen" id="gen"  value="female" placeholder="marque aqui..">
        </div>
    </div>

    <div class="row">
    <div class="col-25">
        <label for="lname">Feminino</label>
    </div>
    <div class="col-75">
        <input type="radio" name="gen" id="gen"  value="male" placeholder="marque aqui..">
    </div>
    </div>

    <div class="row">
        <div class="col-25">
        <label for="lname">Selecionar Foto</label>
        </div>
        <div class="col-75">
        <input type="file" id="lname" name="f1" placeholder="Busca Sua foto..">
        </div>
    </div>

    <div class="row">
        <input type="submit" value="Submit"  name="sub">
    </div>
    <td>
    <a href="LoginTemplete.php"> Login</a>
    </td>
 
</div>
</body>
</html>
