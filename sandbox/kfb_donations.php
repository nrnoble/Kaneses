<?php include "kfb_head.php" ?>

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
			mywindow.document.write('<h1><img src ="images/kfb_logo15-dropshadow5.png"></h1><br><br>');
			mywindow.document.write('<h1>Kent Food Bank</h1><br>');
			mywindow.document.write('<h1>Top Ten Items List</h1>');
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
					
				
			
			</div>
        </div>
        
		<div id = id2 class = "pageblock">
			<div id ="sponsorship levels">
				<br id ="header-2">
				<h1>Sponsorship Levels</h1>
				<h2>Gold</h2>
				<h3>$3,000 or $250 per month for a year</h3>
				<ul id="gold">
					<li>Logo and name recognition on printed materials</li>
					<li>Logo and name recognition in annual report</li>
					<li>Logo and name recognition on our Facebook page</li>
					<li>Verbal recognition day of event </li>
					<li>Verbal recognition day of event </li>
					<li>Certificate of Appreciation </li>   
				</ul>
            </div>

				
				<h2>Silver</h2>
				<h3>$1,500 or $125 per month for a year</h3>
				<ul id="silver">
					<li>Logo and name recognition on printed materials</li>
					<li>Name recogntion in annual report</li>
					<li>Logo and n