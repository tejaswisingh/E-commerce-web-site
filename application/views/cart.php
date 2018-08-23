 <!DOCTYPE html>
	<html>
	<head lang="en">
		<meta charset="UTF-8">
		<title>Coffee Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/javacofee.css">
	</head>
	<body>
		<div id="wrapper">
			<div id="content">
				<div id="leftlayout">
			

				<nav>
					<ul>
						<li><a href="<?php echo base_url(); ?>">Home</a></li>
						<li><a href="<?php echo base_url(); ?>pages/menu">Menu</a></li>
						<li><a href="<?php echo base_url(); ?>music_controller">Music</a></li>
						<li><a href="<?php echo base_url(); ?>pages/jobs">Jobs</a></li>
						<li><a href="<?php echo base_url(); ?>gear_controller">Gears</a></li>
						<li><a href="<?php echo base_url(); ?>gear_controller/add">Cart</a></li>
						<li><a href="<?php echo base_url(); ?>gear_controller/displayOrder">Order</a></li>
					</ul>
				</nav>
				
				</div>
 <div id="rightlayout">
					<header>
						<h1>JavaJam Coffee House</h1> 
					</header>

<?php 
	$cart_check = $this->cart->contents();
	$grand_total = 0;
// If cart is empty, this will show below message.
if(empty($cart_check)) {
echo'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
echo 'To add products to your shopping cart click on "Add to Cart" Button';
}

	echo '<div align="center">';
	echo '<h2>Shopping Cart</h2>';
	echo '<table border="0" cellspacing="0"><tr><th>Name</th><th>Quantity</th><th>Price</th></tr>';
// All values of cart store in "$cart".
	foreach ($cart_check as $item){
		echo "<tr><td>" ;
		echo $item['name'];
		echo "</td><td align='center'>";
		echo $item['qty'];
		echo "</td><td>$";
		echo $item['price'];
		echo "</td></tr>";
		$grand_total = $grand_total + ($item['qty'] * $item['price']);				
	}
	echo'<tr><td>&nbsp;</td><td><strong>Total</strong></td><td>$';
	echo $grand_total;
	echo'</td></tr></table>';
	echo "</div>";	
	echo form_open('gear_controller/displayOrder');
	$btn = array(
	'value' => 'Place Order',
	'name' => 'action'
	);

// Submit Button.
	echo'<br><br><br><br>';
echo '<div align="center">';	
echo form_submit($btn);
echo '</div>';
echo form_close();
?>

<div align="center">
<input type="button" value="Continue Shopping" onclick="javascript:history.go(-1)" />
</div>
					
						
						<!-- <tr><td><?php echo $name; ?></td><td align='center'><?php echo $qty; ?></td><td><?php echo $price; ?></td></tr> -->
						
						
					<!-- 	<tr><td>&nbsp;</td><td><strong>Total</strong></td><td></td></tr></table> -->
						
						<!--<form method="post" action="placeyourorder.php">
					<div id="placeorderutton"><input type="submit" value="Place Order" /></div> <div id="continueshoppingbutton"><input type="button" value="Continue Shopping" onclick="javascript:history.go(-1)" /></div>
					</form> -->
					

					
				</div>
</div>
				<footer>
				Copyright &copy 2018 JavaJam Coffee House
				<br>
				<a href="mailto:tejaswi@singh.com">tejaswi@singh.com</a>
				</footer>
		</div>
		
	</body>
	</html>
