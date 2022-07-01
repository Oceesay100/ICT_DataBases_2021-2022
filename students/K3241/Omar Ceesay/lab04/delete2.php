<!DOCTYPE html>
  <head>  
    <title>Enter id to display data - creating a simple web application</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
       li {list-style: none;}
    </style>
  </head>
  <body>
    <h2>Введите middle name:</h2>
    <ul>
     <form name="delete2" action="delete2.php" method="POST" >
      <li>middle name:</li><li><input type="integer" name="middle_name" /></li>
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

$stmt = $pdo->query("DELETE FROM public.employee WHERE middle_name = '$_POST[middle_name]'");
while ($row = $stmt->fetch())
{
  echo '<pre>';
  print_r($row);
}

if (!$stmt){
	echo "ОШИБКА: Name НЕ СУЩЕСТВУЕТ!";
} else { 
	echo "Сотрудник middle_name удалён.";
}
?>