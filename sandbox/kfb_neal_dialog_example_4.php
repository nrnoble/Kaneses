<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Dialog - Default functionality</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<!--    <link rel="stylesheet" href="/resources/demos/style.css">-->
    <link rel="stylesheet" type="text/css" href="kfb_login_style_4.css">
    <script type="text/javascript" src="kfb_login_effect.js"></script>
    <script>
        $(function()
        {
            $( "#dialog").dialog({height: 350, width: 350, autoOpen: false});
//
        });
    </script>
</head>
<body>

<input type="button" id="show_login" value="Show Login">
<input type="button" id="close_login" value="close_login">


    <div id="dialog" title="Administraive Login" style="display: none">
        <center>


            <form id = "Loginform" method = "post" action = "kfb_dologin.php" >
                <input type = "text" id = "login" placeholder = "" name = "uid">
                <input type = "password" id = "password" name = "upass" placeholder = "***">
                <input type = "submit" id = "dologin" value = "Login">
            </form>


        </center>
    </div>


</body>
</html>