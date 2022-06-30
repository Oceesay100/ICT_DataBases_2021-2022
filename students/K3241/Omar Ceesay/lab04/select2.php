<!DOCTYPE html>
  <head>  
    <title>Enter id to display data - creating a simple web application</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
       li {list-style: none;}
    </style>
  </head>
  <body>
    <h2>Введите info about employee:</h2>
    <ul>
     <form name="select2" action="select2.php" method="POST" >
      <li>id_post:</li><li><input type="integer" name="id_post" /></li>
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

$stmt = $pdo->query("SELECT * FROM public.employee WHERE salary = '$_POST[salary]' and id_post = '$_POST[id_post]'");
while ($row = $stmt->fetch())
{
echo 'person_number: '.$row['person_number']."<br />";
echo 'last_name: '.$row['last_name']."<br />";
echo 'name: '.$row['name']."<br />";
echo 'middle_name: '.$row['middle_name']."<br />";
echo 'id_division: '.$row['id_division']."<br />";
echo 'id_post: '.$row['id_post']."<br />";
echo 'salary: '.$row['salary']."<br />";
}

?>