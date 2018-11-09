<html>
<body style = "text-align : centre; font-size:50 px;">
<br>
<?php
if (!isset ($_GET ['op']) || !isset($_GET ['x'])|| !isset($_GET ['y'])){
	echo "<h1> incorrect or incomplete dataaaaaaaa </h1>";
	exit ();
}

$x = $_GET ['x'];
$y = $_GET ['y'];

switch ($_GET ['op']){
case 'sum' :
	$result = $x + $y;
	echo " <h1> $x + $y = $result </h1> ";
	break;
case 'subtract' :
	$result = $x - $y;
	echo "<h1> $x - $y = $result </h1>";
	break;	
case 'mult' :
	$result = $x * $y;
	echo "<h1> $x * $y = $result </h1>";
	break;	
case 'divide' :
	if ($y == 0){
		echo "<h1>cannot divide by  zero !</h1>";
	}
	else {	
		$result = $x / $y;
		echo "<h1> $x/$y = $result </h1>";
		break;	
	}
}
?>
</body>
</html>

