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
			<div id="musicimage"></div>
			<h2> Music at JavaJam </h2>

			<p>
				The first Friday night each month at JavaJam is a special night. 
				Join us from 8 pm to 11 pm for some music you won't want to miss!
			</p>
<?php 
$month="";
foreach ($result as $product){
$description = $product['Description'];
$image = $product['Musician_Image_URL'];


if($month== $product['MonthYear']) { 
	


				echo'<div class="artistdetails">';
					echo"<a>";
					echo"<img src=".$image." class='floatleft'>";
					echo"</a>";
				 echo $description;
					$month = $product['MonthYear'];
			

				echo'</div>';
			}
			
		else { 
				$month = $product['MonthYear'];
				echo"<h4>".$month."</h4>";
				echo'<div class="artistdetails">';
					echo"<a>";
					echo"<img src=".$image." class='floatleft'>";
					echo"</a>";
				 echo $description;
					

				echo'</div>';
			 }    
			 	
 } 
 ?>

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
