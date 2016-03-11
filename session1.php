<?php
  if (isset ($_GET ['btnsubmit']))
  {
	$first = $_GET ['first'];
	$age = $_GET ['age'];	
	$color = $_GET ['color'];
 
    session_start();
    $_SESSION ['first'] = $first;
    $_SESSION ['age'] = $age;
    $_SESSION ['color'] = $color;
    
 
    setcookie("first",$first);
    setcookie("age",$age);
    setcookie("color",$color);
    echo "thanks";
    echo "<a href ='session2.php'> go to another page";
    exit;
  }
  
  ?>

<!DOCTYPE html>
  

  
  
  
  
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Hello</title>
  </head>
  <body>

   
   <form method="get" action="">
	<label>First name:
          <input type="text" name="first"
				 value="">
        </label><br>
        
        <label>Age:
          <input type="text" name="age"
				 value="">
        </label><br>
	
	<label>Favorite Color:</label>
	<br>
	  <input type='radio' name='color'
		  value='red'>red<br><input type='radio' name='color'
		  value='blue'>blue<br><input type='radio' name='color'
		  value='yellow'>yellow<br>        
	<input type="submit" value="Submit" name="btnSubmit">
   </form>
   
   <h3>Submissions</h3>
   1, Joe, 20, blue<br>2, Gurman, 25, yellow<br>13, Tina, 45, blue<br>14, Tina, 45, blue<br>7, Jenna, 45, blue<br>11, Paige, 25, purple<br>12, Kimberly, 30, black<br>   
  </body>
</html>    