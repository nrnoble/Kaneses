<?php include "kfb_head.html";



//  application Form
// Kandis Brighton

$errors = [];
$missing = [];

     // Kandis Brighton IT 305 Application Form for KaNeSeS Kent Food Bank
     
     // form validation functions
	 
    // validName returns true if $string is not empty and is apphabetic.
    function validName($name)
    {
      return ctype_alpha($name) AND !empty($name);
    }
    function validString($string)
    {
      return !empty($string);
    }
    
    function validActivities($activities)
    {
         $validActivitiesArray = array("clothing","office","food");
         foreach ($activities as $activity)
         {
            if (!in_array($activity, $validActivitiesArray))
            {
              return false;
            }
         }
        // if we made it this far, all of our activities are valid
         return true;
    }
    // check if our App type is valid
    function validAppType($apptype)
    {
         $validAppArray = array("individual","group","organization", "school", "courtordered");
		 
	     if (!in_array($apptype, $validAppArray))
            {
              return false;
            }
         // if we made it this far, the app is valid
         return true;
    }
	
	 function validAvailabilityType($availability)
    {
	//	echo "in function:$availability";
         $validAvailabilityArray = array("yes", "no");
		 
	     if (!in_array($availability, $validAvailabilityArray))
            {
			//	echo "not valid";
              return false;
            }
         // if we made it this far, the app is valid
	//	 echo "valid";
         return true;
    }
  
 		// see if the form has been submitted, check for validation and terminate form
		if (isset($_POST['submit']))
        {
		//	echo "submit is good!!!";
			//create a boolean flag to track validation errors
			$isValid = true;

	//		$phonenumber = "";
	//		if (validString($_POST['phonenumber'])) {
	//			$phonenumber = $_POST['phonenumber'];
	//		} else {
	//			print "<p>Please enter a valid phone number.</p>";
	//			$isValid = false;
	//		}

	
			// check if apptype is valid
			$apptype = "";
			if (isset($_POST['apptype']) AND validAppType($_POST['apptype'])) {
				$apptype = $_POST['apptype'];
			} else {
				print "<p>Please select an application type.</p>";
				$isValid = false;
			}
			
			// check if activities are valid
			
			$activitiesChosen[] = NULL;
			
			if (isset($_POST['activities'])) {
				$activitiesChosen = $_POST['activities'];
				if (!validActivities($activitiesChosen)) {
					print "<p>Please select at least one activity.</p>";
					$isValid = false;
					//return;
                }
			} else { 
				print "<p>Please select at least one activity.</p>";
					$isValid = false;
			}
			
			// check if availability is valid
			$availability = "";
		//	echo "<br>I am here.</br>";
			if (!empty($_POST['availability']) AND validAvailabilityType($_POST['availability']))
			{
				$availability = $_POST['availability'];
			//	echo "valid: $availability";
			} else {
				print "<p>Please select Yes or No for availability.</p>";
				$isValid = false;
			}
	  			   



//	print_r($_POST);
	
		$expected = ['fname', 'lname', 'email', 'phonenumber', 'whyVolunteer', 'availability_text','apptype','availability','activities'];
		$required = ['fname', 'lname', 'email', 'phonenumber', 'whyVolunteer','apptype','availability','activities'];
		$to = 'Tina <TOstrander@greenriver.edu>'; // 'Kaneses <kaneses@greenrivertech.net>';  
		$subject = 'Feedback from online form';
		$headers = [];
		$headers[] = 'From: kaneses@greenrivertech.net';
		$headers[] = 'Cc: kbrighton@mail.greenriver.edu';
		$headers[] = 'Content-type: text/plain; charset=utf-8';
		$authorized = null; //'-kbrighton@mail.greenriver.edu';
		require 'kfb_process_mail.php';
		
    if ($mailSent) {
		//echo "mail was sent!!!";
		//  header('Location:thanks.php');
						// call the termination page.
				   print "<div id=summary>";
				   print "<h3>Volunteer Summary</h2>";
				   
				   print "<p>Thank you for your application, $fname $lname.</p>";

				   print "<p>Email: $email</p>";
				   print "<p>Phone Number: $phonenumber</p>";
				   print "<p>Application Type: $apptype</p>";
				   print "<p>Activities: ";
				
				   for ($i=0; $i<sizeof($activitiesChosen); $i++)
			       {
						   print "$activitiesChosen[$i] ";
			       }
				   
				   print "</p>";
				   print "<p>Availability: ";
				   print "$availability ";
				   print "$availability_text </p>";
				   print "<p>Reasons for volunteering: ";
				   print "$whyVolunteer</p>";
				   ?>
				   <a href= index.php>Return to website.</a>
				   <?php
		   exit;
    }
}
?>
<body class="no-trans   ">
    <div class="container">
      <div class="row">
        <div class ="kfb_form">
    
	
    
    	<!-- volunteer form -->
        <h1>Kent Food Bank and Emergancy Services</h1>
        <h2>Volunteer Form</h2>
		<form id="volunteer_form" action= "" method="post">
            <fieldset>
			<?php if ($_POST && ($suspect || isset($errors['mailfail']))) : ?>
			<p class="warning">Sorry, your mail couldn't be sent.</p>
			<?php elseif ($errors || $missing) : ?>
			<p class="warning">Please fix the item(s) indicated</p>
			<?php endif; ?>
		    <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
       
              <legend>Contact Info</legend>

			  <p>
				<label for="fname">First Name:
				<?php if ($missing && in_array('fname', $missing)) : ?>
					<span class="warning">Please enter your first name</span>
				<?php endif; ?>
				</label>
				<input type="text" name="fname" id="fname"
					<?php
					if ($errors || $missing) {
						echo 'value="' . htmlentities($fname) . '"';
					}
					?>
					>
			  </p>	
               <!--     First Name:&nbsp;<input type="text" size="20" maxlength="20" name="fname" id="fname" value ="<?//php echo $fname; ?>" >&nbsp; -->
				<!--    Last Name:&nbsp;<input type="text" size="20" maxlength="20" name="lname" id="lname" value ="<?//php echo $lname; ?>" >  -->
				  <p>
				<label for="lname">Last Name:
				<?php if ($missing && in_array('lname', $missing)) : ?>
					<span class="warning">Please enter your last name</span>
				<?php endif; ?>
				</label>
				<input type="text" name="lname" id="lname"
					<?php
					if ($errors || $missing) {
						echo 'value="' . htmlentities($lname) . '"';
					}
					?>
					>
			  </p>	
					<p>
						<label for="email">Email:
							<?php if ($missing && in_array('email', $missing)) : ?>
								<span class="warning">Please enter your email address</span>
							<?php elseif (isset($errors['email'])) : ?>
								<span class="warning">Invalid email address</span>
							<?php endif; ?>
						</label>
						<input type="email" name="email" id="email"
							<?php
							if ($errors || $missing) {
								echo 'value="' . htmlentities($email) . '"';
							}
							?>
							>
					  </p>
					<p>
						<label for="phonenumber">Phone Number:
							<?php if ($missing && in_array('phonenumber', $missing)) : ?>
								<span class="warning">Please enter your phone number</span>
							<?php elseif (isset($errors['phonenumber'])) : ?>
								<span class="warning">Invalid phone number</span>
							<?php endif; ?>
						</label>
						<input type="phonenumber" name="phonenumber" id="phonenumber"
							<?php
							if ($errors || $missing) {
								echo 'value="' . htmlentities($phonenumber) . '"';
							}
							?>
							>
					  </p>
 			<!--	Phone Number:&nbsp;<input type="text" size="20" maxlength="20" name="phonenumber" id="phonenumber" value ="<?php //echo $phonenumber; ?>" ><br> -->
			</fieldset>
            <!-- check applicaiton type -->
            <fieldset>
                <legend>Application Type</legend>
				 
                <label><input type="radio" value="individual" name="apptype" id="apptype"
				<?php
				if ($apptype == "individual") {
					echo 'checked="checked"';
				}
				?>
				>Individual</label><br>
                <label><input type="radio" value="group" name="apptype" id="apptype"
				<?php
				if ($apptype == "group") {
					echo 'checked="checked"';
				}
				?>
				>Group</label><br>
                <label><input type="radio" value="organization" name="apptype" id="apptype"
				<?php
				if ($apptype == "organization") {
					echo 'checked="checked"';
				}
				?>
				>Organization</label><br>
                <label><input type="radio" value="school" name="apptype" id="apptype"
				<?php
				if ($apptype == "school") {
					echo 'checked="checked"';
				}
				?>
				>School</label><br>
                <label><input type="radio" value="courtordered" name="apptype" id="apptype"
				<?php
				if ($apptype == "courtordered") {
					echo 'checked="checked"';
				}
				?>
				>Court Ordered Community Service</label><br>
				
								
            </fieldset>
			

           <!-- check volunteer activities --> 
            <fieldset>
                <legend>Volunteer Activities Offered:</legend>
                <label><input type="checkbox" name="activities[]" value="clothing"
				<?php
				if (sizeof($activitiesChosen)>0 && in_array("clothing", $activitiesChosen)) {
					echo 'checked="checked"';
				}
				?>
				>Clothing</label><br>
                <label><input type="checkbox" name="activities[]" value="office"
				<?php
				if (sizeof($activitiesChosen)>0 && in_array("office", $activitiesChosen)) {
					echo 'checked="checked"';
				}
				?>
				>Office</label><br>
                <label><input type="checkbox" name="activities[]" value="food"
				<?php
				if (sizeof($activitiesChosen)>0 && in_array("food", $activitiesChosen)) {
					echo 'checked="checked"';
				}
				?>
				>Food</label><br>
             </fieldset>
             <!-- check availability -->
			<fieldset>
                <legend>Availability</legend>
				<p>Are you able to make a commitment of at least three(3) months one day a week (M, T, W or F from 9am-2:30pm)</p> 
                <label><input type="radio" value="yes" name="availability" id="availability"
				<?php
				if ($availability == "yes") {
					echo 'checked="checked"';
				}
				?>
				>Yes</label><br>
				
                <label><input type="radio" value="no" name="availability" id="availability"
				<?php
				if ($availability == "no") {
					echo 'checked="checked"';
				}
				?>
				>No</label><br>
	        </fieldset>
            <!-- additional questions -->
			<fieldset>
				<legend>Questions</legend>	
		            
					</label><br>
						<p>
						<label for="availability_text">If No to the above question, what is your availability?							
						</label><br>
						  <textarea rows="5" cols = "40" name="availability_text" id="availability_text"><?php
							  if ($errors || $missing) {
								  echo htmlentities($availability_text);
							  }
							  ?></textarea>
					  </p>		
					
					
					<p>
						<label for="whyVolunteer">Why are you interested in volunteering at the Kent Food Bank?
							<?php if ($missing && in_array('whyVolunteer', $missing)) : ?>
								<span class="warning"><br>Please tell us why you are volunteering.</span>
							<?php endif; ?>
						</label>
						  <textarea rows="5" cols = "40" name="whyVolunteer" id="whyVolunteer"><?php
							  if ($errors || $missing) {
								  echo htmlentities($whyVolunteer);
							  }
							  ?></textarea>
					  </p>					
				<!--	<label><br>
						<textarea rows="5" cols="40" name="whyvolunteer" id="whyvolunteer" ><?php// echo $whyvolunteer; ?></textarea>
					</label>  -->
            </fieldset>
             <p>
                <input type="submit" id="submit" name="submit" value="Submit your Application">
            </p>
        </form>
        
                                
 
      </div> 
    </div> <!-- row end --> 
  </div> <!-- container end -->
</body>
<html>