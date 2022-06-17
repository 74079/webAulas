
<?php
    include 'connect.php';
    $id = $_GET['idDoador'];
    $sql="select * from doador where idDoador={$id}";
    $query= mysqli_query($con, $sql);
    $doador=mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
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
<form method="POST" action="addDoador.php" enctype="multipart/form-data">

  <div class="row">
  <div class="col-25">
    <label for="fname">Primeiro nome</label>
  </div>
  <div class="col-75">
    <input type="text"  name="nome" value="<?php echo $doador['Nome']?>">
    </div>	
</div>


<div class="row">
<div class="col-25">
  <label for="lname">Sobre Nome</label>
</div>
<div class="col-75">
  <input type="text" id="lname" name="sobrenome"  value="<?php echo $doador['sobrenome']?>">
</div>
</div>

<div class="row">
<div class="col-25">
  <label for="lname">Email</label>
</div>
<div class="col-75">
  <input type="text" id="lname" name="email"  value="<?php echo $doador['email']?>">
</div>
</div>

<div class="row">
<div class="col-25">
  <label for="lname">Telefone</label>
</div>
<div class="col-75">
  <input type="text" id="lname" name="telefone"  value="<?php echo $doador['telefone']?>">
</div>
</div>


<div class="row">
<div class="col-25">
  <label for="cidade">Cidade</label>
</div>
<div class="col-75">
  <select id="cidade" name="cidade"  value="<?php echo $doador['cidade']?>">
    <option value="capinas">capinas</option>
    <option value="hortolandia">hortolandia</option>
    <option value="sumare">sumare</option>
    <option value="valinhos">valinhos</option>
  </select>
</div>
</div>

<div class="row">
<div class="col-25">
  <label for="lname">bairro</label>
</div>
<div class="col-75">
  <input type="text" id="lname" name="bairro" value="<?php echo $doador['bairro']?>">
</div>
</div>

<div class="row">
<div class="col-25">
  <label for="lname">Rua</label>
</div>
<div class="col-75">
  <input type="text" id="lname" name="rua" value="<?php echo $doador['rua']?>">
</div>
</div>

<div class="row">
<input type="submit" value="Submit"  name="sub">
</div>
</form>
</div>
</body>
</html>

























       
