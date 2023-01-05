<?php

$conn = "";

try {
	$servername = "localhost";
	$dbname = "internship";                         //add database ka name idhar jo rakha ho
	$username = "root";
	$password = "";

	$conn = new PDO(
		"mysql:host=$servername; dbname=internship",  //and idhar as well and password b enter karna hai 
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>

