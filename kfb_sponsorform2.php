<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<title>Kent Food Bank</title>
		<meta name="description" content="The Project a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
	

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		

		<!-- Font Awesome CSS -->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Fontello CSS -->
		<link href="fonts/fontello/css/fontello.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="css/animations.css" rel="stylesheet">
		<link href="plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
		<link href="plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
		<link href="plugins/hover/hover-min.css" rel="stylesheet">		

		<!-- the project core CSS file -->
		<link href="css/style.css" rel="stylesheet" >

		<!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
		<link href="css/skins/light_blue.css" rel="stylesheet">

		<!-- Custom css --> 
		<link href="css/custom.css" rel="stylesheet">
		<link href='kfb_sytle.css' rel='stylesheet'>

	<link rel = "stylesheet" type="text/css" href="kfb_style.css">
	<link rel = "stylesheet" type="text/css" href="kfb_vbg.css">
		<link rel = "stylesheet" type="text/css" href="neal.css">
		<link rel = "stylesheet" type="text/css" href="kandis.css">
		  

	</head>

	<!-- body classes:  -->
	<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
	<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
	<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
	<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
	
	

		
<body class="no-trans   ">
	<?php
	//See if the form has been submitted
   if (isset($_POST['submit']))
   {
	    echo "test";
         
		//Create a boolean flag to track validation errors
		$isValid = true;

		//Check first name
		if (validName($_POST['fname']))
		{
		    $fname = $_POST['fname'];
		} else {
		    print "<p>Invalid first name.</p>";
		    $isValid = false;
		}

		//Check last name
		
		//Create a boolean flag to track validation errors
		$isValid = true;

		//Check last name
		if (validName($_POST['lname'])) {
		    $lname = $_POST['lname'];
		} else {
		    print "<p>Invalid last name.</p>";
		    $isValid = false;
		}
		
		//checks for organization input.
		if (validName($_POST['organization'])) {
		    $lname = $_POST['organization'];
		} else {
		    print "<p>Please enter organization.</p>";
		    $isValid = false;
		}
		
		//checks phone number.
		if (validName($_POST['phone'])) {
		    $phone = $_POST['phone'];
		} else {
		    print "<p>Please enter phone number.</p>";
		    $isValid = false;
		}
		
		//checks email.
		if (validName($_POST['email'])) {
		    $email = $_POST['email'];
		}
		else
		{
		    print "<p>Please enter organization.</p>";
		    $isValid = false;
		}
		
	
		// checks gold sponsorship level 
		$gold = "";
		if (isset($_POST['gold']) AND validMethod($_POST['gold']))
		{
		    $gold = $_POST['gold'];
		}
		else
		{
		    print "<p>Please select an option .</p>";
		    $isValid = false;                
		}
		
		//checks for silver sponsorship level.
		$silver = "";
		if (isset($_POST['silver']) AND validMethod($_POST['silver']))
		{
		    $silver = $_POST['silver'];
		}
		else
		{
		    print "<p>Please select an option .</p>";
		    $isValid = false;                
		}
		
		//checks for bronze sponsorship level.
		$bronze = "";
		if (isset($_POST['bronze']) AND validMethod($_POST['bronze']))
		{
		    $bronze = $_POST['bronze '];
		}
		else
		{
		    print "<p>Please select an option .</p>";
		    $isValid = false;                
		}
	
		//Display summary
		if ($isValid)
		{
		    print "Thank you , $fname $lname";
		  
		}
		    //Display address if method is delivery
		    /* if ($method == "delivery")
			{
				print "<p>Address:$address </p>";
		    }

		    //Display toppings if selected
		    if ($toppingCount > 0)
			{
				print "<p>Toppings: " . implode(", ", $toppings) . "</p>";
				print "<p>Topping count: $toppingCount</p>";
		    }
			
			//display crust
			if($crust == "thin" OR $crust == "thick" OR $crust == "wheat" OR "$crust == Gluten-free")
			{
				print"<p>Crust: $crust</p>";
			}
			//display crust
			if($size== "small" OR $size == "medium" OR $size == "large")
			{
				print"<p>Size: $size</p>";
			}


		    //We're done! Terminate the script.
		    return;
		}
	}
	
	end of check for form submission
	*/
   }
	?>

    <div class="container">
      <div class="row">
        <div class ="kfb_form">
    
  <!--- form content starts below this line ---->
  
  
				<form method="post" action="">
					<h1 align="center">kent food bank and Emergency Services </h1>
				<fieldset>
					
						<h2 align="center">Sponsorship Form</h2>
						
						<fieldset>
						<legend>Gold</legend>
							<h5>$3,000 or $250 per month for a year</h5>
							<ul id="gold">
								<li>Logo and name recognition on printed materials</li>
								<li>Logo and name recognition in annual report</li>
								<li>Logo and name recognition on our Facebook page</li>
								<li>Verbal recognition day of event </li>
								<li>Verbal recognition day of event </li>
								<li>Certificate of Appreciation </li>   
							</ul>
							<input type="radio" name="gold" value="year"> One time payement of 3,000<br>
							<input type="radio" name="gold" value="month">$250 per month <br>
						</fieldset><br>
						
						
						<fieldset>
							<legend>Silver</legend>
							<h5>$1,500 or $125 per month for a year</h5>
							<ul id="silver">
								<li>Logo and name recognition on printed materials</li>
								<li>Name recogntion in annual report</li>
								<li>Logo and name recognition on our Facebook page</li>
								<li>Verbal recognition day of event</li>
								<li>Each table of Honor guest will receive 3 raffle tickets</li>  
							</ul>
							<input type="radio" name="silver" value="year"> One time payment of 1,500<br>
							<input type="radio" name="silver" value="month">$125 per month <br>
						</fieldset><br>
						
						
						<fieldset>
							<legend>Bronze</legend>
							<h5>$1,000 or $85 per month for a year </h5>
							<ul id="silver">
								<li>Name recognition on printed materials </li>
								<li>Name recogntion in annual report</li>
								<li>Name recognition on our Facebook page</li>
								<li>Verbal recognition day of event</li>
								<li>Table of Honor at event</li>  
							</ul>
							<input type="radio" name="bronze" value="year"> One time payment of 1,000 <br>
							<input type="radio" name="bronze" value="month">$85 per month <br>
				
						</fieldset><br>
					<fieldset>
						<legend>Contact Information</legend><br>
						First&nbsp;<br><input type="text" size="20" maxlength="100" name="fname" id="fname">&nbsp <br><br>
						Last&nbsp;<br><input type="text" size="20" maxlength="100" name="lname" id="lname">&nbsp <br><br>	
						Business/Organiztion&nbsp;<br><input type="text" size="20" maxlength="100" name="organization" id="organization"><br><br>
						Phone&nbsp;<br><input type="text" size="20" maxlength="20" name="phone" id="phone"><br><br>
						Email&nbsp;<br><input type="text" size="20" maxlength="100" name="email" id="email"><br><br>
						
				
						<p><input type="submit" id="submit" name="submit" value="Submit" /></p>
					</fieldset>
				</fieldset>
					
				
				</form>
      
  <!--- form content ends above this line ---->
                                      
 
      </div> 
    </div> <!-- row end --> 
  </div> <!-- container end -->
</body>
</html>