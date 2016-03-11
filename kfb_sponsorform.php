<?php
$errors = [];
$missing = [];
if (isset($_POST['send'])) {
    $expected = ['name','organization','phone', 'email','sponsorship','option'];
    $required = ['name', 'phone','email','sponsorship','option'];
    $to =  '<tostrander@greenriver.edu >';
    $subject = 'Feedback from online form';
    $headers = [];
    $headers[] = 'From: webmaster@example.com';
    $headers[] = 'Cc: another@example.com';
    $headers[] = 'Content-type: text/plain; charset=utf-8';
    $authorized = '-fdavid@example.com';
    require 'kfb_sponsorsprocessmail.php';
    if ($mailSent) {
        header('Location: kfb_processthanks.php');
        exit;
    }
}     
?>
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
		
		<!-- kfb_sponsorstyle.css -->
		<link rel="stylesheet" type="text/css" href="kfb_sponsorshipstyle.css">


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



    <div class="container">
      <div class="row">
        <div class ="kfb_form">
		
		<?php if ($_POST && ($suspect || isset($errors['mailfail']))) : ?>
		<p class="warning">Sorry, your mail couldn't be sent.</p>
		<?php elseif ($errors || $missing) : ?>
		<p class="warning">Please fix the item(s) indicated</p>
		<?php endif; ?>
    
  <!--- form content starts below this line ---->
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<h1 align="center">Sponsorship Form</h1>
					<fieldset>
							<fieldset>
							<legend>Gold Level</legend>
							<h5></h5>
								<ul id="gold">
									<li>Logo and name recognition on printed materials</li>
									<li>Logo and name recognition in annual report</li>
									<li>Logo and name recognition on our Facebook page</li>
									<li>Verbal recognition day of event </li>
									<li>Verbal recognition day of event </li>
									<li>Certificate of Appreciation </li>   
								</ul>
									
							</fieldset><br>
							
							
							<fieldset>
								<legend>Silver Level</legend>
								<ul id="silver">
									<li>Logo and name recognition on printed materials</li>
									<li>Name recogntion in annual report</li>
									<li>Logo and name recognition on our Facebook page</li>
									<li>Verbal recognition day of event</li>
									<li>Each table of Honor guest will receive 3 raffle tickets</li>  
								</ul>
								
							</fieldset><br>
							
							
							<fieldset>
								<legend>Bronze Level</legend>
								<ul id="silver">
									<li>Name recognition on printed materials </li>
									<li>Name recogntion in annual report</li>
									<li>Name recognition on our Facebook page</li>
									<li>Verbal recognition day of event</li>
									<li>Table of Honor at event</li>  
								</ul>
								
					
							</fieldset><br>
							
						<fieldset>
							<legend>Contact Information</legend>
							 <p>
								<label for="name">Name:
								   <?php if ($missing && in_array('name', $missing)) : ?>
									   <span class="warning">Please enter your name</span>
								  <?php endif; ?>
								  </label><br>
								  <input type="text" name="name" id="name"
										<?php
										if ($errors || $missing) {
											echo 'value="' . htmlentities($name) . '"';
										}
										?>
										>
							</p>
								
							   <p>
								 <label for="organization">Business/Organization:
									 <?php if ($missing && in_array('organization', $missing)) : ?>
										<span class="warning">Please enter your name</span>
									 <?php endif; ?>
								  </label><br>
								  <input type="text" name="organization" id="organization"
									  <?php
									  if ($errors || $missing) {
										  echo 'value="' . htmlentities($organization) . '"';
									  }
									  ?>
									  >
								</p>
								
								
								<p>
								  <label for="phone">Phone:
									  <?php if ($missing && in_array('phone', $missing)) : ?>
										  <span class="warning">Please enter your phone</span>
									  <?php elseif (isset($errors['phone'])) : ?>
										  <span class="warning">Invalid email address</span>
									  <?php endif; ?>
								  </label><br>
								  <input type="text" name="phone" id="phone"
									  <?php
									  if ($errors || $missing) {
										  echo 'value="' . htmlentities($phone) . '"';
									  }
									  ?>
									  >
								</p>
								
								<p>
								  <label for="email">Email:
									  <?php if ($missing && in_array('email', $missing)) : ?>
										  <span class="warning">Please enter email address</span>
									  <?php elseif (isset($errors['email'])) : ?>
										  <span class="warning">Invalid email address</span>
									  <?php endif; ?>
								  </label><br>
								  <input type="text" name="email" id="email"
									  <?php
									  if ($errors || $missing) {
										  echo 'value="' . htmlentities($email) . '"';
									  }
									  ?>
									  >
								</p>
								
								<p>
									<label for="option">Sponsorship Options:
									<?php if($missing && in_array('option',$missing)) : ?>
										<span class="warning">Please make a selection</span>
										<?php endif; ?>
									</label><br>
									<select name="option" id="option">
										
										<option selected value=""
												<?php
												if(!$_POST || $option == '')
												{
													echo 'selected';
												}
												?>
												>Please make a selection</option>
												
										<option value="gold1"
												<?php
												if($_POST && $option == 'gold')
												{
													echo 'selected';											
												}
												?>
												>Gold: One time payment of $3,000.</option>
										
										<option value="gold2"
												<?php
												if($_POST && $option == 'gold')
												{
													echo 'selected';											
												}
												?>
												>Gold: $250 per month. </option>
												
										<option value="silver1"
												<?php
												if($_POST && $option == 'silver')
												{
													echo 'selected';											
												}
												?>
												>Silver: One time payment of $1,500.</option>
												
										<option value="silver2 "
												<?php
												if($_POST && $option == 'silver')
												{
													echo 'selected';											
												}
												?>
												>Silver: $125 per month</option>
												
										<option value="bronze1"
												<?php
												if($_POST && $option == 'bronze')
												{
													echo 'selected';											
												}
												?>
												>Bronze: One time payment of $1,000</option>
												
										<option value="bronze2"
												<?php
												if($_POST && $option == 'bronze')
												{
													echo 'selected';											
												}
												?>
												>Bronze: $85 per month</option>
									</select>
								</p>
								
								<p>
								  <input type="submit" name="send" id="send" value="Submit">
							   </p>
								    
						</fieldset>
					</fieldset>
				 </form>
  <!--- form content ends above this line ---->
  
      </div> 
    </div> <!-- row end --> 
  </div> <!-- container end -->
</body>
</html>