<?php
if (isset($_POST['send']))
{
	//echo("<h2>sending email...</h2>"); 
    $expected = ['name', 'email', 'comments'];
    $required = ['name', 'comments'];
    $to = 'Neal Noble<nrnoble@hotmail.com>';
    $subject = 'Feedback from online form';
    $headers = [];
    $headers[] = 'From: kaneses@greenrivertech.net';
    $headers[] = 'Cc: neal@nrnoble.com, nnoble@greenrivertech.net';
    $headers[] = 'Content-type: text/plain; charset=utf-8';
     $authorized = '';
    require './kfb_includes/process_mail.php';
    if ($mailSent)
    {
        header('Location: thanks.php');
        exit;
    }
$errors = [];
$missing = [];
}
?>
<!DOCTYPE html>
<?php include "kfb_head.php" ?>

<body class="no-trans kfb_background">

	
<?php include "kfb_menubar.php" ?>

 <div class="page-wrapper" >

		<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container kfb_background">

				<div class="container">
					<div class="row">
						
<!-- Think carefully before modifying code above this line  -->

					<!-- KFB page content starts here  -->
					
						<div class="main col-md-9">
							
		
						
						<div id = pageblock1s class = "pageblock">
						
						
						 
							<div id = "kfb_contactform" class="container" style="width: inherit">
						  
						  
						  
							<form role="form" action="<?= $_SERVER['PHP_SELF']; ?>" method="post" >
							  <div class="col-md-9">
					  
								<div class="well well-sm"><strong style = "color: blue">
										<i class="glyphicon;"></i>
										Contact The Kent Food Bank</strong>
								</div>
							  
								<div class="form-group">
								  <label for="InputName">Your Name</label>
								  <div class="input-group">
									<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
									<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
								</div>
								<div class="form-group">
								  <label for="InputEmail">Your Email</label>
								  <div class="input-group">
									<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required  >
									<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
								</div>
								<div class="form-group">
								  <label for="InputMessage">Message</label>
								  <div class="input-group">
									<textarea name="comments" id="InputMessage" class="form-control" rows="5" required></textarea>
									<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
								</div>
					  
					  <!--		  <div class="form-group">-->
					  <!---->
					  <!--			<label for="InputReal">What is 4+3? (Simple Spam Checker)</label>-->
					  <!--			<div class="input-group">-->
					  <!--			  <input type="text" class="form-control" name="InputReal" id="InputReal" required>-->
					  <!--			  <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>-->
					  <!--		  </div>-->
					  
								<input type="submit" name="send" id="send" value="send" class="btn btn-info pull-left">
							  </div>
							</form>
					  </div>


  
  
 
						
		
						
						
							
						</div> 
						
						
						<div id = pageblock2 class = "pageblock" style="visibility: hidden" >
						<div id =kfb_contactform class = "contactform">

                    <h1>Contact The Kent Food Bank</h1>
                    <?php if ($_POST && ($suspect || isset($errors['mailfail']))) : ?>
                    <p class="warning">Sorry, your mail couldn't be sent.</p>
                    <?php elseif ($errors || $missing) : ?>
                    <p class="warning">Please fix the item(s) indicated</p>
                    <?php endif; ?>
                    <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
                      <p>
                        <label for="name" \>Name:
                        <?php if ($missing && in_array('name', $missing)) : ?>
                            <span class="warning">Please enter your name</span>
                        <?php endif; ?>
                        </label>
                        <input type="text" name="name" id="name" value="Neal Noble"
                            <?php
                            if ($errors || $missing) {
                                echo 'value="' . htmlentities($name) . '"';
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
                        <input type="email" name="email" id="email" value="nrnoble@hotmail.com"
                            <?php
                            if ($errors || $missing) {
                                echo 'value="' . htmlentities($email) . '"';
                            }
                            ?>
                            >
                      </p>
                      <p>
                        <label for="comments" >Comments:
                            <?php if ($missing && in_array('comments', $missing)) : ?>
                                <span class="warning">You forgot to add any comments</span>
                            <?php endif; ?>
                        </label>
                          <textarea name="comments" id="comments"><?php
                              if ($errors || $missing) {
                                  echo htmlentities($comments);
                              }
                              
                              ?>comments go here</textarea>
                      </p>
                      <p>
                        <input type="submit" name="senddd" id="sendasd" value="Send Comments">
                      </p>
                    </form>
                </div>	
						</div>
						

							
				
						
					
						</div>
					<!-- KFB page content ends here  -->
					
<!-- Think carefully before modifying code below this line  -->

						<!-- sidebar start -->
						<!-- ================ -->
						    
								<?php include "kfb_sidebar_contactform.php" ?>
							
						<!-- sidebar end -->

					</div>
				
				</div>
			
			</section>
			<!-- main-container end -->
			
			
			
		</div>
		<!-- page-wrapper end -->
		</div>
 			<!-- sidebar start -->


<?php include "kfb_footer.html" ?>
</body>
</html>
