<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('lib/login.php');
require('lib/db_query.php');

	$a = 0;
  	$stmt = $conn->prepare('update transaction_0958976 set product1_quantity = ?, product2_quantity = ?, product3_quantity = ?');
	$stmt->bind_param('ddd',$a,$a,$a);
	$stmt->execute();
	
	header("Location:viewcart.php"); //redirect 


?>