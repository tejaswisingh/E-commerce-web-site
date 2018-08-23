<script language="JavaScript" type="text/javascript">
<!--
function myedit(myform) {
if (!myform.Name.value) {
    alert("Please enter your name")
    myform.Name.focus()
    return false
   } 
if (!myform.Email.value) {
    alert("Please enter your Email Address")
    myform.Email.focus()
    return false
   } 
if (!myform.Address.value) {
    alert("Please enter your Street Address")
    myform.Address.focus()
    return false
   } 
if (!myform.City.value) {
    alert("Please enter your City")
    myform.City.focus()
    return false
   } 
if (!myform.State.value) {
    alert("Please enter your State Abbreviation")
    myform.State.focus()
    return false
   } 
if (!myform.Zip.value) {
     alert("Please enter a numeric Zip Code")
     myform.Zip.focus()
     return false
   } 
   else {
        if (isNaN(myform.Zip.value)) {
            alert("Please enter a numeric Zip Code")
            myform.Zip.focus()
            return false
         }     
}      
if (!myform.CreditCard.value) {
    alert("Please enter a Credit Card Number")
    myform.CreditCard.focus()
    return false
   } 
 
if (!myform.ExpMonth.value) {
     alert("Please enter the Expiration Month")
     myform.ExpMonth.focus()
     return false
  } 
else {
      if (isNaN(myform.ExpMonth.value)) {
         alert("Please enter a numeric month")
         myform.ExpMonth.focus()
         return false
      }     
}      
if (!myform.ExpYear.value) {
     alert("Please enter the Expiration Year")
     myform.ExpYear.focus()
     return false
     }
else {
      if (isNaN(myform.ExpYear.value)) {
         alert("Please enter a numeric year")
         myform.ExpYear.focus()
         return false
      }     
}
document.myform.submit()
}
// -->
</script>   
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
?>

				
	
    		<br><br>
            <div id="filldetails">
<?php 
    if($this->uri->segment(2)=="inserted"){
                 echo'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
                  echo'<span style="color:red">Order Placed Successfully</span>';
                }
    ?>
    </div>
   
            <br><br>
				<div id="filldetails">
				<h3> Fill Details: </h3>
				</div>

				<div id="orderform">
				<br><br>
				<?php 
				echo form_open('gear_controller/save_order');

			
			 $data_name = array(
                          'name' => 'name',
                          'id' => 'name',
                          'class' => 'input',
                          'placeholder' => 'Name'
                          
                       );  

                       echo '<label for="name"> * Name:</label>'; echo form_input($data_name);  
                       echo "<div style = 'color:red'>".form_error('name')."</div>";
                       echo'<br>';
                       

                     $data_emailhidden = array(
                        'name' => 'emailhidden',
                        'id' => 'emailhidden',
                        'class' => 'input', 
                        'placeholder' => 'emailhidden',
                        'type' => 'hidden'
                    );

                    echo '<label for="emailhidden">.</label>'; echo form_input($data_emailhidden);
                    
                    echo'<br>'; 


            $data_email = array(
                        'name' => 'email',
                        'id' => 'email',
                        'class' => 'input', 
                        'placeholder' => 'Email'
                    );

                    echo '<label for="EMail"> * E-mail:</label>'; echo form_input($data_email);
                    echo "<div style = 'color:red'>".form_error('email')."</div>";     
                    echo'<br>';

            $data_address = array(
                        'name' => 'address',
                        'id' => 'address',
                        'class' => 'input', 
                        'placeholder' => 'Address'
                    );

                    echo '<label for="Address"> * Address:</label>';echo form_input($data_address);
                    echo "<div style = 'color:red'>".form_error('address')."</div>";  
                    echo'<br>';
             $data_city = array(
                        'name' => 'city',
                        'id' => 'city',
                        'class' => 'input', 
                        'placeholder' => 'City'
                    );

                    echo '<label for="City"> * City:</label>';echo form_input($data_city);
                    echo "<div style = 'color:red'>".form_error('city')."</div>";
                    echo'<br>';
              $data_state = array(
                        'name' => 'state',
                        'id' => 'state',
                        'class' => 'input', 
                        'placeholder' => 'State'
                    );

                    echo '<label for="State"> * State:</label>';echo form_input($data_state);
                    echo "<div style = 'color:red'>".form_error('state')."</div>";
                    echo'<br>';
               $data_zip = array(
                        'name' => 'zip',
                        'id' => 'zip',
                        'class' => 'input', 
                        'placeholder' => 'Zip'
                    );

                    echo '<label for="Zip"> * Zip:</label>';echo form_input($data_zip);
                    echo "<div style = 'color:red'>".form_error('zip')."</div>";
                    echo'<br>';
               $data_creditcard = array(
                        'name' => 'creditcard',
                        'id' => 'creditcard',
                        'class' => 'input', 
                        'placeholder' => 'CreditCard'
                    );

                    echo '<label for="creditcard"> * CreditCard:</label>';echo form_input($data_creditcard);
                    echo "<div style = 'color:red'>".form_error('creditcard')."</div>";
                    echo'<br>';
               $data_expmonth = array(
                        'name' => 'expmonth',
                        'id' => 'expmonth',
                        'class' => 'input', 
                        'placeholder' => 'Exp-Month'
                    );

                    echo '<label for="Exp-Month"> * Exp-Month:</label>';echo form_input($data_expmonth);
                    echo "<div style = 'color:red'>".form_error('expmonth')."</div>"; 
                    echo'<br>';   
                       
                $data_expyear = array(
                        'name' => 'expyear',
                        'id' => 'expyear',
                        'class' => 'input', 
                        'placeholder' => 'Exp-Year'
                    );

                    echo '<label for="Exp-Year"> * Exp-Year:</label>';echo form_input($data_expyear);
                    echo "<div style = 'color:red'>".form_error('expyear')."</div>"; 
                    echo'<br>'; 

      
			
			
			  echo form_submit('submit', 'Order Now'); 
      		echo form_close(); ?>
				
				</div>
				
				
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