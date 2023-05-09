<?php
	try {
		$dbhost = 'localhost';
		$dbname='gfg';
		$dbuser = 'root';
		$dbpass = '';
		$connect = new PDO(
"mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
	}
catch (PDOException $e) {
		echo "Error : " . $e->getMessage() . "<br/>";
		die();
	}
	$count = $connect->exec("DELETE FROM employee WHERE emp_id = 123 ");
	echo("Number of rows to be deleted from the employee table is: ". $count);
?>
