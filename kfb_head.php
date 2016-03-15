<?php if(!isset($_SESSION)) {
	session_start();
}?>
<!DOCTYPE html>
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
		<!--<link href='kfb_sytle.css' rel='stylesheet'>-->

		<!--<link rel = "stylesheet" type="text/css" href="kfb_style.css">-->
		<link rel = "stylesheet" type="text/css" href="kfb_vbg.css">

		<link rel="stylesheet" type="text/css" href="kfb_login_style_4.css">
		<script type="text/javascript" src="kfb_login_effect.js"></script>
	    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	    <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
	    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" />

        <?php include "kfb_footer.html" ?>

		<?php include "kfb_jsfunctions.php" ?>



<script type="text/javascript">
    //SetTheme("test.css");
    var debug = false;
    DebugAlert ("Header Script::: getCookie(\"Theme\")",false);
    var Theme = getCookie("Theme");
	DebugAlert ("Header Script::: getCookie(" + Theme + ")",debug);

    
    // document.getElementById("demo").innerHTML = "checking theme name " + theme;
    if (typeof(Theme) == "undefined")
    {
        DebugAlert("Script:: No theme has been set",debug);
        var ThemeFileName = "kfb_style.css";

        SetTheme(ThemeFileName);
        setCookie("Theme", ThemeFileName);
        //document.getElementById("demo").innerHTML = "The theme is: " + Theme;
    }
    else
    {
        DebugAlert("Script:: setting theme to::: " + Theme,debug);
        SetTheme(Theme);
        //document.getElementById("demo").innerHTML = "The theme is: " + getCookie("Theme");
    }
</script>

	
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


</head>


<?php include "kfb_login_dialog.php" ?>


		