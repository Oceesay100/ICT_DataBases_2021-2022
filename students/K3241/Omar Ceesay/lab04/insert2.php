<!DOCTYPE html>
   <head>
<title>Insert data to PostgreSQL with php - creating a simple web application</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
li {list-style: none;}
</style>
   </head>
   <body>
<h2>Введите данные сотрудника:</h2>
<ul>
  <form name="insert2" action="insert2.php" method="POST" >
<li>Person_number:</li><li><input type="integer" name="person_number" /></li>
<li>Lastname:</li><li><input type="varchar" name="last_name" /></li>
<li>name:</li><li><input type="varchar" name="name" /></li>
<li>Middle_name:</li><li><input type="varchar" name="middle_name" /></li>
<li>Id_division:</li><li><input type="integer" name="id_division" /></li>
<li>Id_post:</li><li><input type="integer" name="id_post" /></li>
<li>salary:</li><li><input type="integer" name="salary" /></li>
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

	$stmt = $pdo->query("INSERT INTO public.employee VALUES ('$_POST[person_number]', '$_POST[last_name]', 
	'$_POST[name]', '$_POST[middle_name]', '$_POST[id_division]', '$_POST[id_post]', '$_POST[salary]')"); 

	while ($row = $stmt->fetch())
	{
		echo '<pre>';
		print_r($row);
	}
	echo 'Сотрудник успешно добавлен!';



?>
