<?php

$conn = new mysqli($servername, $username, $password, $dbname);

$sqlr = "select item_name, price, image_file from inventory";
$resultrec = $conn->query($sqlr);
$rowsrec = array();

	while($row = mysqli_fetch_assoc($resultrec))
	{
  	array_push($rowsrec, $row);
	}

	for($i = 0; $i < count($rowsrec); $i++)
	{
		$row = $rowsrec[$i];
	}


?>