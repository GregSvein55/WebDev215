<?php
	//TODO: Create a connection to your database using a mysqli object
	// - notice we are using object oriented style
	// - see example 1 here: https://www.php.net/manual/en/mysqli.construct.php
	// - see also lab 11: https://www.cs.uregina.ca/Links/class-info/215/php_mysql/index.html#dbconnection
	$db = new mysqli("localhost", "gds412", "Iamgreg5", "gds412");
	
	if ($db -> connect_error) {
	   die ("Connection failed: " . $db -> connect_error);
	}

	$q = $_GET['q'];
	//TODO: query the User table... 
	// - Use object oriented style: https://www.php.net/manual/en/mysqli.query.php
	// - Be sure to select only fields you need.
	// - filter your results using 'q' value sent in the request
	$q1 = "SELECT email, password, DOB FROM User Where email = '". $q ."'";

	$r1 = $db->query($q1);

	//OPTIONAL TODO: if the query did not work, perhaps echo an error message
	// - the sample Javascript is built to handle this by printing it anything that is not JSON encoded
	// - warning: users are not always happy to see error messages...


	//TODO: if the query worked, loop through the results and add each row to an array (do not print or echo them yet)
	// - Use object oriented style!
	// - request rows such that we get an associative array with field names, not index numbers
	//   see mysqli_fetch_assoc for more: https://www.php.net/manual/en/mysqli-result.fetch-assoc.php
	// - appending to PHP arrays: 
	//    - https://www.php.net/manual/en/language.types.array.php#language.types.array.syntax.modifying
	//    - https://www.php.net/manual/en/function.array-push.php
	// - HINT: when reading www.php.net, check the User Contributed Notes too...
	
	$row = $r1->fetch_assoc()

	while ($row == true) {
		$a[] = $row["email"];
		$a[] = $row["password"];
		$a[] = $row["DOB"];
	}

	
	//TODO: after creating a query results array, encode it as JSON and echo it as the message
	// - encoding as JSON from PHP: https://www.php.net/manual/en/function.json-encode.php

	echo json_encode($a);

	$db->close();
?>