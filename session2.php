<?php session_start() ?>

<!DOCTYPE html>
<body>
<?php
   
echo "$_cookie[first]";  
echo "$_cookie[age]";  
echo "$_cookie[color]";

echo "$_session[first]";  
echo "$_session[age]";  
echo "$_session[color]";  
  
?>

  
  
</body>
</html>    