<?php


require('lib/login.php');
require('lib/inv_query.php');


?>


<html lang="en">

	<head>
		<title>
			Order Summary
		</title>
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div id = "product_container">
			<h1> Thank you for your Order!</h1>
			<table>
				<tr>
					<th> Item </th>
					<th> Quantity </th>
					<th> Price </th>
					<th> Item Subtotal </th>
				<tr>
		
<?php


	$row2 = $rowsrec[0];
	$q1 = $row2["product1_quantity"];
	$q2 = $row2["product2_quantity"];
	$q3 = $row2["product3_quantity"];
	$stack = array($q1, $q2, $q3);
	$subtotal = array();

	for($i = 0; $i < count($rowsp); $i++)
	{
		$row = $rowsp[$i];

		if($stack[$i] > 0)
		{

		$item = $row["item_name"];
		$price = $row["price"];
		echo "<tr>";
		echo "<td>$item</td>";		
		echo "<td>".$stack[$i]."</td>";		
		echo "<td>$".$price."</td>";
		$item_subtotal = $stack[$i]*$price;
		$item_subtotal = sprintf("%.2f",$item_subtotal);
		echo "<td>$$item_subtotal</td>";		
		echo "</tr>";
		}
		array_push($subtotal, $item_subtotal);

	}

?>

			
		<tr>
			<td><a href = "../shopping_cart">HOME</a></td>
			<td><a href = "../shopping_cart">CONTINUE SHOPPING</a></td>
			<td><a href = "viewcart.php">VIEW CART</a></td>
			<!-- <td><a href="mailto:fake_email@nospam.com">CONTACT</a></td> -->
		<tr>
		</table>
<?php
	$arraysum = $subtotal[0] + $subtotal[1] + $subtotal[2];
	$arraysum = sprintf("%.2f",$arraysum);
	$tax = $arraysum * .07;
	$tax = sprintf("%.2f",$tax);
?>	

<?php	
	print "<div style = 'text-align:right; padding: 25px;'>";
	print "<b>Subtotal</b>: $$arraysum";
	print "<br><b>Tax</b>: $$tax";
	$total = $tax + $arraysum;
	$total = sprintf("%.2f",$total);

	print "<br><b>Total</b>: $$total";
	print "</div>";




?>

		</div>
	</body>
</html>