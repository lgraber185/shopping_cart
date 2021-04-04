<?php

$conn = new mysqli($servername, $username, $password, $dbname);

$sqlr = "select t.trans_num, t.product1_quantity, t.product2_quantity, t.product3_quantity from transaction_0958976 t";
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


$sqlp = "select item_name, price from inventory";
$resultp = $conn->query($sqlp);
$rowsp = array();

	while($row = mysqli_fetch_assoc($resultp))
	{
  	array_push($rowsp, $row);
	}

	for($i = 0; $i < count($rowsp); $i++)
	{
		$row = $rowsp[$i];
	}



?>
