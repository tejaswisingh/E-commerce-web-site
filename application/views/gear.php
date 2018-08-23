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
				<div id="gearimage"></div>
			<h2 id="tosetmarginpadding"> 
			JavaJam Gear
			</h2>
		
		
	<p>JavaJam gear not only looks good, it's good to your wallet, too.</p>
	<p>Get a 10% discount when you wear a JavaJam shirt or bring in your JavaJam mug.</p>
	
<?php 
foreach ($result as $product):
$id = $product['ProductId'];
$name = $product['Name'];
$description = $product['Description'];
$price = $product['Price'];

?>

<img class="floatleft" height="200" width="186" src="<?php echo base_url() . $product['Product_Image_URL'] ?>">
	<p><?php echo $name; ?> <?php echo $description; ?> $<?php echo $price; ?></p>
	
	<?php
// Create form and send values in 'shopping/add' function.
echo form_open('gear_controller/add');
echo form_hidden('id', $id);
echo form_hidden('name', $name);
echo form_hidden('price', $price);
?>
<?php
$btn = array(
'value' => 'Add to Cart',
'name' => 'action'
);

// Submit Button.
echo form_submit($btn);
echo form_close();
?>
	<br class="clearleft">
	<br><br><br><br><br><br><br><br>
	

<?php endforeach; ?>

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
