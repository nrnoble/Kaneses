<style>
	 .criminal {color:red;}
	 #courtOrdered {}
	 .notCO {}
	 #highCrime {}
	 #lowCrime {}
	 #highCrimeMessage {color:red}
	 #lift40 {}
	 
	 .required {color: #FF0000;}
     .successful { color: #9ACD32;}
</style>

<?php // Create connection
    $conn = new mysqli("127.0.0.1", "kaneses_kfb", "Ru4real2016","kaneses_kfb");
    // echo 'Connected to database!';
?>

<!DOCTYPE html>
<html lang="en">
	 <head>
		  <meta charset="utf-8">
		  <meta http-equiv="X-UA-Compatible" content="IE=edge">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		  
		  <!-- Latest compiled and minified CSS -->
		  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		  <!-- jQuery library -->
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		  <!-- Latest compiled JavaScript -->
		  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	 </head>
	 
	 <body>
<?php
	 // volunteer application Form for Kent Food Bank
	 // Kandis Brighton IT 305 Application Form for KaNeSeS Kent Food Bank
	 // include "kfb_head.html";
	 
	 $errors = [];
	 $missing = [];
	 
	 // Form validation functions
	 
	 // Check if Activities are valid
	 function validateActivities($activities) {
		  $validActivitiesArray = array("clothing","office","food");
		  foreach ($activities as $activity) {
			 if (!in_array($activity, $validActivitiesArray)) {
			   return false;
			 }
		  }
		  // if we made it this far, all of our activities are valid
		  return true;
	 }
	 
	 // Check if our Application type is valid
	 function validateAppType($apptype) {
		  $validAppArray = array("individual","group","organization", "school", "courtordered");
		  if (!in_array($apptype, $validAppArray)) {
			   return false;
		  }
		  // if we made it this far, the app is valid
		  return true;
	 }
	 
	 function validateAvailabilityType($availability) {
		  $validAvailabilityArray = array("yes", "no");
		  if (!in_array($availability, $validAvailabilityArray)) {
			   return false;
		  }
		  // if we made it this far, the app is valid
		  return true;
	 }
	 
	 // see if the form has been submitted, check for validation and terminate form
	 if (isset($_POST['submit'])) {
		 //create a boolean flag to track validation errors
		 $isValid = true;
		 // check if apptype is valid
		 $apptype = "";
		 
		 if (isset($_POST['apptype']) AND validateAppType($_POST['apptype'])) {
			 $apptype = $_POST['apptype'];
		 } else {
			 print "Please select an application type.";
			 $isValid = false;
		 }
		 
		 // check if activities are valid
		 $activitiesChosen[] = NULL;
		 if (isset($_POST['activities'])) {
			 $activitiesChosen = $_POST['activities'];
			 if (!validateActivities($activitiesChosen)) {
				 print "Please select at least one activity.";
				 $isValid = false;
			 }
		 } else {
			 print "Please select at least one activity.";
				 $isValid = false;
		 }
		 
		 // check if availability is valid
		 $availability = "";
		 if (!empty($_POST['availability']) AND validateAvailabilityType($_POST['availability'])) {
			 $availability = $_POST['availability'];
		 } else {
			 print "Please select Yes or No for availability.";
			 $isValid = false;
		 }
		  
# write the volunteer info into the data base
// Escape the data
$fname = $_POST['fname']; $fname = mysqli_real_escape_string($conn, $fname);
$lname = $_POST['lname']; $lname = mysqli_real_escape_string($conn, $lname);
$email = $_POST['email']; $email = mysqli_real_escape_string($conn, $email);
$phone = $_POST['phonenumber']; $phone = mysqli_real_escape_string($conn, $phone);
$apptype = $_POST['apptype']; $apptype = mysqli_real_escape_string($conn, $apptype);
$activities = $_POST['activities[]']; #$act = mysqli_real_escape_string($conn, $act);
$availability = $_POST['availability']; $availability = mysqli_real_escape_string($conn, $availability);
$availability_text = $_POST['availability_text']; $availability_text = mysqli_real_escape_string($conn, $availability_text);
$reason = $_POST['whyVolunteer']; $reason = mysqli_real_escape_string($conn, $reason);

#$crime = ;
#$life = ;

// Define the query
$sql = "INSERT INTO volunteers (first_name, last_name, email, phone, Type, Activities, Availability, AvailabilityDescription)
					    VALUES ('$fname', '$lname', '$email', '$phone', '$apptype', '$activities', '$availability', '$availability_text')";
						
$result = @mysqli_query($conn, $sql);
if(!$result) {
	echo "<p>Error: " .mysqli_error($conn) ."</p>";
}

			// Send an email to KFB
			$expected = ['fname', 'lname', 'email', 'phonenumber', 'whyVolunteer', 'availability', 'availability_text', 'apptype', 'activities', 'crime', 'lift'];
			$required = ['fname', 'lname', 'email', 'phonenumber', 'whyVolunteer', 'apptype', 'availability', 'activities', 'crime', 'lift'];
			#$to = 'Kandis <kandisbrighton@gmail.com>';  //Kaneses <kaneses@greenrivertech.net>';
			$to = 'Bo <bbx719@gmail.com>';  //Kaneses <kaneses@greenrivertech.net>';
			$subject = 'Feedback from online form';
			$headers = [];
			$headers[] = 'From: kaneses@greenrivertech.net';
			$headers[] = 'Cc: kbrighton@mail.greenriver.edu';
			$headers[] = 'Content-type: text/plain; charset=utf-8';
			$authorized = null; //'-kbrighton@mail.greenriver.edu';
			require 'kfb_process_mail.php';
			// if crime is yes then send email information to kent food bank and the person.

		    if ($mailSent) {
			   // call the termination page.
			   print "<div id=summary>";
			   print "<h3>Volunteer Summary</h2>";
			   print "<p>Thank you for your application, $fname $lname.</p>";
			   print "<p>Email: $email</p>";
			   print "<p>Phone Number: $phonenumber</p>";
			   print "<p>Application Type: $apptype</p>";
			   print "<p>Activities: ";
			
			   for ($i=0; $i<sizeof($activitiesChosen); $i++) {
					   print "$activitiesChosen[$i] ";
			   }
			   print "</p>";
			   print "<p>Availability: ";
			   print "$availability ";
			   print "$availability_text </p>";
			   print "<p>Reasons for volunteering: ";
			   print "$whyVolunteer</p>";
			   
			   // Send an email to the person who applied
			   $to = $email;
			   $subject = 'Thank you';
			   $headers = [];
			   $headers[] = 'From: kaneses@greenrivertech.net';
			   $headers[] = 'Cc: kbrighton@mail.greenriver.edu';
			   $headers[] = 'Content-type: text/plain; charset=utf-8';
			   $authorized = null; //'-kbrighton@mail.greenriver.edu';
			   $headers = implode("\r\n", $headers);
			   $message =  [];
			   $message[] = "Thank you!";
			   $message[] = "";
			   $message[] = "Thank you for your interest in volunteering with the Kent Food Bank, our agency has volunteer positions to accommodate many different schedules, physical abilities and interests.";
			   $message[] = "";
			   $message[] = "Volunteers are a vital part of our ability to provide the basic needs of our community. Thanks to people like you, we are able to spend 99 cents of every dollar donated on direct client services. Last year, volunteers donated more than 20,000 hours to support Kent Food Bank. Without our caring and dedicated volunteers we cannot achieve our mission to end hunger.";
			   $message[] = "";				
			   $message[] = "Once again, thank you for your interest. A staff member will be in contact with you to set up orientation.";
			   $message[] = "";
			   $message[] = "Jeniece Choate, Executive Director";
			   $message[] = "Kent Food Bank and Emergency Services";
			   $message[] = "";
			   $message = implode("\r\n",$message);
			   
			   if (isset($_POST['crime'])) {
					  $crime = $_POST['crime'];
			   }
			   if ($crime == "yes") {
					 $message = "We are sorry. You do not qualify to complete your community service at the Kent Food Bank. Please call 211 to find other community service agencies.";
					 print $message;
			   }
			   mail($to,$subject,$message,$headers,$authorized);
			   ?>
			   <br>
			   <a href= index.php>Return to website.</a>
			   <?php
			   exit;
            }
		}
?>



    <div class="container">
	 <div class="jumbotron">
      <!-- <div class="row"> -->
        <!-- <div class ="kfb_form"> -->
  
    	<!-- volunteer form -->
        <!-- <h2>Kent Food Bank and Emergancy Services</h2> -->
        <h2 style="text-align: center">Volunteer Application Form</h2>
		<span class="required">* required field.</span><br><br>
		
		<form class="form-horizontal" id="volunteer_form" action="" method="post" role="form">
            
				<?php if ($_POST && ($suspect || isset($errors['mailfail']))) : ?>
					<p class="warning">Sorry, your mail couldn't be sent.</p>
				<?php elseif ($errors || $missing) : ?>
					<p class="warning">Please fix the item(s) indicated</p>
				<?php endif; ?>
		 
				<!-- <legend>Contact Info</legend> -->
				
				<div class="form-group">
				  <label class="col-sm-2 control-label" for="fname">First Name<span class="required">*</span></label>
				  <div class="col-sm-5">
					<input type="text" class="form-control" name="fname" id="fname" placeholder="enter your first name here"
						<?php if ($errors || $missing) { echo 'value="' . htmlentities($fname) . '"'; } ?>
					 >
				  </div>
				  <div class="col-sm-5">
					<?php if ($missing && in_array('fname', $missing)) : ?>
						<span class="warning" style="color: red">first name is required</span>
					<?php endif; ?>
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="col-sm-2 control-label" for="lname">Last Name<span class="required">*</span></label>
				  <div class="col-sm-5">
					<input type="text" class="form-control" name="lname" id="lname" placeholder="enter your last name here"
						<?php if ($errors || $missing) { echo 'value="' . htmlentities($lname) . '"'; } ?>
					 >
				  </div>
				  <div class="col-sm-5" style="color: red">
					<?php if ($missing && in_array('lname', $missing)) : ?>
						<span class="warning" style="color: red">last name is required</span>
					<?php endif; ?>
				  </div>
				</div>
				   
			   <div class="form-group">
					<label class="col-sm-2 control-label" for="email">Email<span class="required">*</span></label>
					  <div class="col-sm-5">
						<input type="email" class="form-control" name="email" id="email" placeholder="format: name@email.com"
						<?php if ($errors || $missing) { echo 'value="' . htmlentities($email) . '"'; } ?>
						>
					</div>
					<div class="col-sm-5" style="color: red">
						 <?php if ($missing && in_array('email', $missing)) : ?> <span class="warning">email is required</span>
						 <?php elseif (isset($errors['email'])) : ?> <span class="warning">Invalid email address</span>
						 <?php endif; ?>
					</div>
			   </div>
	 
				 <div class="form-group">
					<label class="col-sm-2 control-label" for="phonenumber">Phone Number<span class="required">*</span></label>
					<div class="col-sm-5">
						 <input type="phonenumber" class="col-sm-5 form-control" name="phonenumber" id="phonenumber" placeholder="enter numbers only"
						 <?php if ($errors || $missing) { echo 'value="' . htmlentities($phonenumber) . '"'; } ?>
						 >
					</div>
					<div class="col-sm-5" style="color: red">
						 <?php if ($missing && in_array('phonenumber', $missing)) : ?> <span class="warning">phone number is required</span>
						 <?php elseif (isset($errors['phonenumber'])) : ?> <span class="warning">Invalid phone number</span>
						 <?php endif; ?>
					</div>
		         </div>

            <!-- check applicaiton type -->
            <div class="form-group">
                <label class="col-sm-2 control-label">Application Type<span class="required">*</span></label>
				<div class="col-sm-5">
					<div class="radio">
						 <label><input type="radio" value="individual" name="apptype" id="apptype" <?php if ($apptype == "individual") { echo 'checked="checked"'; } ?>>Individual</label>
					</div>
					<div class="radio">
						 <label><input type="radio" value="group" name="apptype" id="apptype" <?php if ($apptype == "group") { echo 'checked="checked"'; } ?> >Group</label>
					</div>
					<div class="radio">
						 <label><input type="radio" value="organization" name="apptype" id="apptype" <?php if ($apptype == "organization") { echo 'checked="checked"'; } ?> >Organization</label>
					</div>
					<div class="radio">
						 <label><input type="radio" value="school" name="apptype" id="apptype" <?php if ($apptype == "school") { echo 'checked="checked"'; } ?> >School</label>
					</div>
					<div class="radio">
						 <label id="courtOrdered"><input type="radio" value="courtordered" name="apptype" id="apptype" <?php if ($apptype == "courtordered") { echo 'checked="checked"'; } ?> >Court Ordered Community Service</label>
					</div>
				</div>
				<div class="col-sm-5" style="color: red">
				</div>
		    </div>
			
			<div class="form-group">
			   <label class="col-sm-2 control-label">I have committed theft, fraud, assault, or a crime against children.<?php if (isset($_POST['crime'])) { $crime = $_POST['crime']; } ?></label>
			   <div class="col-sm-5">
					<div class="radio">
						 <label id="highCrime"><input type="radio" value="yes" name="crime" id="crime" <?php if ($crime == "yes") {echo 'checked="checked"';}?>>Yes</label>
					</div>
					<div class="radio">
						 <label id="lowCrime"><input type="radio" value="no" name="crime" id="crime" <?php if ($crime == "no") {echo 'checked="checked"';}?>>No</label>
					</div>
			   </div>
			   <div class="col-sm-5" style="color: red">
			   </div>
			</div>
			
			<p id="highCrimeMessage">We are sorry. You do not qualify to complete your community service at the Kent Food Bank. <br>Please call 211 to find other community service agencies.</p>
	            
			<!-- <fieldset class="criminal"> -->
			<div class="form-group">
			   <label class="col-sm-2 control-label">I am able to lift 40 pounds.</label>
			   <?php if (isset($_POST['lift'])) {$lift = $_POST['lift'];}?>
			   <div class="col-sm-5">
					<div class="radio">
						 <label><input type="radio" value="yes" name="lift" id="lift" <?php if ($lift == "yes") { echo 'checked="checked"'; }?>>Yes</label>
					</div>
					<div class="radio">
						 <label id="lift40"><input type="radio" value="no" name="lift" id="lift" <?php if ($lift == "no") { echo 'checked="checked"'; } ?>>No</label>
					</div>
			   </div>
			<!-- </fieldset> -->
			</div>
			
		     
            <!-- check volunteer activities -->
            <div class="form-group">
                <label class="col-sm-2 control-label">Volunteer Activities<span class="required">*</span></label>
				<div class="col-sm-5">
					<div class="checkbox">
						 <label><input type="checkbox" name="activities[]" value="clothing" <?php if (sizeof($activitiesChosen)>0 && in_array("clothing", $activitiesChosen)) { echo 'checked="checked"';}?>>Clothing</label>
					</div>
					<div class="checkbox">
						 <label><input type="checkbox" name="activities[]" value="office" <?php if (sizeof($activitiesChosen)>0 && in_array("office", $activitiesChosen)) { echo 'checked="checked"';}?>>Office</label>
					</div>
					<div class="checkbox">
						 <label><input type="checkbox" name="activities[]" value="food" <?php if (sizeof($activitiesChosen)>0 && in_array("food", $activitiesChosen)) { echo 'checked="checked"'; }?>>Food</label>
					</div>
					<div class="checkbox">
						 <label><input type="checkbox" name="activities[]" value="driver" <?php if (sizeof($activitiesChosen)>0 && in_array("driver", $activitiesChosen)) { echo 'checked="checked"'; }?>>Driver</label>
					</div>
				</div>
				<div class="col-sm-5" style="color: red">
				</div>
            </div>

		  <!-- 
			<div class="form-group">
                <label class="col-sm-2 control-label">Availability - Are you able to make a commitment of at least three(3) months one day a week (M, T, W or F from 9am-2:30pm)</label>
				<div class="col-sm-5">
					<div class="radio">
						 <label><input type="radio" value="yes" name="availability" id="availability" ?php if ($availability == "yes") { echo 'checked="checked"'; }?>>Yes</label>
					</div>
					<div class="radio">
						 <label><input type="radio" value="no" name="availability" id="availability" ?php if ($availability == "no") { echo 'checked="checked"'; }?>>No</label>
					</div>
				</div>
	        </div>
		  -->

            <!-- additional questions -->
			<!-- <fieldset> -->
				<!-- <legend>Questions</legend>-->
					<div class="form-group">
						<label class="col-sm-2 control-label" for="availability_text">Availability<span class="required">*</span></label>
					    <!-- <textarea rows="5" cols = "40" name="availability_text" id="availability_text"><?php if ($errors || $missing) { echo htmlentities($availability_text); }?></textarea><br> -->
					    
						<div class="col-sm-5">
						 <div class="checkbox">
							  <label><input type="checkbox" name="activities[]" value="monday" <?php if (sizeof($activitiesChosen)>0 && in_array("clothing", $activitiesChosen)) { echo 'checked="checked"';}?>>Monday</label>
						 </div>
						 <div class="checkbox">
							  <label><input type="checkbox" name="activities[]" value="Tuesday" <?php if (sizeof($activitiesChosen)>0 && in_array("office", $activitiesChosen)) { echo 'checked="checked"';}?>>Tuesday</label>
						 </div>
						 <div class="checkbox">
							  <label><input type="checkbox" name="activities[]" value="Wednesday" <?php if (sizeof($activitiesChosen)>0 && in_array("food", $activitiesChosen)) { echo 'checked="checked"'; }?>>Wednesday</label>
						 </div>
						 <div class="checkbox">
							  <label><input type="checkbox" name="activities[]" value="Thursday" <?php if (sizeof($activitiesChosen)>0 && in_array("driver", $activitiesChosen)) { echo 'checked="checked"'; }?>>Thursday</label>
						 </div>
						 <div class="checkbox">
							  <label><input type="checkbox" name="activities[]" value="Friday" <?php if (sizeof($activitiesChosen)>0 && in_array("driver", $activitiesChosen)) { echo 'checked="checked"'; }?>>Friday</label>
						 </div>
						</div>
						<div class="col-sm-5" style="color: red">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label" for="whyVolunteer">Why are you interested in volunteering at the Kent Food Bank?<span class="required">*</span></label>
						<div class="col-sm-5">
						 <textarea rows="5" cols="55" name="whyVolunteer" id="whyVolunteer"><?php if ($errors || $missing) { echo htmlentities($whyVolunteer); }?></textarea>
					    </div>
						<div class="col-sm-5" style="color: red">
						 <?php if ($missing && in_array('whyVolunteer', $missing)) : ?>
							<span class="warning" style="color: red"><br>Please tell us why you are volunteering.</span>
						 <?php endif; ?>
						</div>
					</div>
            <!-- </fieldset> -->
            
			<br><br>
            <!-- <input type="submit" id="submit" name="submit" value="Submit your Application"><br> -->
			<div class="form-group">
			   <div class="text-center">
				 <button type="submit" class="btn btn-info" name="submit">Submit Application</button>
			   </div>
          </div>
        </form>
      
    </div> <!-- row end --> 
  </div> <!-- container end -->

  <script src="http://code.jquery.com/jquery.js"></script>
  <script>
	 // start with low crime checked even though it is hidden.
	 $("#lowCrime").prop("checked",true);
     $("#lift40").prop("checked",true);
	 $(".criminal").hide();
     $("#courtOrdered").click(function(){
            $(".criminal").show();
     });
	 $(".notCO").click(function(){
		     $(".criminal").hide();
     });
	 $("#highCrimeMessage").hide();
	 $("#highCrime").click(function(){
          $("#highCrimeMessage").show();
     });
	 $("#lowCrime").click(function(){
          $("#highCrimeMessage").hide();
     });
	// $( document ).ready( function(){
	//	  if ($("#courtOrdered").attr("checked")=="checked") {
//			   
//          }
  //   });
 // on ready
  </script>
  
</body>
<html>