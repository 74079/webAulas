

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
    header ('location:LoginTemplete.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page</title>
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
  width: 30%;
  position: center;
  margin-top: 6px;
}

.col-75 {
  margin: 2%;
  width: center;
  width: 98%;
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

.pocisaosexo{
  margin: 20px;
}

.pocisaomasculino{
  margin: 20px;
}

 </style>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="AdminLTE-3.2.0/index2.html"><b>HEMOCE</b>HT</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Registra seu Novo Cadastro</p>

      <form method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
        <input type="text" class="form-control" name="text" placeholder="Nome Completo">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" name="user" placeholder="nome Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
      
        <div class="input-group mb-3">
          <input type="password" class="form-control" name = "pass"placeholder="pass">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
        <div class="col-25">
        
        </div>
        <div class="col-75">
        <select name="city">
            <option value="">Selecionar Cidade</option>
            <?php
            $sqlCity= mysqli_query($con, "select * from city");
                                        
            while($item = mysqli_fetch_assoc($sqlCity))
            {
                $nomeItem = $item['nameCity'];
                $idCity = $item['idCity'];
                echo "                                
                    <option value=$nomeItem>$nomeItem</option>";
            }
            ?>
        </select>
        </div>
    </div>
    <td>
    <label for="#">Sexo</label>
        <input class ="pocisaomasculino" type="radio"name="gen" id="gen" value="male">Masculino
        <input class ="pocisaosexo" type="radio" name="gen" id="gen" value="female">Feminino
      </td>

      <div class="row">
        <div class="col-25">
        </div>
        <div class="col-75">
        <input type="file" name="f1" >
        </div>
    </div>
    
    <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
              Aceita os <a href="termo.html">termos</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
          <input type="submit" value="cadastrar"  name="sub">
          </div>
          
          <!-- /.col -->
    </div>
      </form>
      <div class="social-auth-links text-center">
        <p>- ou -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Faça Login usando o Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Faça Login usando o  Google+
        </a>
      </div>

      <a href="LoginTemplete.php" class="text-center">Eu já tenho uma Conta</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>
