
<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .cabeçalho{
	margin:0;
	height: 30px;
	line-height: 200%;
	width: 100%;
	padding:0;
	text-align: center;
	background-color: goldenrod;
}

.cabeçalho a{
    text-decoration: none;
}

	*{
	margin:0;
	padding:0;
	color: #222;
	font-family:'Arial';
	}
	
	.doacaosangue{
	margin-top: -85px;
	height: 50px;
	color: #222;
	font-size: 30px;
	list-style: none;
	margin-left: 500px;
}

.menu{
	width:auto;
	height:50px;
	background-color: cadetblue;
	}

	.menu{
		border: 1px solid #222;
	}
	
.menu>ul{
	list-style:none;	
	position:relative;
	margin-left:50px;
	}
.menu ul li{
		width:150px;
		float:left;
	}

.menu a{
	padding:15px;
	display:block;
	text-decoration: none;
	background-color: cadetblue;
	text-align:center;
	}
.menu ul ul{
	list-style:none;
	position:absolute;
	visibility:hidden;
	
	}
.menu ul li:hover ul{
	visibility:visible;
	}
	
.menu a:hover{
	
	background-color:green;
	}

.menu ul ul li{
	float:none;
	border-bottom: solid 1px #ccc;
	}
.menu ul ul li a{
	
	background-color:rgb(75, 194, 207);
	}
#bt_menu{
	display: none;
	}
label[for='bt_menu']{
	padding:5px;
	background-color:#222;
	color:#fff;
	font-family:'Arial';
	text-align:center;
	font-size:30px;
	cursor:pointer;
	display:none;
	width:50px;
	height:50px;
	}	
label[for='bt_menu']:hover{
	background-color:#f4f4f4;
	color:#aaa;
	}
@media (max-width: 800px) {

	.cabeçalho>ul{
		margin-left: 0;
	}

	.cabeçalho{
		margin-top: 5px;
	}

	.cabeçalho ul>li{
		width: 100%;
		float: 0;
	}
	.cabeçalho ul ul{
		position: static;
		overflow: hidden;
		max-height: 0;
		transition: all .4s;
	}

	.cabeçalho ul li:hover ul{
	height:auto;
	max-height:200px;
	transition:all .4s;
	}


.menu{
	margin-left:-100%;
	transition:all .4s;
	}
label[for='bt_menu']{
	display:block;
	}
.menu>ul{
	margin-left:0;
	}
.menu{
	margin-top:5px;
	}
.menu ul li{
	width:100%;
	float:none;  
	}
.menu ul ul{
	position:static;
	overflow:hidden;
	max-height:0;
	transition:all .4s;
	}
.menu ul li:hover ul{
	height:auto;
	max-height:200px;
	transition:all .4s;
	}
#bt_menu:checked ~ .menu{
	margin-left:0;
	}
}

.titulo{
	
	width: 100%;
	margin-left:auto;
	height: 140px;

	background-color:  cadetblue;
}

h1{
	margin-left: 10%;
	line-height: 225%;
}

h3{
	margin-left: 10%;
	line-height: 1000%;
}


.titulo h4{	
    margin-top: 100px;
    
	padding: 8px 20px;
	text-align: left;
	background-color: white; 
    color: black;
    border-left: 8px solid #4CAF50;
	transition-duration: 0.4s;
	margin-left: 150px;
}

.titulo h5{	
    margin-top: 30px;
	padding: 8px 30px;
	text-align: left;
	background-color: white; 
    color: black;
	transition-duration: 0.4s;
	margin-left: 150px;
}

.criterios{
    margin-top: 50px;
    padding: 5px 5px;
	text-align: left;
    color: rgb(3, 3, 3);
	transition-duration: 0.4s;
	margin-left: 150px;
}

.atecao{
    padding: 8px 30px;
	text-align: left;
    color: #222;
   
	transition-duration: 0.4s;
	margin-left: 150px;
}

.titulo h6{
	width: 100%;
	height:3px;
	background-color:#4CAF50;
}

.titulo h2{
    padding: 8px 30px;
	text-align: left;
    color: #222;
	transition-duration: 0.4s;
	margin-left: 150px;
}
.homens {
    padding: 8px 30px;
	text-align: left;
    color: #222;
	transition-duration: 0.4s;
	margin-left: 150px;
}

.rodape{
	width: 100%;
	margin-top: 50px;
	
}

.rodape>ul{
	list-style: none;
	position: relative;
	margin-left: 150px;
	margin-right: 50px;
}

.rodape ul li{
	width: 250px;
	float: left;
}
.rodape a{
	text-decoration: none;
	text-transform: uppercase;
	color: rgb(94, 92, 92);
	text-align: center;
}
.rodape ul ul{
	list-style: none;
	position: absolute;	
}


.rodape ul ul li{
	float:none;
	color: #222;
}

.sede p{
	margin-top: 5px;
	color: #222;
}

.horarios p{
	margin-top: 5px;
	color: #222;
}

.cadastro{ /*almeta a borda da tela */ 
	height: 180%;
    margin-top: 50px;
    color: #222;
}



.tableresult {
  
  border-collapse: collapse;
  width: 100%;
  height: 100%;
}
.tableresult tr:hover {background-color: green;}



.imagem img{
	width: 100% ;
	height:400px;
	margin-top: 40px;
}








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
    <input type="checkbox" id="bt_menu">
<label for="bt_menu">&#9776;</label>
<nav class="cabeçalho">
	<ul>
		<a href="https://www.hemocentro.unicamp.br/noticias/ministerio-divulga-nota-tecnica-com-mudancas-para-doadores-relacionadas-ao-covid/">
			CRITERIOS PARA DOADORES - <span style="color:red;font-weight:bold">COVID-19</span></a> <br>
	 </ul>
 </nav>

<nav class="menu">
	<ul>
    	<li><a href="#">cadastro</a></li>
          <li><a href="#">Hemocentro</a>
        	<ul>
            	<li><a href="https://www.hemocentro.unicamp.br/">hemocentro Unicamp </a>
                <li><a href="https://www.boldrini.org.br/">hemocentro boldrini</a>
            </ul>
        </li>
        <li><a href="#">mais sites</a>
        	<ul class="submenu">
            	<li><a href="#">Doacoes</a>
                <li><a href="#">cultura</a>
            </ul>
        </li>
      
        <li><a href="cadastro.php">Doador</a></li>
    </ul>
 </nav>


<nav class="titulo">
    
 <h1  style="font-size:60px; font-family:Arial;" ><a style = "text-decoration:none;" href="index.php">HOMECE</a></h1>
 <ul>
	<li class="doacaosangue">Doação de sangue</li>
</ul>
<div class="imagem">
   <img src="https://www.hospitaldecruzilia.com.br/site/images/DOACAO%20DE%20SANGUE.jpg"></div>


 <div class="container">


	<form method="POST" action="addDoador.php" enctype="multipart/form-data">
	
	  <div class="row">
      <div class="col-25">
	    <label for="fname">Primeiro nome</label>
	  </div>
	  <div class="col-75">
        <input type="text"  name="nome" placeholder="seu Primeiro nome..">
		</div>	
	</div>


    <div class="row">
    <div class="col-25">
      <label for="lname">Sobre Nome</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="sobrenome" placeholder="seu sobre nome..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="lname">Email</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="email" placeholder="seu email..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="lname">Telefone</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="telefone" placeholder="seu Telefone..">
    </div>
  </div>



  <div>
  <div class="row">
   <div class="col-25">
       <label for="cidade">Cidade</label>
  </div>
        <div class="col-75">
        <select name="city" id="cidade">
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

  <div class="row">
    <div class="col-25">
      <label for="lname">bairro</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="bairro" placeholder="seu bairro..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="lname">Rua</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="rua" placeholder="sua Rua..">
    </div>
  </div>

  <div class="row">
    <input type="submit" value="Submit"  name="sub">
  </div>
  </form>
</div>


<table class= "tableresult" border='1'>
	
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
</table>

    <br><br>


  </form> 
  

	<h6></h6>
    
	<nav class="rodape">
		<ul>
			<li><a style="font-size: 15px; font-weight: bold;" href="#">HEMOCE.SP.GOV.BR</a></li>
			  <li class="sede" ><a style="font-size: 12px; font-weight: bold; font-family: Helvetica;" href="#">SEDE DO HEMOCE</a>
				<ul>
                    <p style="font-size: 12px; font-family:Helvetica; " >AV. JOSÉ BASTOS <br> 3390 - RODOLFO TEÓFILO <br>CAMPINAS, SP <br>CEP: 13386663 <br>CONTATO: (19) 98987-7077</p>
				</ul>
			</li>
			<li class="horarios" ><a style="font-size: 12px; font-weight: bold; font-family: Helvetica;" href="#">HORARIOS DE ATENDIMENTO</a>
				<ul class="subrodape">
					<p style="font-size: 12px; font-family:Helvetica; " >07H AS 18:30 DE SEGUNDA A SEXTA<br>07H AS 17:30 AOS SABADOS</p>
				</ul>
			</li>	
		  
			<li><a style="font-size: 12px; font-weight: bold; font-family: Helvetica;" href="#">NOSSOS CANAIS</a></li>
		</ul>
	 </nav>
 </nav> 
 


</body>
</html>