<?php
  if(isset($_GET["lastname"] ) || isset ( $_GET["age"])){
  	echo "Welcome".$_GET['lastname']."<br/>";
  	echo  "You are ".$_GET['age']."years  old";
  	echo  "My password". $_GET['pass']."this  is unsercured";
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Get Method</title>
</head>
<body>
   <form  action = "<?php $_PHP_SELF ?>" method = "GET">
   Name: <input type="text" name="lastname"/>
   Age :  <input type="text" name="age"/>
   Password: <input type="password" name="pass"/>
   <input type="submit" value="Submit">
   </form>
</body>
</html>