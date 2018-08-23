<script language="JavaScript" type="text/javascript">
<!--
		function myFunction() {
    var name,email,experience;
	var regx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    name = document.getElementById("name").value;
    email = document.getElementById("Email").value;
    experience = document.getElementById("Experience").value;
	if (name == "" && email=="" && experience=="") {
        alert("Fill out all the fields");
        return false;
    }
     if (name == "") {
        alert("Name must be filled out");
        return false;
    }
	if (email == "") {
        alert("Email must be filled out");
        return false;
    }
	 if (!regx.test(email)) {
        alert("Invalid Email");
        return false;
    }
	if (experience == "") {
        alert("Experience must be filled out");
        return false;
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
					<div id="brownelement"></div>
			<h2 id="tosetmarginpadding"> 
			Jobs at JavaJam
			</h2>
		
		<p>
			Want to work at JavaJam? Fill out the form below to start your application. Required fields are marked with an asterik(*).
		</p>
    <?php 
    if($this->uri->segment(2)=="inserted"){
                  echo'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
                  echo'<span style="color:red">Application Submitted Successfully</span>';
                }
    ?>

		<?php
		echo '<div id="jobform">';
			
			  
        
        echo form_open('job_controller/job_post');

			
			 $data_name = array(
                          'name' => 'name',
                          'id' => 'name',
                          'class' => 'input',
                          'placeholder' => 'Full Name'
                          
                       );  

                       echo '<label for="name"> * Name:</label>'; echo form_input($data_name);  
                       echo "<div style = 'color:red'>".form_error('name')."</div>";

            $data_email = array(
                        'name' => 'email',
                        'id' => 'email',
                        'class' => 'input', 
                        'placeholder' => 'Email'
                    );

                    echo '<label for="E-Mail"> * E-mail:</label>';echo form_input($data_email);
                    echo "<div style = 'color:red'>".form_error('email')."</div>";     

            $data_experience = array(
                        'name' => 'experience',
                        'id' => 'experience',
                        'class' => 'input', 
                        'placeholder' => 'Experience'
                    );

                    echo '<label for="Experience"> * Experience:</label>';echo form_input($data_experience);
                    echo "<div style = 'color:red'>".form_error('experience')."</div>";      
                       

      
			
			
			echo'<div id="jobbutton">'; echo'<div id="applybutton">'; echo form_submit('submit', 'Apply Now'); echo'</div>'; echo'</div>'; 
      echo form_close();
 ?>
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