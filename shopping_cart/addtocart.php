<?php

	require 'lib/login.php';
	require 'lib/inv_query.php';
	$i = $_GET['item_name'];

	print "<br> Item: $i<br>";

	$row = $rowsrec[0];
	$pr1_qty = $row["product1_quantity"];
	$pr2_qty = $row["product2_quantity"];
	$pr3_qty = $row["product3_quantity"];

	//update inventory for item
	if($i == "Fish"){
	print "old qty is $pr1_qty";
	$pr1_qty++;
	print "new qty is $pr1_qty";
	$stmt = $conn->prepare('update transaction_0958976 set product1_quantity = ?');
	$stmt->bind_param("d", $pr1_qty);
	$stmt->execute();
	}
	if($i == "Ram"){
	$pr2_qty++;
	$stmt = $conn->prepare('update transaction_0958976 set product2_quantity = ?');
	$stmt->bind_param("d", $pr2_qty);
	$stmt->execute();
	}
	if($i == "Spiderman"){
	$pr3_qty++;
	$stmt = $conn->prepare('update transaction_0958976 set product3_quantity = ?');
	$stmt->bind_param("d", $pr3_qty);
	$stmt->execute();
	}
	header("Location:../shopping_cart"); //redirect 






?>