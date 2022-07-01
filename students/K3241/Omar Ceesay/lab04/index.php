<?php
	$dbuser = 'postgres'; 
	$dbpass = 'Oceesay34'; 
	$host = 'localhost'; 
	$dbname='ProjectDB';
	$pdo = new PDO("pgsql:host=$host;dbname=$dbname", $dbuser, $dbpass);	
	$stmt = $pdo->query('SELECT id_post FROM employee');
	while ($row = $stmt->fetch())
	{
		echo $row['id_post'] . "<br />";
	}
?> 

 