<?php include "kfb_head.php";?>

<body class="no-trans  kfb_background">

<div id="fb-root">
</div>

<script>
	(function(d, s, id)
	{
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
		fjs.parentNode.insertBefore(js, fjs);
	}
	(document, 'script', 'facebook-jssdk'));
</script>


<?php include "kfb_menubar.php" ?>

<div class="page-wrapper" >


	<!-- main-container start -->
	<!-- ================ -->

	<!-- carousels -->
	<section class="main-container kfb_background">

		<div class="container">
			<div class="row">
				<div class="main col-md-9">
					<!--<h3><i>Serving low-income residents of the Kent School District</i></h3>  --> <!-- slide bar -->
					<!-- <div id = "slideshow"  class="pageblock slideshow" style = "text-align:center; background-color: black; color:white;"> -->
					<!-- moved by Kandis 2/29 -->


<!--					<div class="pageblock">-->
<!--						<input type="button" id="show_login" value="Show Login" onclick="showpopup()"><br>-->
<!--						<input type="button" id="close_login" value="close_login" onclick="hidepopup()"><br>-->
<!--						Note: Strictly for testing\debugging purposes. Will be removed after testing is completed.-->
<!---->
<!--					</div >-->

					<div id="carousel-example-generic" class="carousel slide pageblock" style = "background: transparent "data-ride="carousel" data-interval="2000">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
							<li data-target="#carousel-example-generic" data-slide-to="3"></li>
							<li data-target="#carousel-example-generic" data-slide-to="4"></li>
						</ol>



						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
								<!-- <img src="http://placehold.it/1200x315" alt="..."> -->
								<img src="kfb_images/Food Bank40.jpg" alt="image1">
								<div class="carousel-caption">
									<h3></h3>
									<p></p>
								</div>
							</div>
							<div class="item">
								<img src="kfb_images/Food Bank49.jpg" alt="image2">
								<div class="carousel-caption">
									<h3></h3>
									<p></p>
								</div>
							</div>
							<div class="item">
								<img src="kfb_images/Food Bank55.JPG" alt="image3">
								<div class="carousel-caption">
									<h3></h3>
									<p></p>
								</div>
							</div>
							<div class="item">
								<img src="kfb_images/Food Bank10.jpg" alt="image4">
								<div class="carousel-caption">
									<h3></h3>
									<p></p>
								</div>
							</div>
							<div class="item">
								<img src="kfb_images/Food Bank19.jpg" alt="image5">
								<div class="carousel-caption">
									<h3></h3>
									<p></p>
								</div>
							</div>
						</div>

						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						</a>

					</div> <!-- Carousel -->

					<div id = "location" class="pageblock">
						<!-- page-title end -->
						<div id="header-1">
							<h2 class="space-top">Contact</h2>
							<div class="separator-2"></div>
							<div class="span6" id="footerArea3">
								<table style = "border: none">
									<tr>
										<td style =  "width:400px; border: none; ">
											<iframe class = "kfb_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2701.513777590259!2d-122.24086688437717!3d47.38240757917045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54905bfdbff40b47%3A0x63c620b8cc6e0617!2s515+W+Harrison+St+%23107%2C+Kent%2C+WA+98032!5e0!3m2!1sen!2sus!4v1453578208942"
													width="100%" height="225px" frameborder="0" style="border:0; box-shadow: 3px 3px 3px #989898" ></iframe>
										</td>
										<td style = "Font-size:10pt; text-align: left; vertical-align:text-top; border: none;">
											515 W Harrison Street Ste. #107 Kent, WA 98032<br>
											Phone: 253-520-3550<br>
											Email: kentfoodbank@gmail.com
											Facebook: <a href= "https://www.facebook.com/kentfoodbank">https://www.facebook.com/kentfoodban</a>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>







					<div id = "aboutus" class="pageblock">
						<div id="header-3">
							<h2 class="space-top">About US</h2>
							<div class="separator-2"></div>
							<h3> Description</h3>
							<!-- <img class="img-responsive img-border img-left" src="img/intro-pic.jpg" alt="">  -->
							<hr class="visible-xs">
							<p>The Kent Food Bank and Emergency Services is a non-profit organization offering food, clothing and emergency financial assistance to low income families and individuals living within the Kent School District.  The Kent Food Bank service area covers 73 square miles with 40 schools. Kent Food Bank operates two food distribution locations in Kent each week.</p>
							<span class ="moreinfo" ><a href="">More About US ...</a></span>

						</div>
					</div>

					<div id = "services" class="pageblock">
						<div id="header-4">
							<h2 class="space-top">Services</h2>
							<div class="separator-2"></div>

							<ul>
								<li>Food Assistance</li>
								<li>Clothing Bank</li>
								<li>Food Delivery Service To Low Income Seniors</li>
								<li>Emergency Food Bags</li>
								<li>Bank distribution at two locations</li>
								<li>Holiday distributions</li>
								<li>Limitied Financial Assitance</li>
								<li>Homeless Food Bags</li>
							</ul>

							<span class ="moreinfo" ><a href="kfb_services.php">More About Our Services ...</a></span>
						</div>
					</div>


					<div id = "donate" class="pageblock">
						<div id="header-5">
							<h2 class="space-top">Donate</h2>
							<div class="separator-2"></div>

							<table style = "border: none">
								<tr>
									<td style =  "width:400px; border: none" >
										<h1>Top 10 needed items</h1>

<pre class="kfb_topten">
<?php include "kfb_topten.txt"; ?>
</pre>
									</td>
									<td  style = "Font-size:10pt; text-align: left; vertical-align:text-top; border: none;">
										<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">

											<input type="hidden" name="cmd" value="_s-xclick">

											<input type="hidden" name="hosted_button_id" value="HPNP9YXHUXN4G">

											<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">

											<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
						</div>
						</form>
						</td>
						</tr>
						</table>

						<span class ="moreinfo" ><a href="kfb_donations.php">More about how to Donate...</a></span>

						<div>

						</div>



					</div>
				</div>



				<!-- Activity & Event Calendar on the main content -->
				<div id = "calendar" class = "pageblock">
					<div id="header-7" >
						<h2 class="space-top">Activity & Event Calendar</h2>
						<div class="separator-2"></div>
						<!--
                        <iframe class = "kfb_calendar" src="https://calendar.google.com/calendar/embed?src=bpr74u8ueuun38sr11b90t6ffo%40group.calendar.google.com&ctz=America/Los_Angeles"
                                style="border: 0" width="480; box-shadow: 3px 3px 3px #989898" height="300" frameborder="0" scrolling="yes">
                        </iframe>
                        -->
						<iframe src="https://calendar.google.com/calendar/embed?src=bbx719%40gmail.com&ctz=America/Los_Angeles" style="border: 0" width="500" height="400" frameborder="0" scrolling="no"></iframe>
					</div>
					<span class ="moreinfo" ><a href="http://kaneses.greenrivertech.net/kfb_calendar.html">More About Scheduled Events ...</a></span>
				</div>








				<div id = "Volunteer" class = "pageblock">
					<div id="header-8">
						<?php #include "kfb_volunteer2.html" ?>

						<h2>Volunteer Opportunities</h2>
						<div class="separator-2"></div>
						<p>The Kent Food Bank and Emergency Services exists to serve the Kent School District area. The KFB supplies food, clothing, resource referrals, and emergency financial assistance to persons in need living within our service area.</p>
						<span class ="moreinfo" ><a href="kfb_volunteer.php">More Volunteer Information ...</a></span>
					</div>
				</div>

				<div id =  "contact" class="pageblock">
					<div id="header-9">
						<h2 class="space-top">Contact</h2>
						<div class="separator-2"></div>
						<a href="kfb_contactform.php">Contact us</a>
					</div>
				</div>


				<!-- main end -->





			</div>

									<!-- sidebar start -->
			<!-- ================ -->

			<?php  include "kfb_sidebar.php" ?>



			<!-- sidebar end -->


		</div>


	</section>
	<!-- main-container end -->

</div>
<!-- page-wrapper end -->

<!-- </div> -->

<?php include "kfb_footer.html" ?>
</body>
</html>