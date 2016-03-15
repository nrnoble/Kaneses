<?php
if(!isset($_SESSION))
{
	session_start();
}
else
{
//	$sessionID = $
}

if (empty($_POST['logout']))
	$_POST['logout'] = "";

	if ($_POST['logout']== "istrue")
	{
		$_SESSION['access'] = false;
		$_POST['logout'] = null;
		header('Location: index.php');
	}
	else
	{
		//header('Location: index.php');
	}







if ($_SESSION['access'] == true)
{
	//echo "<script>alert('login true')</script>";
}
else
{

	$test = "login false";

	echo "<script>alert('$test')</script>";
	header('Location: index.php');
}

?><?php include "kfb_head.php" ?>

<body class="no-trans   ">

<?php include "kfb_menubar.php" ?>







<div class="page-wrapper">

	<!-- main-container start -->
	<!-- ================ -->
	<section class="main-container kfb_background">

		<div class="container">


				<!-- main start -->

				<div class="main col-md-9">

					<div id = "volunteers" class = "pageblock">
						<h2>Administrative</h2>

						<form id = "logout" method = "post" action = "kfb_administrative.php" >
							<input type="hidden" name="logout" id="hiddenField" value="istrue" />
							<input type = "submit" id = "logout1" value="Logout">
						</form>


					</div>

					<div id  ="kfb_volunteerlist"  class="pageblock">
						<!-- main start -->
						<!-- page content starts here page content starts here page content starts here -->

						Volunteer: <a href="kfb_volunteerlist.php">Volunteer List</a>

					</div>


					<div id  ="kfb_volunteerlist"  class="pageblock">
						<!-- main start -->
						<!-- page content starts here page content starts here page content starts here -->

						Sponsors: <a href="kfb_sponsorshiplist.php">Sponsorship List</a>

					</div>


					<div id = 'kfb_themes' class = "pageblock">
						Themes
						<select id ="themeId" name ="kfb_themes" onmousedown="this.value='';" onchange="ChangeThemes(this.value);">
							<!--<select name="size" id="size">-->
							<option value="custom-1">Default</option>
							<option value="custom-2">Spring</option>
							<option value="custom-3">Summer</option>
							<option value="custom-4">Christmas</option>
							<option value="custom-5">Solid Colors</option>
						</select>


						<script type="text/javascript">
							function ChangeThemes(value)
							{
								debug=false;
								//var h = document.getElementsByTagName('head').item(0);
								//var s = document.createElement("link");
								//s.type = "text/css";
								//s.appendChild(document.createTextNode("href=\"test.css\ rel=\"stylesheet\""));
								//h.appendChild(s);
								var cssfile = "";
								var cssId = "";
								DebugAlert("ChangeThemes:: value=" + value, debug);

								if (value == "custom-1")
								{
									cssfile = 'kfb_style.css';
									cssId = value;
								}

								if (value == "custom-2")
								{
									DebugAlert("ChangeThemes:: Changing them to 'neal.css'", debug);
									cssfile = 'kfb_style_2.css';
									cssId = value;
								}

								if (value == "custom-3")
								{
									cssfile = 'kfb_style_3.css';
									cssId = value;
								}

								if (value == "custom-4")
								{
									cssfile = 'kfb_style_4.css';
									cssId = value;
								}
								if (value == "custom-5")
								{
									cssfile = 'neal.css';
									cssId = value;
								}

								DebugAlert("ChangeThemes:: cssfile=" + cssfile, debug);

								//var cssId = 'myCss';  // you could encode the css path itself to generate id..
								//if (!document.getElementById(cssId))
								if (value!="")
								{

									// $(document).ready(function(){
									//$("#msgid").html("This is Hello World by JQuery " + value );
									//});
									// $('link[id=myCss2]').remove();
									//$('link[id=myCss1]').remove();
									$("link[href='kfb_style.css']").remove();
									//$("link['kfb_style.css']");
									//$('link[rel=stylesheet][href="test.css"]').remove();
									//$('link[rel=stylesheet][href="test2.css"]').remove();
									//$("link[href='test.css']").prop('disabled', true);
									//$("link[href='test2.css']").prop('disabled', true);
									//var head  = document.getElementsByTagName('head')[0];
									//var link  = document.createElement('link');
									//link.id   = cssId;
									//link.rel  = 'stylesheet';
									//link.type = 'text/css';
									//link.href = cssfile;
									//link.media = 'all';
									//head.appendChild(link);
									//cssId ="";
									//cssfile = 'kfb_style.css';
									DebugAlert("ChangeThemes:: SetTheme('" + cssfile + "');",debug );
									SetTheme(cssfile);
								}
							}
						</script>




					</div>



					<div id="top10" class="pageblock">

					<h2> top 10</h2>

					<form name="savefile" method="post" action="">

						<?php
						$topten = "";
						$filename = "kfb_topten.txt";
						if(!file_exists("index.php"))
						{
							exit("Error: File does not exist....");
						}
						$file = fopen($filename, "r");
						while(!feof($file))
						{
							$topten = $topten .fgets($file);
							//echo fgets($file). "<br />";
						}
						fclose($file);

						if (isset($_POST))
						{

							$_POST['filename'] = 'kfb_topten.txt';
							if (empty($_POST['submitsave']))
								$_POST['submitsave'] = "";

							if ($_POST['submitsave'] == "Save List"  && !empty($_POST['filename']))
							{
								if(!file_exists($_POST['filename']))
								{
									$file = tmpfile();
								}
								$file = fopen($_POST['filename'],"a+");

								$text = $_POST["textdata"];
								file_put_contents($_POST['filename'],$text);
								fclose($file);
								$topten = $text;
							}



						}
						?>

						<!--    File Name: <input type="text" name="filename" value=""><br/>-->
						<textarea rows="12" cols="80" name="textdata" class = "kfb_top10editbox"><?php echo "$topten"; ?> </textarea><br/><br>
						<input type="submit" name="submitsave" value="Save List" class="kfb_button">
					</form>





					</div>


				</div>
				<!-- main end -->

				<!-- sidebar start -->
				<!-- ================ -->

				<?php #include"kfb_sidebar.html" ?>

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