<?php
$dbname="complexoDataBase";
$usuario="root";
$password="root";
if(!($id = mysqli_connect("localhost", $usuario, $password))){
  echo "2 - Não foi possível estabelecer uma conexão com o gerenciador MYSQL. Favor contatar o Administrador.";
  exit;
}else{
  echo "entrou 2";
}
if(!($con = mysql_select_db($dbname, $id))){
  echo "1 - Não foi possível estabelecer uma conexão com o gerenciador MYSQL. Favor contantar o Administrador.";
  exit;
}else {
  echo "entrou 1";
}
?>
