<?php

require('lib/login.php');
require('lib/db_query.php');

?>

<html lang="en">

	<head>
		<title>
			Shopping Cart
		</title>
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div id = "product_container">
			<h1> Our Selection </h1>
			<table>
		
<?php
	for($i = 0; $i < count($rowsrec); $i++)
	{
		$row = $rowsrec[$i];
		$item = $row["item_name"];
		$price = $row["price"];
		$url = $row["image_file"];
		echo "<tr>";
		echo "<td><img alt = $item photo src = img/$url></img></td>";		
		echo "<td>".$item."<br><a href = 'addtocart?item_name=$item'>Add to Cart</a></td>";		
		echo "<td>$".$price."</td>";		
		echo "</tr>";

	}

?>

			
		<tr>
			<td><a href = "..">HOME</a></td>
			<td><a href = "viewcart.php">VIEW CART</a></td>
			<td><a href="mailto:fake_email@nospam.com">CONTACT</a></td>
		<tr>
		</table>
		</div>
	</body>
</html>