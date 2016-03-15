<?php
if(!isset($_SESSION))
{
	session_start();
}
else
{
//	$sessionID = $
}
?><?php include "kfb_head.php" ?>

<body class="no-trans   ">
	
<?php include "kfb_menubar.php" ?>
 <div class="page-wrapper">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<link href="print.css" rel="stylesheet" media="print" type="text/css" />
    <script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.1.min.js" > </script>
    <script type="text/javascript">
		
		function PrintElem(elem)
        {
            Popup($(elem).html());
        }

        function Popup(data)
        {
            var mywindow = window.open('', 'my div', 'height=400,width=600');
            mywindow.document.write('<html><head><title>Top Ten Items</title>');
            mywindow.document.write('<link rel="stylesheet" href="kfb_top10_print.css" media="print" type="text/css" />');
            mywindow.document.write('</head><body >');
			mywindow.document.write('<img src ="images/kfb_logo15-dropshadow5.png"><br><br>');
			mywindow.document.write('Kent Food Bank');
			mywindow.document.write('<pre>');
            mywindow.document.write(data);
			mywindow.document.write('</pre>');
            mywindow.document.write('</body></html>');
			
			mywindow.document.close(); // necessary for IE >= 10
            mywindow.focus(); // necessary for IE >= 10

            mywindow.print();
            mywindow.close();

            return true;
        }

    </script>

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container kfb_background" >

				<div class="container" >
					<div class="row" >


						<!-- main start -->
						<!- page content starts here
							page content starts here
							page content starts here -->
							
    	
							
	<div class="main col-md-9">					

		
	<div class ="donations">
		<div id = id0 class="pageblock" style="text-align:center">

				<h1 >Donations</h1>	
		</div>
		
        <div div id = id1 class = "pageblock">
			<div id ="donations/top 10 needed items">
				
				
				<br id ="header-1">
				<h1>Top 10 needed items</h1>
<!--				<ul>-->
<!--					<li>Soup-condensed and ready to eat</li>-->
<!--					<li>Canned vegetable</li>-->
<!--					<li>Canned tomato products</li>-->
<!--					<li>Canned fruit</li>-->
<!--					<li>Cannned proteins-SPAM, tuna, chicken</li>-->
<!--					<li>Ready to eat meals - chili, Chef Boyardee</li>-->
<!--					<li>Canned or bagged beans</li>-->
<!--					<li>Toiletries</li>-->
<!--					<li>Diapers and Formula</li>-->
<!--					<li>Office supplies - paper, pens, garbage bags </li>   -->
<!--				</ul><br>-->

<pre id= "topten" class="kfb_topten" >
<?php include "kfb_topten.txt"; ?>
</pre>

			 <!--This line and the BUTTON will not be printed-->
				<input type="button" value="Print List" onclick="PrintElem('#topten')" />
				<br><br>
					
				<h3>Clothing Bank</h3>Accepts donations on T, W, and F from 10am - 12:30pm of
				gently used men's, women's, children's, clothing along with small household items at
				515 W. Harrison Street, Suite 107 
			
			</div>
        </div>
        
		<div id = id2 class = "pageblock">
			<div id ="sponsorship levels">
				<br id ="header-2">
				
				<h1>Sponsorship Levels</h1>
				
				<p>We are excited this year to provide you with a number of different options to support the Kent Food Bank Annual Breakfast with.
				We have two different payment options, a one-time sponsorship payment or monthly installments. Both options	will make
				a direct difference for families in need.</p>
				
			
				<h3>Gold</h3>
				<h4>$3,000 or $250 per month for a year</h4>
				<ul id="gold">
					<li>Logo and name recognition on printed materials</li>
					<li>Logo and name recognition in annual report</li>
					<li>Logo and name recognition on our Facebook page</li>
					<li>Verbal recognition day of event </li>
					<li>Verbal recognition day of event </li>
					<li>Certificate of Appreciation </li>   
				</ul>
            </div>

				
				<h3>Silver</h3>
				<h4>$1,500 or $125 per month for a year</h4>
				<ul id="silver">
					<li>Logo and name recognition on printed materials</li>
					<li>Name recogntion in annual report</li>
					<li>Logo and name recognition on our Facebook page</li>
					<li>Verbal recognition day of event</li>
					<li>Each table of Honor guest will receive 3 raffle tickets</li>  
				</ul>
				
				<h3>Bronze</h3>
				<h4>$1,000 or $85 per month for a year </h4>
				<ul id="silver">
					<li>Name recognition on printed materials </li>
					<li>Name recogntion in annual report</li>
					<li>Name recognition on our Facebook page</li>
					<li>Verbal recognition day of event</li>
					<li>Table of Honor at event</li>  
				</ul>
				<a href="kfb_sponsorform.php">Sponsorship Form</a>
			</div>
		</div>
	
        <div id = id3 class = "pageblock">
			<div id ="AmazonSmile">
				
				<br id ="header-3">
				<h1>Amazon Smile</h1>
				
				
				<p><h6>What is AmazonSmile?</h6>AmazonSmile is a simple and automatic way for you to support your
				   favorite charitable organization every time you shop, at no cost to you.
				   When you shop at smile.amazon.com, you’ll find the exact same low prices,vast selection and convenient shopping
				   experience as Amazon.com, with the added bonus that Amazon will donate a portion of the purchase price to your favorite
				   charitable organization.You can choose from nearly one million organizations to support.<br><br>
				   
				  <h6>How much of my purchase does Amazon donate?</h6>The AmazonSmile Foundation will donate 0.5% of the purchase price
					from your eligible AmazonSmile purchases. The purchase price is the mount paid for the item minus any rebates and
					excluding shipping & handling, gift-wrapping fees, taxes, or service charges. From time to time, we may offer special,
					limited time promotions that increase the donation amount on one or more products or services or provide or additional
					donations to charitable organizations. Special terms and restrictions may apply. Please see the relevant promotion for
					complete details.<br><br>
					
					
				   <h6>Can I use my existing Amazon.com account on AmazonSmile?</h6>Yes, you use the same account on Amazon.com and
					AmazonSmile. Your shopping cart, Wish list, wedding or baby registry, and
					other account settings are also the same.<br><br>
					
				   
				   <h5>For more Information, please visit</h5>
				   <a href="http://smile.amazon.com/">smile.amazon.com</a>
				   <a href="http://smile.amazon.com/"><img src="images/amazonsmile.png" alt="AmazonSmile logo"></a>
				   
				</p>
			
			</div>
		</div>
	
		<div id =id5 class = "pageblock">
			<div id ="FredMeyer">
				
				<br id ="header-4">
				<h1>FredMeyer</h1>
				
				<p><h5>you can help kent food bank earn donations</h5><em>Every time you shop and use your Rewards Card, you are helping
				Kent Food bank earn a donation.</em> Sign up for the Community Rewards program by linking your Fred Meyer Rewards<br>
				Card to Kent Food bank at:<a href="http://www.fredmeyer.com/communityrewards">fredmeyer.com/communityrewards </a><br><br>
				You can search for us by name, Kent Food Bank or by our NPO # 83698<br><br>
				   
				<h5>For More Information, please visit</h5>
				<a href="http://www.fredmeyer.com/communityrewards">fredmeyer.com/communityrewards</a>
				   
			   <a href="http://www.fredmeyer.com/communityrewards"><img src="images/fredmeyer.png" alt="FredMeyer logo"></a>
			   
				</p>
				
				

				
			</div>
		</div>	
			
			
			
	</div>
	
							<!-- sidebar start -->
						<!-- ================ -->
						<?php
							include "kfb_donate_sidebar.html"
						?>
						<!-- sidebar end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->
			


			
		</div>
		<!-- page-wrapper end -->
	
   <?php include "footer.html" ?>
</body>
<html>
