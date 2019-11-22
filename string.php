<!DOCTYPE html>
<html>
<head>
	<title>String</title>
</head>
<body>
<?php
		$a =  1+1;
		$b  ='1'+'1';
		echo" variable  a is $a <br/>";
		echo"  variable b is  $b  <br/>";

		?>

		<?php

		$variable  =  "name";
		$literally = 'My $variable will  not print!\n';
		print($literally);
		print"<br/>";

		$literally = "My  $variable will print!\n";
		print($literally)
		?>

		<?php

		$string1 = "Hello World";
		$string2 = "1234";
		echo  $string1."". $string2
		?>
						</body>
</html>