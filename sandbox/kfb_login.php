<!--http://talkerscode.com/webtricks/create-a-login-form-on-popup-box-using-jquery.php-->

<html>
   <head>
     <link rel="stylesheet" type="text/css" href="kfb_login_style.css">
       <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
     <script type="text/javascript" src="kfb_login_effect.js"></script>
   </head>
   
   <body>

     <center>

	 <input type="button" id="show_login" value="Show Login">
        
        <div id = "loginform">
        
            <form method = "post" action = "kfb_dologin.php">
                <p>Kent Food Bank</p>

                <input type = "image" id = "close_login" src = "kfb_images/close.png">
                <input type = "text" id = "login" placeholder = "Email Id" name = "uid">
                <input type = "password" id = "password" name = "upass" placeholder = "***">
                <input type = "submit" id = "dologin" value = "Login">
            </form>

        </div>

     </center>


     <script>
         $(function()
         {
             $( "#loginform" ).dialog();
         });
     </script>

     <?php include "kfb_footer.html" ?>
   </body>
</html>