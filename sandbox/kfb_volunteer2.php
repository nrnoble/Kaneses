<?php include "kfb_head.php" ?>

<body class="no-trans   ">
    
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<?php include "kfb_menubar.php" ?>
 <div class="page-wrapper">

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container kfb_background">

				<div class="container">
					<div class="row">
						
						<!-- main start -->
						
						<div class="main col-md-9">					
							<div id = \id1 class = "pageblock">
															
								<h1 align="center"> Volunteer</h1>
								<p align="center"><a href = "kfb_apply_form.php" target="_blank">Volunteer Application</a></p>
								
							</div>
													
							<div id = id2 class = "pageblock">
								<h2>Volunteer Opportunities</h2> 
								<p>The Kent Food Bank and Emergency Services exists to serve the Kent School District area. The KFB supplies food, clothing, resource referrals, and emergency financial assistance to persons in need living within our service area.</p>
								<h3>CLOTHING:</h3>
								<p>Volunteers receive, sort and organize donated clothing and assist clients in their shopping.</p>
								<h3>OFFICE:</h3>
								<p>Volunteers register clients by computer check in through a one on one client interview process and verify information. Assist with resource referral and other needs.</p>
								<h3>FOOD:</h3>
								<p>Volunteers receive, unload, sort and organize donation items from the community as well as assist clients one on one with their food line selections.</p>
							</div>
						


						</div>
							
						<!-- main end -->

						<!-- sidebar start -->
						<!-- ================ -->
						
							<?php include "kfb_volunteer_sidebar.php" ?>
						
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
<html>