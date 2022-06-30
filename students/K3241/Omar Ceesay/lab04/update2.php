<!DOCTYPE html>
  <head>  
    <title>Enter id to display data - creating a simple web application</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
       li {list-style: none;}
    </style>
  </head>
  <body>
    <h2>Введите новые name:</h2>
    <ul>
     <form name="update2" action="update2.php" method="POST" >
      <li>middle_name:</li><li><input type="varchar" name="middle_name" /></li>
	  <li>id_post:</li><li><input type="varchar" name="id_post" /></li>
      <li><input type="submit" /></li>
     </form>
   </ul>
  </body>
</html>

<?php
$dbuser = 'postgres';
$dbpass = 'Oceesay34';
$host = 'localhost';
$dbname='ProjectDB';
$pdo = new PDO("pgsql:host=$host;dbname=$dbname", $dbuser, $dbpass);

$stmt = $pdo->query("UPDATE public.employee SET middle_name=('$_POST[middle_name]') WHERE id_post=('$_POST[id_post]')");
while ($row = $stmt->fetch())
{
  echo '<pre>';
  print_r($row);
}
echo 'Паспортные данные изменены!';
?>