<html>
<body>
<?
  include "mysqlconecta.php";
  // Conecta ao banco de dados
  include "mysqlexecuta.php";
  // Executa a cláusula SQL

  //Executa a consulta
  $sql = "SELECT * FROM calendario";
  $res = mysqlexecuta($id,$sql);
?>

<table width=100% cellpading=0 cellspacing=0>
<?
   //Exibe as linhas encontradas na consulta
   while ($row = mysql_fetch_array($res)) {
?>
  <tr>
     <td><?echo $row[‘id’];?></td>
     <td><?echo $row[‘titulo’];?></td>
     <td><?echo $row[‘dataInicio’];?></td>
     <td><?echo $row[‘dataFim’];?></td>
     <td><?echo $row[‘diaTodo’];?></td>
  </tr>
<?
 }
?>
</table>
</body>
</html>
