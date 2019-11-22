
<!DOCTYPE html>
<html>
<head>
	<title>loop</title>
</head>
<body>
<?php
	$a = 0;
	$b = 0;

	for($i = 0; $i <2 ; $i ++){
		$a +=10; // equavalent to a  a = a 10
		$b +=5;

	}
		echo  " At the end of the loop a = $a  and b = $b";
?>
<br/>
<?php

 	 $i =  0;
  	$num =  50;
 	 while($i < 2){
 	 	$num--;
 	 	$i++;
 	 }
 	 echo " loop  stopped at i = $i and num =$num";
?>
<br/>
<?php

		$i =0;
		$num = 0;
		do{
			$i++;

		}while($i<10);
		echo "loop stopped  at i = $i";
?>
	 <br><a href="index.php">back</a>




</body>
</html>
