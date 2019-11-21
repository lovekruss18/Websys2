<?php
  if(isset($_REQUEST["lastname"] ) || isset ( $_REQUEST["age"])|| isset($_REQUEST["pass"])){
  	if(preg_match("/[^A-ZA-z'-]/",$_REQUEST['pass'])),{
    echo "Welcome".$_GET['lastname']."<br/>";
  	echo  "You are ".$_GET['age']."years  old";
  	echo  "My password". $_GET['pass']."this  is unsercured";
  }
  elseif 
   {
    die("password completely  doesnot meet. your password  must contain  1  uppercase and 1 lowercase and  1  number");
  }
?>

<
</body>
</html>