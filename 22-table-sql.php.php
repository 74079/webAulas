<?php 
/*
$Driver = "com.mysql.cj.jdbc.Driver";
$url ="jdbc:mysql://localhost:3306/agenda?&serverTimezone=UTC";
$user = "user";
$password= "199426";
$dbname = "5SI";


$conn = new ($Driver, $url, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (nomePessoa, emailPessoa, emailPessoa, idadePessoa)
VALUES ('lucas', 'henriquefagunde@gmail.com', '27')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

*/


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "5Si";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if(!$conn){
  die("Connection failed: " . $conn->connect_error);
}



$sql = "INSERT INTO(nomePessoa, emailPessoa, emailPessoa, idadePessoa)
VALUES ('lucas', 'henriquefagunde@gmail.com', '27')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


/*


$url = "localhost";
$user = "root";
$password = "";
$db = "5SI";

// Create connection
$conn = new mysqli($url, $user, $password, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO(nomePessoa, emailPessoa, emailPessoa, idadePessoa)
VALUES ('lucas', 'henriquefagunde@gmail.com', '27')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
*/




















?>