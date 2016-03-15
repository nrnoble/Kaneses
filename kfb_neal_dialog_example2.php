<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Dialog - Default functionality</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" type="text/css" href="kfb_login_style_2.css">
    <script type="text/javascript" src="kfb_login_effect.js"></script>
    <script>
        $(function()
        {
            $( "#foo" ).dialog();
        });
    </script>
</head>
<body>

<div id="foo">
    <center>
    <div id = "loginform">

        <form method = "post" action = "">
            <p>Kent Food Bank</p>

            <input type = "image" id = "close_login" src = "kfb_images/close.png">
            <input type = "text" id = "login" placeholder = "Email Id" name = "uid">
            <input type = "password" id = "password" name = "upass" placeholder = "***">
            <input type = "submit" id = "dologin" value = "Login">
        </form>

    </div>
    </center>
</div>


</body>
</html>